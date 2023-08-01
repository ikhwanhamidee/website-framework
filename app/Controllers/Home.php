<?php

namespace App\Controllers;

use App\Models\Gallery;
use App\Models\Member;
use App\Models\News;
use App\Models\PageEditorEng;
use App\Models\Staff;
use App\Models\Work;

class Home extends BaseController
{

    protected $table = 'members';
    private $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {

        $page_engs = new PageEditorEng();

        // Retrieve a single row based on a condition (e.g., ID = 1)
        $members = new Member();
        $works = new Work();
        $membercounts = $members->countAllResults();
        $workcounts = $works->countAllResults();
        $data = $page_engs->where('id', 1)->first();


        $data = [
            'data' => $data,
            'membercounts' => $membercounts,
            'workcounts' => $workcounts

        ];

        return view('index', $data);
    }

    public function objective()
    {
        return view('objective');
    }

    public function definition()
    {
        $page_engs = new PageEditorEng();

        // Retrieve a single row based on a condition (e.g., ID = 1)
        $data = $page_engs->where('id', 1)->first();

        $data = [
            'data' => $data
        ];
        return view('definition', $data);
    }

    public function whyRegister()
    {
        return view('whyregister');
    }

    public function contactInfo()
    {
        return view('contactinfo');
    }

    public function eligibleMember()
    {
        return view('eligiblemember');
    }

    public function MRSmembers()
    {
        $currentPage = $this->request->getVar('page_members') ? $this->request->getVar('page_members') : 1;


        // Get data 
        $members = new Member();
        $counts = $this->db->table($this->table)->countAllResults();

        $paginateData = $members->orderBy('member_name', 'ASC')->paginate(20, 'members');

        $data = [
            'counts' => $counts,
            'members' => $paginateData,
            'pager' => $members->pager,
            'currentPage' => $currentPage,
        ];
        return view('memberMRS', $data);
    }

    public function listWorks()
    {
        $currentPage = $this->request->getVar('page_works') ? $this->request->getVar('page_works') : 1;


        // Get data 
        $works = new Work();
        $counts = $this->db->table($this->table)->countAllResults();

        $paginateData = $works->orderBy('song_name', 'ASC')->paginate(20, 'works');

        $data = [
            'counts' => $counts,
            'works' => $paginateData,
            'pager' => $works->pager,
            'currentPage' => $currentPage,
        ];
        return view('listwork', $data);
    }

    public function licensing()
    {
        return view('licensing');
    }

    public function licensingPurpose()
    {
        return view('licensingpurpose');
    }

    public function copyrightInfringement()
    {
        return view('copyrightinfringement');
    }

    public function outletPremises()
    {
        return view('outletpremises');
    }

    public function singleEvent()
    {
        return view('singleevent');
    }

    public function membershipsApplication()
    {
        return view('membershipapplication');
    }

    public function staffDirectory()
    {
        $staffs = new Staff();
        $paginateData = $staffs->orderBy('id', 'ASC')->findAll();

        $data = [
            'staffs' => $paginateData,
        ];

        return view('staffdirectory', $data);
    }

    public function gallery()
    {
        $gallerys = new Gallery();
        $paginateData = $gallerys->orderBy('id', 'ASC')->paginate(12, 'gallerys');

        $data = [
            'gallerys' => $paginateData,
            'pager' => $gallerys->pager,
        ];
        return view('gallery', $data);
    }

    public function news()
    {
        $request = service('request');
        $searchData = $request->getGet();

        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }
        $news = new News();
        if ($search == '') {
            $paginateData = $news->orderBy('news_date', 'desc')->paginate(5, 'news');
        } else {
            $paginateData = $news->select('*')
                ->orLike('news_title', $search)
                ->paginate(5, 'news');
        }

        $data = [
            'news' => $paginateData,
            'pager' => $news->pager,
            'search' => $search,
        ];
        return view('news', $data);
    }

    // show single user
    public function newsDetails($id)
    {

        $request = service('request');
        $searchData = $request->getGet();

        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }
        $news = new News();
        if ($search == '') {
            $paginateData = $news->orderBy('news_date', 'desc')->paginate(5, 'news');
        } else {
            $paginateData = $news->select('*')
                ->orLike('news_title', $search)
                ->paginate(5, 'news');
        }

        $data = [
            'news' => $paginateData,
            'pager' => $news->pager,
            'search' => $search,
        ];
        $selectednews = new News();
        $data['selectednews'] = $selectednews->where('id', $id)->first();
        return view('newsdetails', $data);
    }
}

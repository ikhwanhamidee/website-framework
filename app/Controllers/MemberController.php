<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Member;


class MemberController extends BaseController
{


    protected $table = 'members';
    private $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }


    public function index()
    {

        $currentPage = $this->request->getVar('page_members') ? $this->request->getVar('page_members') : 1;
        $request = service('request');
        $searchData = $request->getGet();

        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }

        // Get data 
        $members = new Member();
        $counts = $this->db->table($this->table)->countAllResults();
        if ($search == '') {
            $paginateData = $members->orderBy('member_id', 'ASC')->paginate(10, 'members');
        } else {
            $paginateData = $members->select('*')
                ->orLike('member_name', $search)
                ->paginate(10, 'members');
        }

        $data = [
            'counts' => $counts,
            'members' => $paginateData,
            'pager' => $members->pager,
            'search' => $search,
            'currentPage' => $currentPage,
        ];


        return view('admin/members', $data);
    }

    public function memberstore()
    {
        helper(['form']);
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'member_id' => 'required|is_unique[members.member_id]',
            'member_name'  => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            $members = new Member();

            $data = [
                'member_id' => $this->request->getPost('member_id'),
                'member_name'  => $this->request->getPost('member_name'),
            ];

            $members->insert($data);

            return redirect()->back()->with('success', 'Member Added');
        }
    }
    // show single user
    public function memberedit($id)
    {
        $members = new Member();
        $data['member'] = $members->where('id', $id)->first();
        return view('admin/edit_member', $data);
    }

    public function memberupdate()
    {
        $members = new Member();
        $id = $this->request->getVar('id');
        $data = [
            'member_name'  => $this->request->getVar('member_name'),
        ];
        $members->update($id, $data);
        return redirect()->to('admin/members');
    }

    // delete user
    public function memberdelete($id)
    {
        $members = new Member();
        $members->delete($id);
        return redirect()->back()->with('success', 'Member Deleted');
    }

    public function userindex()
    {

        $currentPage = $this->request->getVar('page_members') ? $this->request->getVar('page_members') : 1;
        $request = service('request');
        $searchData = $request->getGet();

        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }

        // Get data 
        $members = new Member();
        $counts = $this->db->table($this->table)->countAllResults();
        if ($search == '') {
            $paginateData = $members->orderBy('member_id', 'ASC')->paginate(10, 'members');
        } else {
            $paginateData = $members->select('*')
                ->orLike('member_name', $search)
                ->paginate(10, 'members');
        }

        $data = [
            'counts' => $counts,
            'members' => $paginateData,
            'pager' => $members->pager,
            'search' => $search,
            'currentPage' => $currentPage,
        ];


        return view('user/members', $data);
    }

    public function usermemberstore()
    {
        helper(['form']);
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'member_id' => 'required|is_unique[members.member_id]',
            'member_name'  => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            $members = new Member();

            $data = [
                'member_id' => $this->request->getPost('member_id'),
                'member_name'  => $this->request->getPost('member_name'),
            ];

            $members->insert($data);

            return redirect()->back()->with('success', 'Member Added');
        }
    }
    // show single user
    public function usermemberedit($id)
    {
        $members = new Member();
        $data['member'] = $members->where('id', $id)->first();
        return view('user/edit_member', $data);
    }

    public function usermemberupdate()
    {
        $members = new Member();
        $id = $this->request->getVar('id');
        $data = [
            'member_name'  => $this->request->getVar('member_name'),
        ];
        $members->update($id, $data);
        return redirect()->to('user/members');
    }

    // delete user
    public function usermemberdelete($id)
    {
        $members = new Member();
        $members->delete($id);
        return redirect()->back()->with('success', 'Member Deleted');
    }
}

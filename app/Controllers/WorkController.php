<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Member;
use App\Models\Work;

class WorkController extends BaseController
{
    public function index()
    {
        $currentPage = $this->request->getVar('page_works') ? $this->request->getVar('page_works') : 1;
        $request = service('request');
        $searchData = $request->getGet();

        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }

        // Get data 
        $works = new Work();
        $members = new Member();
        $counts = $works->countAllResults();
        $membersdata = $members->orderBy('member_name', 'asc')->findAll();
        if ($search == '') {
            $paginateData = $works->orderBy('song_name', 'ASC')->paginate(10, 'works');
        } else {
            $paginateData = $works->select('*')
                ->orLike('song_name', $search)
                ->orLike('member_name', $search)
                ->paginate(10, 'works');
        }
        


        $data = [
            'counts' => $counts,
            'members' => $membersdata,
            'works' => $paginateData,
            'pager' => $works->pager,
            'search' => $search,
            'currentPage' => $currentPage,
        ];


        return view('admin/works', $data);
    }

    public function workStore()
    {
        helper(['form']);
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'song_name' => 'required',
            'member_name'  => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            $works = new Work();

            $data = [
                'song_name' => $this->request->getPost('song_name'),
                'member_name'  => $this->request->getPost('member_name'),
            ];

            $works->insert($data);

            return redirect()->back()->with('success', 'Work Added');
        }
    }

      // show single user
      public function workEdit($id)
      {
          $works = new Work();
          $data['work'] = $works->where('id', $id)->first();
          return view('admin/edit_work', $data);
      }
  
      public function workUpdate()
      {
          $works = new Work();
          $id = $this->request->getVar('id');
          $data = [
              'song_name'  => $this->request->getVar('song_name'),
          ];
          $works->update($id, $data);
          return redirect()->to('admin/listofwork')->with('success', 'Work Updated');
      }
  
      // delete user
      public function workDelete($id)
      {
          $works = new Work();
          $works->delete($id);
          return redirect()->back()->with('success', 'Work Deleted');
      }

      public function userindex()
    {
        $currentPage = $this->request->getVar('page_works') ? $this->request->getVar('page_works') : 1;
        $request = service('request');
        $searchData = $request->getGet();

        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }

        // Get data 
        $works = new Work();
        $members = new Member();
        $counts = $works->countAllResults();
        $membersdata = $members->orderBy('member_name', 'asc')->findAll();
        if ($search == '') {
            $paginateData = $works->orderBy('song_name', 'ASC')->paginate(10, 'works');
        } else {
            $paginateData = $works->select('*')
                ->orLike('song_name', $search)
                ->orLike('member_name', $search)
                ->paginate(10, 'works');
        }
        


        $data = [
            'counts' => $counts,
            'members' => $membersdata,
            'works' => $paginateData,
            'pager' => $works->pager,
            'search' => $search,
            'currentPage' => $currentPage,
        ];


        return view('user/works', $data);
    }

    public function userworkStore()
    {
        helper(['form']);
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'song_name' => 'required',
            'member_name'  => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            $works = new Work();

            $data = [
                'song_name' => $this->request->getPost('song_name'),
                'member_name'  => $this->request->getPost('member_name'),
            ];

            $works->insert($data);

            return redirect()->back()->with('success', 'Work Added');
        }
    }

      // show single user
      public function userworkEdit($id)
      {
          $works = new Work();
          $data['work'] = $works->where('id', $id)->first();
          return view('user/edit_work', $data);
      }
  
      public function userworkUpdate()
      {
          $works = new Work();
          $id = $this->request->getVar('id');
          $data = [
              'song_name'  => $this->request->getVar('song_name'),
          ];
          $works->update($id, $data);
          return redirect()->to('user/listofwork')->with('success', 'Work Updated');
      }
  
      // delete user
      public function userworkDelete($id)
      {
          $works = new Work();
          $works->delete($id);
          return redirect()->back()->with('success', 'Work Deleted');
      }
}


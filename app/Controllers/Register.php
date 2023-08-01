<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Register extends BaseController
{

    public function __construct()
    {
        helper(['form']);
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;
        $request = service('request');
        $searchData = $request->getGet();

        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }

        // Get data 
        $users = new User();

        if ($search == '') {
            $paginateData = $users->paginate(8, 'users');
        } else {
            $paginateData = $users->select('*')
                ->orLike('name', $search)
                ->paginate(8, 'users');
        }

        $data = [
            'users' => $paginateData,
            'pager' => $users->pager,
            'search' => $search,
            'currentPage' => $currentPage,
        ];

        return view('admin/registeruser', $data);
    }

    public function register()
    {
        $rules = [
            'name' => ['rules' => 'required|min_length[4]|max_length[255]|'],
            'email' => ['rules' => 'required|min_length[4]|max_length[255]|valid_email|is_unique[users.email]'],
            'password' => ['rules' => 'required|min_length[6]|max_length[255]'],
            'confirm_password'  => ['label' => 'confirm password', 'rules' => 'matches[password]'],
            'phone_no'  => ['rules' => 'required|min_length[4]|max_length[15]|'],
            'address'  => ['rules' => 'required|min_length[4]|max_length[255]|'],
            'city'  => ['rules' => 'required|min_length[4]|max_length[30]|'],
            'state'  => ['rules' => 'required|min_length[4]|max_length[30]|'],
            'postcode'  => ['rules' => 'required|min_length[4]|max_length[10]|'],
        ];


        if ($this->validate($rules)) {
            $users = new User();
            $data = [
                'name'    => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'phone_no'    => $this->request->getVar('phone_no'),
                'address'    => $this->request->getVar('address'),
                'city'    => $this->request->getVar('city'),
                'state'    => $this->request->getVar('state'),
                'postcode'    => $this->request->getVar('postcode'),
                'level' => 1,
            ];
            $users->save($data);
            return redirect()->back()->with('success', 'User berjaya disimpan.');
        } else {
            $data['errors'] = $this->validator->getErrors();
            return redirect()->back()->with('errors', $data['errors']);
        }
    }
}

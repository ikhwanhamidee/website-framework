<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Member;
use App\Models\User;
use App\Models\Work;

class Dashboard extends BaseController
{


  public function index()
  {
    $members = new Member();
    $works = new Work();
    $membercounts = $members->countAllResults();
    $workcounts = $works->countAllResults();

    $data = [
      'membercounts' => $membercounts,
      'workcounts' => $workcounts,
  ];

    return view('admin/dashboard', $data);
  }

  public function profile()
  {

    return view('admin/profile');
  }

  public function profileupdate()
  {
    $session = session();
    $users = new User();
    $id = $this->request->getVar('id');
    $data = [
      'name' => $this->request->getVar('name'),
      'email'  => $this->request->getVar('email'),
      'phone_no'  => $this->request->getVar('phone_no'),
      'address'  => $this->request->getVar('address'),
      'city'  => $this->request->getVar('city'),
      'state'  => $this->request->getVar('state'),
      'postcode'  => $this->request->getVar('postcode'),
    ];

    $ses_data = [
      'id' => $this->request->getVar('id'),
      'name' => $this->request->getVar('name'),
      'email'  => $this->request->getVar('email'),
      'phone_no'  => $this->request->getVar('phone_no'),
      'address'  => $this->request->getVar('address'),
      'city'  => $this->request->getVar('city'),
      'state'  => $this->request->getVar('state'),
      'postcode'  => $this->request->getVar('postcode'),
      'isLoggedIn' => TRUE
    ];

    $users->update($id, $data);
    $session->set($ses_data);
    // return redirect()->to('admin/profile');
    return redirect()->back()->with('success', 'Data updated succesfully.');
  }

  public function changepassword()
  {
    $userModel = new User();
    $id = $this->request->getVar('id');
    $user = $userModel->where('id', $id)->first();
    $currentPassword = $this->request->getVar('current_password');
    $newPassword = $this->request->getVar('password');
    $confirmPassword = $this->request->getVar('confirm_password');
    $rules = [
      'current_password' => ['rules' => 'required|min_length[6]'],
      'password' => ['rules' => 'required|min_length[6]'],
      'confirm_password'  => ['label' => 'confirm password', 'rules' => 'matches[password]'],
    ];

    $pwd_verify = password_verify($currentPassword, $user['password']);
 
    if(!$pwd_verify) {
        return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
    }

    if ($this->validate($rules)) {
      $users = new User();
      $data = [
        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
      ];
      $users->update($id, $data);
      return redirect()->back()->with('success1', 'Password berjaya ditukar.');
    } else {
      $data['errors'] = $this->validator->getErrors();
      return redirect()->back()->with('errors1', $data['errors']);
    }
  }

  public function userindex()
  {
    $members = new Member();
    $works = new Work();
    $membercounts = $members->countAllResults();
    $workcounts = $works->countAllResults();

    $data = [
      'membercounts' => $membercounts,
      'workcounts' => $workcounts,
  ];

    return view('user/dashboard', $data);
  }

  public function userprofile()
  {

    return view('user/profile');
  }

  public function userprofileupdate()
  {
    $session = session();
    $users = new User();
    $id = $this->request->getVar('id');
    $data = [
      'name' => $this->request->getVar('name'),
      'email'  => $this->request->getVar('email'),
      'phone_no'  => $this->request->getVar('phone_no'),
      'address'  => $this->request->getVar('address'),
      'city'  => $this->request->getVar('city'),
      'state'  => $this->request->getVar('state'),
      'postcode'  => $this->request->getVar('postcode'),
    ];

    $ses_data = [
      'id' => $this->request->getVar('id'),
      'name' => $this->request->getVar('name'),
      'email'  => $this->request->getVar('email'),
      'phone_no'  => $this->request->getVar('phone_no'),
      'address'  => $this->request->getVar('address'),
      'city'  => $this->request->getVar('city'),
      'state'  => $this->request->getVar('state'),
      'postcode'  => $this->request->getVar('postcode'),
      'isLoggedIn' => TRUE
    ];

    $users->update($id, $data);
    $session->set($ses_data);
    return redirect()->back()->with('success', 'Data updated succesfully.');
  }

  public function userchangepassword()
  {
    $userModel = new User();
    $id = $this->request->getVar('id');
    $user = $userModel->where('id', $id)->first();
    $currentPassword = $this->request->getVar('current_password');
    $newPassword = $this->request->getVar('password');
    $confirmPassword = $this->request->getVar('confirm_password');
    $rules = [
      'current_password' => ['rules' => 'required|min_length[6]'],
      'password' => ['rules' => 'required|min_length[6]'],
      'confirm_password'  => ['label' => 'confirm password', 'rules' => 'matches[password]'],
    ];

    $pwd_verify = password_verify($currentPassword, $user['password']);
 
    if(!$pwd_verify) {
        return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
    }

    if ($this->validate($rules)) {
      $users = new User();
      $data = [
        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
      ];
      $users->update($id, $data);
      return redirect()->back()->with('success1', 'Password berjaya ditukar.');
    } else {
      $data['errors'] = $this->validator->getErrors();
      return redirect()->back()->with('errors1', $data['errors']);
    }
  }
}

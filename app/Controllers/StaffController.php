<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Staff;

class StaffController extends BaseController
{

    public function index()
    {
        $currentPage = $this->request->getVar('page_staffs') ? $this->request->getVar('page_staffs') : 1;
         // Get data 
         $staffs = new Staff();
         $counts = $staffs->countAllResults();
 
         $paginateData = $staffs->orderBy('id', 'ASC')->paginate(20, 'staffs');
 
         $data = [
             'counts' => $counts,
             'staffs' => $paginateData,
             'currentPage' => $currentPage,
         ];
        return view('admin/staff_directory', $data);
    }

    public function staffStore()
    {
        helper(['form']);
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'staff_name' => 'required',
            'staff_position'  => 'required',
            'staff_contact'  => 'required',
            'staff_pic'  => 'uploaded[staff_pic]|mime_in[staff_pic,image/jpg,image/jpeg,image/png,image]|max_size[staff_pic,6144]',

        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            $staffs = new Staff();

            $gambar = $this->request->getFile('staff_pic');
            if ($gambar->isValid()) {
                $imageName = date('YmdHis') . '.' . $gambar->getExtension();
                $gambar->move('assets/images/staff/', $imageName);
            }

            $data = [
                'staff_name' => $this->request->getPost('staff_name'),
                'staff_position'  => $this->request->getPost('staff_position'),
                'staff_contact'  => $this->request->getPost('staff_contact'),
                'staff_pic'  => $imageName,

            ];

            $staffs->insert($data);

            return redirect()->back()->with('success', 'Staff Added Successfully');
        }
    }

     // show single user
     public function staffEdit($id)
     {
         $staffs = new Staff();
         $data['staff'] = $staffs->where('id', $id)->first();
         return view('admin/edit_staff', $data);
     }
 
     public function staffUpdate()
     {
         $staffs = new Staff();
         $id = $this->request->getVar('id');
         $gambar = $this->request->getFile('staff_pic');
         if ($gambar->isValid()) {
             $imageName = date('YmdHis') . '.' . $gambar->getExtension();
             $gambar->move('assets/images/staff/', $imageName);
         
         $data = [
             'staff_name'  => $this->request->getVar('staff_name'),
             'staff_position'  => $this->request->getVar('staff_position'),
             'staff_contact'  => $this->request->getVar('staff_contact'),
             'staff_pic'  => $imageName,
         ];
        }
        else {
            $data = [
                'staff_name'  => $this->request->getVar('staff_name'),
                'staff_position'  => $this->request->getVar('staff_position'),
                'staff_contact'  => $this->request->getVar('staff_contact'),
            ];
        }
         $staffs->update($id, $data);
         return redirect()->to('admin/staff')->with('success', 'Staff Updated');
     }
 
     // delete user
     public function staffDelete($id)
     {
         $staffs = new Staff();
         $staffs->delete($id);
         return redirect()->back()->with('success', 'Staff Deleted');
     }

     public function userindex()
    {
        $currentPage = $this->request->getVar('page_staffs') ? $this->request->getVar('page_staffs') : 1;
         // Get data 
         $staffs = new Staff();
         $counts = $staffs->countAllResults();
 
         $paginateData = $staffs->orderBy('id', 'ASC')->paginate(20, 'staffs');
 
         $data = [
             'counts' => $counts,
             'staffs' => $paginateData,
             'currentPage' => $currentPage,
         ];
        return view('user/staff_directory', $data);
    }

    public function userstaffStore()
    {
        helper(['form']);
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'staff_name' => 'required',
            'staff_position'  => 'required',
            'staff_contact'  => 'required',
            'staff_pic'  => 'uploaded[staff_pic]|mime_in[staff_pic,image/jpg,image/jpeg,image/png,image]|max_size[staff_pic,6144]',

        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            $staffs = new Staff();

            $gambar = $this->request->getFile('staff_pic');
            if ($gambar->isValid()) {
                $imageName = date('YmdHis') . '.' . $gambar->getExtension();
                $gambar->move('assets/images/staff/', $imageName);
            }

            $data = [
                'staff_name' => $this->request->getPost('staff_name'),
                'staff_position'  => $this->request->getPost('staff_position'),
                'staff_contact'  => $this->request->getPost('staff_contact'),
                'staff_pic'  => $imageName,

            ];

            $staffs->insert($data);

            return redirect()->back()->with('success', 'Staff Added Successfully');
        }
    }

     // show single user
     public function userstaffEdit($id)
     {
         $staffs = new Staff();
         $data['staff'] = $staffs->where('id', $id)->first();
         return view('user/edit_staff', $data);
     }
 
     public function userstaffUpdate()
     {
         $staffs = new Staff();
         $id = $this->request->getVar('id');
         $gambar = $this->request->getFile('staff_pic');
         if ($gambar->isValid()) {
             $imageName = date('YmdHis') . '.' . $gambar->getExtension();
             $gambar->move('assets/images/staff/', $imageName);
         
         $data = [
             'staff_name'  => $this->request->getVar('staff_name'),
             'staff_position'  => $this->request->getVar('staff_position'),
             'staff_contact'  => $this->request->getVar('staff_contact'),
             'staff_pic'  => $imageName,
         ];
        }
        else {
            $data = [
                'staff_name'  => $this->request->getVar('staff_name'),
                'staff_position'  => $this->request->getVar('staff_position'),
                'staff_contact'  => $this->request->getVar('staff_contact'),
            ];
        }
         $staffs->update($id, $data);
         return redirect()->to('user/staff')->with('success', 'Staff Updated');
     }
 
     // delete user
     public function userstaffDelete($id)
     {
         $staffs = new Staff();
         $staffs->delete($id);
         return redirect()->back()->with('success', 'Staff Deleted');
     }

}
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Gallery;
use App\Models\Work;

class GalleryController extends BaseController
{

    public function index()
    {
        $currentPage = $this->request->getVar('page_gallerys') ? $this->request->getVar('page_gallerys') : 1;
         // Get data 
         $gallerys = new Gallery();
         $counts = $gallerys->countAllResults();
 
         $paginateData = $gallerys->orderBy('id', 'ASC')->paginate(16, 'gallerys');
 
         $data = [
             'counts' => $counts,
             'gallerys' => $paginateData,
             'pager' => $gallerys->pager,
             'currentPage' => $currentPage,
         ];
        return view('admin/gallery', $data);
    }

     // save pic
    public function galleryStore()
    {
        helper(['form']);
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'pic_name'  => 'uploaded[pic_name]|mime_in[pic_name,image/jpg,image/jpeg,image/png,image]|max_size[pic_name,6144]',

        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            $gallerys = new Gallery();

            $gambar = $this->request->getFile('pic_name');
            if ($gambar->isValid()) {
                $imageName = date('YmdHis') . '.' . $gambar->getExtension();
                $gambar->move('assets/images/gallery/', $imageName);
            }

            $data = [
                'pic_name'  => $imageName,

            ];

            $gallerys->insert($data);

            return redirect()->back()->with('success', 'Picture Added Successfully');
        }
    }

     // delete pic
     public function galleryDelete($id)
     {
         $gallerys = new Gallery();
         $gallerys->delete($id);
         return redirect()->back()->with('success', 'Pic Deleted');
     }

     public function userindex()
    {
        $currentPage = $this->request->getVar('page_gallerys') ? $this->request->getVar('page_gallerys') : 1;
         // Get data 
         $gallerys = new Gallery();
         $counts = $gallerys->countAllResults();
 
         $paginateData = $gallerys->orderBy('id', 'ASC')->paginate(16, 'gallerys');
 
         $data = [
             'counts' => $counts,
             'gallerys' => $paginateData,
             'pager' => $gallerys->pager,
             'currentPage' => $currentPage,
         ];
        return view('user/gallery', $data);
    }

     // save pic
    public function usergalleryStore()
    {
        helper(['form']);
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'pic_name'  => 'uploaded[pic_name]|mime_in[pic_name,image/jpg,image/jpeg,image/png,image]|max_size[pic_name,6144]',

        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            $gallerys = new Gallery();

            $gambar = $this->request->getFile('pic_name');
            if ($gambar->isValid()) {
                $imageName = date('YmdHis') . '.' . $gambar->getExtension();
                $gambar->move('assets/images/gallery/', $imageName);
            }

            $data = [
                'pic_name'  => $imageName,

            ];

            $gallerys->insert($data);

            return redirect()->back()->with('success', 'Picture Added Successfully');
        }
    }

     // delete pic
     public function usergalleryDelete($id)
     {
         $gallerys = new Gallery();
         $gallerys->delete($id);
         return redirect()->back()->with('success', 'Pic Deleted');
     }

}
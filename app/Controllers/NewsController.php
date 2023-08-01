<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\News;

class NewsController extends BaseController
{

    public function index()
    {
        $currentPage = $this->request->getVar('page_news') ? $this->request->getVar('page_news') : 1;
         // Get data 
         $news = new News();
         $counts = $news->countAllResults();
 
         $paginateData = $news->orderBy('created_at', 'DESC')->paginate(20, 'news');
 
         $data = [
             'counts' => $counts,
             'news' => $paginateData,
             'currentPage' => $currentPage,
         ];
        return view('admin/news', $data);
    }

    public function newsStore()
    {
        helper(['form']);
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'news_title' => 'required',
            'news_content'  => 'required',
            'news_author'  => 'required',
            'news_date'  => 'required',
            'news_pic'  => 'uploaded[news_pic]|mime_in[news_pic,image/jpg,image/jpeg,image/png,image]|max_size[news_pic,6144]',

        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            $news = new News();

            $gambar = $this->request->getFile('news_pic');
            if ($gambar->isValid()) {
                $imageName = date('YmdHis') . '.' . $gambar->getExtension();
                $gambar->move('assets/images/news/', $imageName);
            }

            $data = [
                'news_title' => $this->request->getPost('news_title'),
                'news_content'  => $this->request->getPost('news_content'),
                'news_author'  => $this->request->getPost('news_author'),
                'news_date'  => $this->request->getPost('news_date'),
                'news_pic'  => $imageName,

            ];

            $news->insert($data);

            return redirect()->back()->with('success', 'News Added Successfully');
        }
    }

     // show single user
     public function newsEdit($id)
     {
         $news = new News();
         $data['news'] = $news->where('id', $id)->first();
         return view('admin/edit_news', $data);
     }
 
     public function newsUpdate()
     {
         $news = new News();
         $id = $this->request->getVar('id');
         $gambar = $this->request->getFile('news_pic');
         if ($gambar->isValid()) {
             $imageName = date('YmdHis') . '.' . $gambar->getExtension();
             $gambar->move('assets/images/news/', $imageName);
         
         $data = [
             'news_title'  => $this->request->getVar('news_title'),
             'news_content'  => $this->request->getVar('news_content'),
             'news_author'  => $this->request->getVar('news_author'),
             'news_date'  => $this->request->getVar('news_date'),
             'news_pic'  => $imageName,
         ];
        }
        else {
            $data = [
                'news_title'  => $this->request->getVar('news_title'),
                'news_content'  => $this->request->getVar('news_content'),
                'news_author'  => $this->request->getVar('news_author'),
                'news_date'  => $this->request->getVar('news_date'),
            ];
        }
         $news->update($id, $data);
         return redirect()->to('admin/news')->with('success', 'News Updated');
     }
 
     // delete user
     public function NewsDelete($id)
     {
         $news = new News();
         $news->delete($id);
         return redirect()->back()->with('success', 'News Deleted');
     }

     public function userindex()
    {
        $currentPage = $this->request->getVar('page_news') ? $this->request->getVar('page_news') : 1;
         // Get data 
         $news = new News();
         $counts = $news->countAllResults();
 
         $paginateData = $news->orderBy('created_at', 'DESC')->paginate(20, 'news');
 
         $data = [
             'counts' => $counts,
             'news' => $paginateData,
             'currentPage' => $currentPage,
         ];
        return view('user/news', $data);
    }

    public function usernewsStore()
    {
        helper(['form']);
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'news_title' => 'required',
            'news_content'  => 'required',
            'news_author'  => 'required',
            'news_date'  => 'required',
            'news_pic'  => 'uploaded[news_pic]|mime_in[news_pic,image/jpg,image/jpeg,image/png,image]|max_size[news_pic,6144]',

        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            $news = new News();

            $gambar = $this->request->getFile('news_pic');
            if ($gambar->isValid()) {
                $imageName = date('YmdHis') . '.' . $gambar->getExtension();
                $gambar->move('assets/images/news/', $imageName);
            }

            $data = [
                'news_title' => $this->request->getPost('news_title'),
                'news_content'  => $this->request->getPost('news_content'),
                'news_author'  => $this->request->getPost('news_author'),
                'news_date'  => $this->request->getPost('news_date'),
                'news_pic'  => $imageName,

            ];

            $news->insert($data);

            return redirect()->back()->with('success', 'News Added Successfully');
        }
    }

     // show single user
     public function usernewsEdit($id)
     {
         $news = new News();
         $data['news'] = $news->where('id', $id)->first();
         return view('user/edit_news', $data);
     }
 
     public function usernewsUpdate()
     {
         $news = new News();
         $id = $this->request->getVar('id');
         $gambar = $this->request->getFile('news_pic');
         if ($gambar->isValid()) {
             $imageName = date('YmdHis') . '.' . $gambar->getExtension();
             $gambar->move('assets/images/news/', $imageName);
         
         $data = [
             'news_title'  => $this->request->getVar('news_title'),
             'news_content'  => $this->request->getVar('news_content'),
             'news_author'  => $this->request->getVar('news_author'),
             'news_date'  => $this->request->getVar('news_date'),
             'news_pic'  => $imageName,
         ];
        }
        else {
            $data = [
                'news_title'  => $this->request->getVar('news_title'),
                'news_content'  => $this->request->getVar('news_content'),
                'news_author'  => $this->request->getVar('news_author'),
                'news_date'  => $this->request->getVar('news_date'),
            ];
        }
         $news->update($id, $data);
         return redirect()->to('user/news')->with('success', 'News Updated');
     }
 
     // delete user
     public function userNewsDelete($id)
     {
         $news = new News();
         $news->delete($id);
         return redirect()->back()->with('success', 'News Deleted');
     }
}
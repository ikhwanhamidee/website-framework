<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PageEditorEng;


class PageEditorController extends BaseController
{

    public function index()
    {
        $page_engs = new PageEditorEng();

        // Retrieve a single row based on a condition (e.g., ID = 1)
        $data = $page_engs->where('id', 1)->first();

        $data = [
            'data' => $data
        ];

        return view('admin/page_editor/edit_index', $data);
    }

    public function indexupdate(){
        $page_engs = new PageEditorEng();
        $id = $this->request->getVar('id');
        $data = [
            'home_welcome_text' => $this->request->getVar('home_welcome_text'),
            'motto_text'  => $this->request->getVar('motto_text'),
            'home_subtitle_text'  => $this->request->getVar('home_subtitle_text'),
            'intro_text'  => $this->request->getVar('intro_text'),
            'vision_text'  => $this->request->getVar('vision_text'),
            'mission_text'  => $this->request->getVar('mission_text'),
        ];
        $page_engs->update($id, $data);
        return redirect()->to('admin/pages/home');
    }

    public function userindex()
    {
        $page_engs = new PageEditorEng();

        // Retrieve a single row based on a condition (e.g., ID = 1)
        $data = $page_engs->where('id', 1)->first();

        $data = [
            'data' => $data
        ];

        return view('user/page_editor/edit_index', $data);
    }

    public function userindexupdate(){
        $page_engs = new PageEditorEng();
        $id = $this->request->getVar('id');
        $data = [
            'home_welcome_text' => $this->request->getVar('home_welcome_text'),
            'motto_text'  => $this->request->getVar('motto_text'),
            'home_subtitle_text'  => $this->request->getVar('home_subtitle_text'),
            'intro_text'  => $this->request->getVar('intro_text'),
            'vision_text'  => $this->request->getVar('vision_text'),
            'mission_text'  => $this->request->getVar('mission_text'),
        ];
        $page_engs->update($id, $data);
        return redirect()->to('user/pages/home');
    }
}

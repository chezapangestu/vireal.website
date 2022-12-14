<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('view_admin');
    }

    public function faq(){
        return view('admin_faq');
    }
}

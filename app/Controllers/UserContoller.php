<?php

namespace App\Controllers;

class UserContoller extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Home';
        return view('dashboard/home',$data);
    }
    public function profile()
    {
        $data['pageTitle']='Profile';
        return view('dashboard/profile',$data);
    }
}
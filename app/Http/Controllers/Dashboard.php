<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    

    public function dashboard()
    {
        $data['title']                             = "no_breadcrumb";
        $data['main-title']                        = __("message.Dashboard");
        // $data['admin']                             = $this->admin;
        $data['content']                           = 'dashboard';
        return view('layouts.main', $data);
    }
}

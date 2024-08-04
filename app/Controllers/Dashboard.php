<?php

namespace App\Controllers;


class Dashboard extends BaseController
{


    public function __construct()
    {
        $checkUser = session()->get('admin_login');

        if($checkUser != true){
            return redirect()->to('/');
        }
        
    }


    public function index()
    {

        // $checkUser = session()->get('admin_login');
        // if($checkUser !== true){
        //     return redirect()->to('/');
        // }

        // print_r(session()->get("username"));
        // print_r(session()->get("admin_login"));
        // echo 'I am Dashbord';
        // die();

        return view('dashboard');
    }

}
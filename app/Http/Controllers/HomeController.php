<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
        return view('home');
    }

    public function table()
    {
        return view('master');
    }

    public function data_tables()
    {
        return view('data_tables');
    }
}
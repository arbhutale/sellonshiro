<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.dashboard');
    }
    public function companydetails()
    {
        return view('home.companydetails');
    }
    public function profile()
    {
        return view('home.profile');
    }
    public function bank()
    {
        return view('home.bank');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.pages.login');
    }

    public function dashboard()
    {
        return view('backend.pages.dashboard');
    }
    public function register()
    {
        return view('backend.pages.register');
    }
}

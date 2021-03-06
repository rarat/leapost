<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function course()
    {
        return view('admin/course');
    }
    public function employee()
    {
        return view('admin/employee');
    }
    public function category()
    {
        return view('admin/category');
    }
    public function instructure()
    {
        return view('admin/instructure');
    }
}

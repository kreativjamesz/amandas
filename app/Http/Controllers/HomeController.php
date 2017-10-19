<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
 
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        $category = Category::all();
        return view('admin.home');
    }
}

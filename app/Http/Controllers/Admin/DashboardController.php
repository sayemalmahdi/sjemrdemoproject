<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index(){
    // 	return view('admin.dashboard');
    // }

    // public function index(){
    // 	return view('admin.home.homeContent');
    // }

    public function index(){
    	return view('admin.home.home');
    }

    
}

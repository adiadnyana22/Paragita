<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashbordController extends Controller
{
    public function dashboard() {
        return view('admin-pages.dashboard');
    }
}

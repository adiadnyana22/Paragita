<?php

namespace App\Http\Controllers;

use App\Models\Sysparam;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        $about = Sysparam::where('nama', '=', 'about-long')->first();

        return view('pages.about')->with('about', $about);
    }
}

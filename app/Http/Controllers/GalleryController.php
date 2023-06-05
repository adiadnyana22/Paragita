<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery() {
        $gallery = Gallery::all();

        return view('pages.gallery')->with('gallery', $gallery);
    }
}

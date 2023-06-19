<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;

class AdminDashbordController extends Controller
{
    public function dashboard() {
        $newsCount = count(News::all());
        $achievementCount = count(Achievement::all());
        $galleryCount = count(Gallery::all());

        return view('admin-pages.dashboard')
            ->with('newsCount', $newsCount)
            ->with('achievementCount', $achievementCount)
            ->with('galleryCount', $galleryCount);
    }
}

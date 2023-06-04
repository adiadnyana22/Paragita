<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function achievements() {
        $years = Year::with('achievement')->get();

        return view('pages.achievement')->with('years', $years);
    }
}

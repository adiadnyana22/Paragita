<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function coach(Request $request) {
        $coachId = $request->query('id');
        $coachList = Coach::all();

        return view('pages.coach')->with('coachList', $coachList)->with('coachId', $coachId);
    }
}

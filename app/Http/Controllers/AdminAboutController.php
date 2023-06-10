<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Sysparam;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function aboutPage() {
        $about = Sysparam::where('nama', '=', 'about-long')->first();

        return view('admin-pages.about-about')->with('about', $about);
    }

    public function aboutMethod(Request $request) {
        $validateReq = $request->validate([
            'about' => 'required',
        ]);

        $about = Sysparam::where('nama', '=', 'about-long')->first();
        $about->value = $request->about;
        $about->save();

        return redirect()->route('adminAboutAbout');
    }

    public function coachListPage() {
        $coaches = Coach::all();

        return view('admin-pages.about-coach')->with('coaches', $coaches);
    }
}

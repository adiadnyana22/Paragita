<?php

namespace App\Http\Controllers;

use App\Models\Sysparam;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function aboutPage() {
        $about = Sysparam::where('nama', '=', 'about-short')->first();

        return view('admin-pages.home-about')->with('about', $about);
    }

    public function aboutMethod(Request $request) {
        $validateReq = $request->validate([
            'about' => 'required',
        ]);

        $about = Sysparam::where('nama', '=', 'about-short')->first();
        $about->value = $request->about;
        $about->save();

        return redirect()->route('adminHomeAbout');
    }

    public function achievementPage() {
        $achievements = Sysparam::where('nama', '=', 'achievements')->first();
        $countries = Sysparam::where('nama', '=', 'countries')->first();
        $costumes = Sysparam::where('nama', '=', 'costumes')->first();
        $coaches = Sysparam::where('nama', '=', 'coaches')->first();
        $choirMembers = Sysparam::where('nama', '=', 'choir-members')->first();

        return view('admin-pages.home-achievement')
            ->with('achievements', $achievements)
            ->with('countries', $countries)
            ->with('costumes', $costumes)
            ->with('coaches', $coaches)
            ->with('choirMembers', $choirMembers);;
    }

    public function achievementMethod(Request $request) {
        $validateReq = $request->validate([
            'achievements' => 'required',
            'countries' => 'required',
            'costumes' => 'required',
            'coaches' => 'required',
            'choirMembers' => 'required',
        ]);

        $achievements = Sysparam::where('nama', '=', 'achievements')->first();
        $achievements->value = $request->achievements;
        $achievements->save();

        $countries = Sysparam::where('nama', '=', 'countries')->first();
        $countries->value = $request->countries;
        $countries->save();

        $costumes = Sysparam::where('nama', '=', 'costumes')->first();
        $costumes->value = $request->costumes;
        $costumes->save();

        $coaches = Sysparam::where('nama', '=', 'coaches')->first();
        $coaches->value = $request->coaches;
        $coaches->save();

        $choirMembers = Sysparam::where('nama', '=', 'choir-members')->first();
        $choirMembers->value = $request->choirMembers;
        $choirMembers->save();

        return redirect()->route('adminHomeAchievement');
    }
}

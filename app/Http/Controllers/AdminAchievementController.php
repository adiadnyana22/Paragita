<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminAchievementController extends Controller
{
    public function yearListPage() {
        $years = Year::all();

        return view('admin-pages.achievement-year')->with('years', $years);
    }

    public function yearEditPage(Year $year) {
        return view('admin-pages.achievement-year-edit')->with('year', $year);
    }

    public function yearEditMethod(Year $year, Request $request) {
        $validateReq = $request->validate([
            'tahun' => 'required',
        ]);

        $year->nama = $request->tahun;
        $year->save();

        return redirect()->route('adminAchievementYear');
    }

    public function yearDeleteMethod(Year $year) {
        $year->delete();

        return redirect()->route('adminAchievementYear');
    }

    public function yearAddPage() {
        return view('admin-pages.achievement-year-add');
    }

    public function yearAddMethod(Request $request) {
        $validateReq = $request->validate([
            'tahun' => 'required',
        ]);

        $year = new Year();
        $year->nama = $request->tahun;
        $year->save();

        return redirect()->route('adminAchievementYear');
    }

    public function achievementListPage() {
        $achievements = Achievement::all();

        return view('admin-pages.achievement-achievement')->with('achievements', $achievements);
    }

    public function achievementDetailPage(Achievement $achievement) {
        return view('admin-pages.achievement-achievement-detail')->with('achievement', $achievement);
    }

    public function achievementAddPage() {
        $years = Year::all();

        return view('admin-pages.achievement-achievement-add')->with('years', $years);
    }

    public function achievementAddMethod(Request $request) {
        $validateReq = $request->validate([
            'judul' => 'required',
            'tahun' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $achievement = new Achievement();
        $achievement->year_id = $request->tahun;
        $achievement->judul = $request->judul;
        $achievement->deskripsi = $request->deskripsi;

        $file = $request->file('foto');
        $filename = Str::upper(Str::random(16)).'.'.$file->getClientOriginalExtension();
        $file->move('assets/images/achievement', $filename);
        $achievement->foto = $filename;

        $achievement->save();

        return redirect()->route('adminAchievementAchievement');
    }

    public function achievementEditPage(Achievement $achievement) {
        $years = Year::all();

        return view('admin-pages.achievement-achievement-edit')->with('achievement', $achievement)->with('years', $years);
    }

    public function achievementEditMethod(Achievement $achievement, Request $request) {
        $validateReq = $request->validate([
            'judul' => 'required',
            'tahun' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $achievement->year_id = $request->tahun;
        $achievement->judul = $request->judul;
        $achievement->deskripsi = $request->deskripsi;
        if($request->file('foto')){
            File::delete('assets/images/achievement/'.$achievement->foto);
            $file = $request->file('foto');
            $filename = Str::upper(Str::random(16)).'.'.$file->getClientOriginalExtension();
            $file->move('assets/images/achievement', $filename);
            $achievement->foto = $filename;
        };
        $achievement->save();

        return redirect()->route('adminAchievementAchievement');
    }

    public function achievementDeleteMethod(Achievement $achievement) {
        $achievement->delete();

        return redirect()->route('adminAchievementAchievement');
    }
}

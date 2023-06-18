<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Sysparam;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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

    public function coachDetailPage(Coach $coach) {
        return view('admin-pages.about-coach-detail')->with('coach', $coach);
    }

    public function coachEditPage(Coach $coach) {
        return view('admin-pages.about-coach-edit')->with('coach', $coach);
    }

    public function coachEditMethod(Coach $coach, Request $request) {
        $validateReq = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $coach->nama = $request->nama;
        $coach->deskripsi = $request->deskripsi;
        if($request->file('foto')){
            File::delete('assets/images/coach/'.$coach->foto);
            $file = $request->file('foto');
            $filename = Str::upper(Str::random(16)).'.'.$file->getClientOriginalExtension();
            $file->move('assets/images/coach', $filename);
            $coach->foto = $filename;
        };
        $coach->save();

        return redirect()->route('adminAboutCoach');
    }

    public function coachAddPage() {
        return view('admin-pages.about-coach-add');
    }

    public function coachAddMethod(Request $request) {
        $validateReq = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $coach = new Coach();
        $coach->nama = $request->nama;
        $coach->deskripsi = $request->deskripsi;

        $file = $request->file('foto');
        $filename = Str::upper(Str::random(16)).'.'.$file->getClientOriginalExtension();
        $file->move('assets/images/coach', $filename);
        $coach->foto = $filename;

        $coach->save();

        return redirect()->route('adminAboutCoach');
    }

    public function coachDeleteMethod(Coach $coach) {
        File::delete('assets/images/coach/'.$coach->foto);
        $coach->delete();

        return redirect()->route('adminAboutCoach');
    }
}

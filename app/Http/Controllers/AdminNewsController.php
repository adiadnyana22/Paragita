<?php

namespace App\Http\Controllers;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminNewsController extends Controller
{
    public function newsListPage() {
        $news = News::all();

        return view('admin-pages.news')->with('news', $news);
    }

    public function newsDetailPage(News $news) {
        return view('admin-pages.news-detail')->with('news', $news);
    }

    public function newsEditPage(News $news) {
        return view('admin-pages.news-edit')->with('news', $news);
    }

    public function newsEditMethod(News $news, Request $request) {
        $validateReq = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'image|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $news->judul = $request->judul;
        $news->isi = $request->isi;
        if($request->file('foto')){
            File::delete('assets/images/news/'.$news->foto);
            $file = $request->file('foto');
            $filename = Str::upper(Str::random(16)).'.'.$file->getClientOriginalExtension();
            $file->move('assets/images/news', $filename);
            $news->foto = $filename;
        };
        $news->save();

        return redirect()->route('adminNews');
    }

    public function newsAddPage() {
        return view('admin-pages.news-add');
    }

    public function newsAddMethod(Request $request) {
        $validateReq = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'required|image|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $news = new News();
        $news->judul = $request->judul;
        $news->isi = $request->isi;
        $news->tanggal = Carbon::now();

        $file = $request->file('foto');
        $filename = Str::upper(Str::random(16)).'.'.$file->getClientOriginalExtension();
        $file->move('assets/images/news', $filename);
        $news->foto = $filename;

        $news->save();

        return redirect()->route('adminNews');
    }

    public function newsDeleteMethod(News $news) {
        File::delete('assets/images/coach/'.$news->foto);
        $news->delete();

        return redirect()->route('adminNews');
    }
}

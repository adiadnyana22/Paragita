<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminGalleryController extends Controller
{
    public function galleryListPage() {
        $galleries = Gallery::all();

        return view('admin-pages.gallery')->with('galleries', $galleries);
    }

    public function galleryAddPage() {
        return view('admin-pages.gallery-add');
    }

    public function galleryAddMethod(Request $request) {
        $validateReq = $request->validate([
            'foto' => 'required|image|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $gallery = new Gallery();

        $file = $request->file('foto');
        $filename = Str::upper(Str::random(16)).'.'.$file->getClientOriginalExtension();
        $file->move('assets/images/gallery', $filename);
        $gallery->foto = $filename;

        $gallery->save();

        return redirect()->route('adminGallery');
    }

    public function galleryDetailPage(Gallery $gallery) {
        return view('admin-pages.gallery-detail')->with('gallery', $gallery);
    }

    public function galleryDeleteMethod(Gallery $gallery) {
        File::delete('assets/images/gallery/'.$gallery->foto);
        $gallery->delete();

        return redirect()->route('adminGallery');
    }
}

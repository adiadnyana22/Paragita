<?php

namespace App\Http\Controllers;

use App\Models\Label;
use App\Models\Merchandise;
use App\Models\Sysparam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminMerchandiseController extends Controller
{
    public function merchInfoPage() {
        $caption = Sysparam::where('nama', '=', 'merch-caption')->first();
        $title = Sysparam::where('nama', '=', 'merch-title')->first();
        $description = Sysparam::where('nama', '=', 'merch-description')->first();

        return view('admin-pages.merch-info')
            ->with('caption', $caption)
            ->with('title', $title)
            ->with('description', $description);
    }

    public function merchInfoMethod(Request $request) {
        $validateReq = $request->validate([
            'caption' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        $caption = Sysparam::where('nama', '=', 'merch-caption')->first();
        $caption->value = $request->caption;
        $caption->save();

        $title = Sysparam::where('nama', '=', 'merch-title')->first();
        $title->value = $request->title;
        $title->save();

        $description = Sysparam::where('nama', '=', 'merch-description')->first();
        $description->value = $request->description;
        $description->save();

        return redirect()->route('adminMerchInfo');
    }

    public function labelListPage() {
        $labels = Label::all();

        return view('admin-pages.merch-label')->with('labels', $labels);
    }

    public function labelEditPage(Label $label) {
        return view('admin-pages.merch-label-edit')->with('label', $label);
    }

    public function labelEditMethod(Label $label, Request $request) {
        $validateReq = $request->validate([
            'nama' => 'required',
        ]);

        $label->nama = $request->nama;
        $label->save();

        return redirect()->route('adminMerchLabel');
    }

    public function labelDeleteMethod(Label $label) {
        $label->delete();

        return redirect()->route('adminMerchLabel');
    }

    public function labelAddPage() {
        return view('admin-pages.merch-label-add');
    }

    public function labelAddMethod(Request $request) {
        $validateReq = $request->validate([
            'nama' => 'required',
        ]);

        $label = new Label();
        $label->nama = $request->nama;
        $label->save();

        return redirect()->route('adminMerchLabel');
    }

    public function merchandiseListPage() {
        $merchandises = Merchandise::all();

        return view('admin-pages.merch-product')->with('merchandises', $merchandises);
    }

    public function merchandiseDetailPage(Merchandise $merchandise) {
        return view('admin-pages.merch-product-detail')->with('merchandise', $merchandise);
    }

    public function merchandiseAddPage() {
        $labels = Label::all();

        return view('admin-pages.merch-product-add')->with('labels', $labels);
    }

    public function merchandiseAddMethod(Request $request) {
        $validateReq = $request->validate([
            'judul' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'link' => 'required|url:http,https',
            'label' => 'required',
            'foto' => 'required|image|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $merchandise = new Merchandise();
        $merchandise->judul = $request->judul;
        $merchandise->harga = $request->harga;
        $merchandise->deskripsi = $request->deskripsi;
        $merchandise->link = $request->link;
        $merchandise->label_id = $request->label;
        $merchandise->status = 0;

        $file = $request->file('foto');
        $filename = Str::upper(Str::random(16)).'.'.$file->getClientOriginalExtension();
        $file->move('assets/images/merchandise', $filename);
        $merchandise->foto = $filename;

        $merchandise->save();

        return redirect()->route('adminMerchProduct');
    }

    public function merchandiseEditPage(Merchandise $merchandise) {
        $labels = Label::all();

        return view('admin-pages.merch-product-edit')->with('merchandise', $merchandise)->with('labels', $labels);
    }

    public function merchandiseEditMethod(Merchandise $merchandise, Request $request) {
        $validateReq = $request->validate([
            'judul' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'link' => 'required|url:http,https',
            'label' => 'required',
            'foto' => 'image|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $merchandise->judul = $request->judul;
        $merchandise->harga = $request->harga;
        $merchandise->deskripsi = $request->deskripsi;
        $merchandise->link = $request->link;
        $merchandise->label_id = $request->label;
        if($request->file('foto')){
            File::delete('assets/images/merchandise/'.$merchandise->foto);
            $file = $request->file('foto');
            $filename = Str::upper(Str::random(16)).'.'.$file->getClientOriginalExtension();
            $file->move('assets/images/merchandise', $filename);
            $merchandise->foto = $filename;
        };
        $merchandise->save();

        return redirect()->route('adminMerchProduct');
    }

    public function merchandiseDeleteMethod(Merchandise $merchandise) {
        File::delete('assets/images/merchandise/'.$merchandise->foto);
        $merchandise->delete();

        return redirect()->route('adminMerchProduct');
    }

    public function merchandiseToggleAPI(Request $request) {
        $validateReq = $request->validate([
            'merch_id' => 'required',
        ]);

        $merchandise = Merchandise::where('id', '=', $request->merch_id)->first();

        $merchandise->status = !$merchandise->status;
        $merchandise->save();

        return [ 'status' => 1 ];
    }
}

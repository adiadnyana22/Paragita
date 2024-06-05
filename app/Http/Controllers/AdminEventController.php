<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminEventController extends Controller
{
    public function eventListPage() {
        $events = Ticket::all();

        return view('admin-pages.event')->with('events', $events);
    }

    public function eventDetailPage(Ticket $event) {
        return view('admin-pages.event-detail')->with('event', $event);
    }

    public function eventAddPage() {
        return view('admin-pages.event-add');
    }

    public function eventAddMethod(Request $request) {
        $validateReq = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'deskripsi' => 'required',
            'link' => 'nullable|url:http,https',
            'foto' => 'required|image|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $event = new Ticket();
        $event->tanggal = $request->tanggal;
        $event->judul = $request->judul;
        $event->deskripsi = $request->deskripsi;
        $event->link = $request->link;

        $file = $request->file('foto');
        $filename = Str::upper(Str::random(16)).'.'.$file->getClientOriginalExtension();
        $file->move('assets/images/ticket', $filename);
        $event->foto = $filename;

        $event->save();

        return redirect()->route('adminEvent');
    }

    public function eventEditPage(Ticket $event) {
        return view('admin-pages.event-edit')->with('event', $event);
    }

    public function eventEditMethod(Ticket $event, Request $request) {
        $validateReq = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'deskripsi' => 'required',
            'link' => 'nullable|url:http,https',
            'foto' => 'image|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $event->tanggal = $request->tanggal;
        $event->judul = $request->judul;
        $event->deskripsi = $request->deskripsi;
        $event->link = $request->link;
        if($request->file('foto')){
            File::delete('assets/images/ticket/'.$event->foto);
            $file = $request->file('foto');
            $filename = Str::upper(Str::random(16)).'.'.$file->getClientOriginalExtension();
            $file->move('assets/images/ticket', $filename);
            $event->foto = $filename;
        };
        $event->save();

        return redirect()->route('adminEvent');
    }

    public function eventDeleteMethod(Ticket $event) {
        File::delete('assets/images/ticket/'.$event->foto);
        $event->delete();

        return redirect()->route('adminEvent');
    }
}

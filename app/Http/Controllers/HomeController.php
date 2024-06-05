<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Sysparam;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $carousel = Carousel::all();
        $news = News::limit(3)->get();
        $gallery = Gallery::limit(7)->get();
        $ticket = Ticket::where('tanggal', '>=', Carbon::today())->orderBy('tanggal', 'asc')->limit(3)->get();

        $about = Sysparam::where('nama', '=', 'about-short')->first();
        $achievements = Sysparam::where('nama', '=', 'achievements')->first();
        $countries = Sysparam::where('nama', '=', 'countries')->first();
        $costumes = Sysparam::where('nama', '=', 'costumes')->first();
        $coaches = Sysparam::where('nama', '=', 'coaches')->first();
        $choirMembers = Sysparam::where('nama', '=', 'choir-members')->first();

        return view('pages.index')
            ->with('carousels', $carousel)
            ->with('news', $news)
            ->with('gallery', $gallery)
            ->with('ticket', $ticket)
            ->with('about', $about)
            ->with('achievements', $achievements)
            ->with('countries', $countries)
            ->with('costumes', $costumes)
            ->with('coaches', $coaches)
            ->with('choirMembers', $choirMembers);
    }
}

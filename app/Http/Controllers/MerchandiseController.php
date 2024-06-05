<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use App\Models\Sysparam;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function merchandise() {
        $merchandise = Merchandise::where('status', '=', 1)->limit(6)->get();
        $caption = Sysparam::where('nama', '=', 'merch-caption')->first();
        $title = Sysparam::where('nama', '=', 'merch-title')->first();
        $description = Sysparam::where('nama', '=', 'merch-description')->first();

        return view('pages.merchandise')
            ->with('merchandise', $merchandise)
            ->with('caption', $caption)
            ->with('title', $title)
            ->with('description', $description);
    }

    public function merchandiseAPI() {
        $merchandise = Merchandise::where('status', '=', 1)->get();

        return $merchandise;
    }
}

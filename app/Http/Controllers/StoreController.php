<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {   
        $apps = \App\App::with('category')
            ->with('genres')
            ->limit(100)
            ->orderBy('installs', 'desc')
            ->orderBy('rating', 'desc')
            ->distinct()
            ->get();
        return view('index', ['apps' => $apps]);
    }

    public function genres()
    {
        $genres = \App\Genre::with('apps')
            ->limit(5)
            ->orderBy('name', 'asc')
            ->distinct()
            ->get();
        // dd($genres);
        // $apps = $genres->apps();
        // dd($apps);
        return view('index', compact('genres', $genres));

    }

}

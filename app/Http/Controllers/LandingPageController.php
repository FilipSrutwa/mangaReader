<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'MangaReader',
        ];
        return view('index', $data);
    }
}

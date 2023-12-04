<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index()
    {
        $mangaModel = Manga::first();
        $data = [
            'title' => 'MangaReader - manga title',
            'mangaTitle' => 'title',
            'artist' => 'artist',
            'genre' => 'action - time travel - isekai',
            'status' => 'status',
            'chaptersCount' => '15',
            'updatedAt' => '2023-12-01',
            'mangaModel' => $mangaModel,
        ];
        return view('manga', $data);
    }
}

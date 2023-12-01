<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index()
    {
        $genre = ['action', 'time travel', 'isekai'];
        $genreString = '';
        $genreIterator = 0;
        foreach ($genre as $gen) {
            if ($genreIterator == 0)
                $genreString .= $gen;
            else
                $genreString .= " - " . $gen;
            $genreIterator++;
        }
        $data = [
            'title' => 'MangaReader - manga title',
            'mangaTitle' => 'title',
            'artist' => 'artist',
            'genre' => $genreString,
            'status' => 'status',
            'chaptersCount' => '15',
            'updatedAt' => '2023-12-01',
        ];
        return view('manga', $data);
    }
}

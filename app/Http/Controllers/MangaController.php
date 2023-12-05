<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Manga;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index()
    {
        $mangaModel = Manga::first();
        if ($mangaModel == null)
            abort(404);

        $artistModel = Artist::where('id', $mangaModel->artist_id)->first();
        if ($artistModel == null)
            abort(404);

        $isFinished = 'Ongoing';
        if ($mangaModel->is_finished == true)
            $isFinished = 'Finished';

        $data = [
            'title' => 'MangaReader - ' . $mangaModel->name,
            'mangaTitle' => $mangaModel->name,
            'artist' => $artistModel->name,
            'genre' => 'action - time travel - isekai',
            'status' => $isFinished,
            'chaptersCount' => $mangaModel->chapter_count,
            'updatedAt' => $mangaModel->updated_at->format('Y-m-d'),
            'img' => $mangaModel->img_path,
        ];
        Debugbar::info($data);
        return view('manga', $data);
    }
}

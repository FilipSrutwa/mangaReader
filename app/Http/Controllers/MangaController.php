<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Manga;
use App\Models\MangasChapter;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index($mangaID)
    {
        $mangaModel = Manga::where('id', $mangaID)->first();
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
            'updatedAt' => date('Y-m-d', strtotime(last($this->grabChapters($mangaID))['updated_at'])),
            'img' => $mangaModel->img_path,
            'chapters' => $this->grabChapters($mangaID),
            'lastChapter' => last($this->grabChapters($mangaID)),
            'mangaID' => $mangaID,
        ];

        Debugbar::info($data);
        return view('manga', $data);
    }
    public function readChapter($chapterID)
    {
        $pagesModel = MangasChapter::where('id', $chapterID)->first();
        $data = [
            'title' => 'MangaReader - manga name',
            'pagesPath' => $pagesModel->pages_path,
            'pages' => $this->grabPages($pagesModel->pages_path),
        ];

        Debugbar::info($data);
        return view('readChapter', $data);
    }
    public function getUploadChapter($mangaID)
    {
        $existingChapters = "";
        $chaptersModel = MangasChapter::all();
        for ($i = 0; $i < count($chaptersModel); $i++) {
            if ($i == 0)
                $existingChapters = $existingChapters . $chaptersModel[$i]->chapter_number;
            else
                $existingChapters = $existingChapters . "::" . $chaptersModel[$i]->chapter_number;
        }

        $data = [
            'title' => 'MangaReader - adding chapter',
            'mangaID' => $mangaID,
            'existingChapters' => $existingChapters,
        ];

        Debugbar::info($data);
        return view('uploadChapter', $data);
    }
    public function postUploadChapter($mangaID)
    {
        $path = "mangas/manga_" . $mangaID . "/chapter_" . request('chapterNumber');

        $chapterModel = new MangasChapter();
        $chapterModel->manga_id = $mangaID;
        $chapterModel->chapter_number = request('chapterNumber');
        $chapterModel->pages_path = $path;
        $chapterModel->save();

        mkdir($path);
        foreach (request('file') as $file) {
            $filename = $file->getClientOriginalName();
            $file->move(public_path($path), $filename);
        }

        return view('postTest');
    }

    //private methods
    private function grabPages($path)
    {
        $files = preg_grep('~\.(jpeg|jpg|png)$~', scandir($path));

        return $files;
    }

    private function grabChapters($mangaID)
    {
        $mangasChaptersModel = MangasChapter::where('manga_id', $mangaID)->orderBy('id', 'ASC')->get()->toArray();
        return $mangasChaptersModel;
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MangaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/SingleManga/{id}', [MangaController::class, 'index']);
Route::get('/ReadChapter/{chapterId}', [MangaController::class, 'readChapter']);
Route::get('/uploadChapter/{mangaID}', [MangaController::class, 'getUploadChapter']);
Route::post('/uploadChapter/{mangaID}', [MangaController::class, 'postUploadChapter']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

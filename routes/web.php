<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// rotta per pagina home
Route::get('/', [HomeController::class, 'index'])->name('home');

// rotta per pagina Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// rotta per pagina Comics
Route::get('/comics', function () {
    return view('comics');
})->name('comics');

// rotta per pagina movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

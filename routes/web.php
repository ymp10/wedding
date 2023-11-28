<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\StoryController;
use App\Models\About;
use App\Models\Photo;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/admin/photo', [PhotoController::class,'index'])->name('admin.photo');
Route::post('/admin/photo', [PhotoController::class,'store'])->name('admin.photo.store');
Route::get('/admin/story', [StoryController::class,'index'])->name('admin.story');
Route::post('/admin/story', [StoryController::class,'store'])->name('admin.story.store');

Route::get('/about', function () {
    $about = About::first();
    return view('about', compact('about'));

})->name('about');

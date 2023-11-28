<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Photo;
use App\Models\Story;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $photos = Photo::all();
    $about = About::first();
    $stories = Story::all();
    return view('index', compact('photos','about','stories'));
    }
}

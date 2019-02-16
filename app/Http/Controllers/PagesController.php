<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class PagesController extends Controller
{
    public function index(){
        $images = Image::All();
        return view('images.index')->with('images', $images);
    }

    public function services(){
        return view('pages.services');
    }

    public function about(){
        return view('pages.about');
    }
}

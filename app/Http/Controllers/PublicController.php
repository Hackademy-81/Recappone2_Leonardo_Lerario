<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function home() {
    $albums = Album::all();
        return view('welcome', compact('albums'));
    }
}

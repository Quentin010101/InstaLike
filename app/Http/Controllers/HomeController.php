<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {

        $imagesFavorite = Image::inRandomOrder()->limit(40)->get();
        $imagesFavorite = $imagesFavorite->unique('path');
        
        return view('home', [
            'imagesFavorite' => $imagesFavorite
        ]);
    }
}

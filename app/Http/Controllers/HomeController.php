<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use App\Models\Image;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class HomeController extends Controller
{
    public function show()
    {
        $settings = Setting::where('privacy', 'public')->get();

        $users_id = [];
        foreach($settings as $setting):
            array_push($users_id, $setting->user->id);
        endforeach;
        
        $imagesFavorite = Image::whereIn('user_id', $users_id)->inRandomOrder()->limit(40)->get();
        $imagesFavorite = $imagesFavorite->unique('path');
        
        return view('home', [
            'imagesFavorite' => $imagesFavorite
        ]);
    }
}

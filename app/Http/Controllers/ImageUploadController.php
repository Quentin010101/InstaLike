<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageUploadController extends Controller
{
    public function store_image(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpg,png|max:30000', 
            'status' => 'required',
        ]);

        // store image in Image directory
        $path = $request->file('image')->store('Image', 'public');

        // store path, description, status in database
        $image = Image::create([
            'path' => $path,
            'description' => $request->description,
            'status' => $request->status,
            'user_id' => Auth::id()
        ]);

        return back()->with('status', 'Image uploaded!');

    }

    public function store_avatar(Request $request)
    {

        $request->validate([
            'avatar' => 'required|image|mimes:jpg,png|max:30000', 
        ]);

        // store image in Avatar directory
        $path = $request->file('avatar')->store('Avatar', 'public');

        // store path in database
        $settings = Setting::find(Auth::id());

        $settings->avatar = $path;

        $settings->save();

        return back()->with('status', 'Avatar uploaded!');

    }
}

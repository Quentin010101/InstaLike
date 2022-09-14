<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($id)
    {
        $images = Tag::find($id)->images->unique('id');

        return view('tag.tagShow', [
            'images' => $images,
            'id' => $id
        ]);
    }
}

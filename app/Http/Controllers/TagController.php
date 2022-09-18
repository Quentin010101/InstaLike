<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($id)
    {
        $tag = Tag::find($id);
        $images = $tag->images;
        $images = $images->unique('path');
        

        return view('tag.tagShow', [
            'images' => $images,
            'id' => $id,
            'tagName' => $tag->tag,
        ]);
    }
}

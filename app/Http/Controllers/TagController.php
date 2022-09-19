<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class TagController extends Controller
{
    public function show($id)
    {
        $tag = Tag::find($id);

        $images = new Collection();

        $img = Image::all();
        foreach($img as $image):
            if($image->tags->contains($tag) && $image->user->settings->privacy == 'public'):
                $images->push($image);
            endif;
        endforeach;
        

        return view('tag.tagShow', [
            'images' => $images,
            'id' => $id,
            'tagName' => $tag->tag,
        ]);
    }
}

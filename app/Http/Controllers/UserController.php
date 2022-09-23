<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);

        $follower = DB::table('user_follower')->where('follower_id', $user->id);

        $images = Image::whereBelongsTo($user)->orderByDesc('created_at')->get();

        return view('user.userShow', [
            'user' => $user,
            'follower' => $follower,
            'images' => $images,
        ]);
    }
}

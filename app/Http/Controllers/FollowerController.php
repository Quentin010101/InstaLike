<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FollowerController extends Controller
{
    public function unfollow($id)
    {
        $user = Auth::user();

        if(DB::table('user_follower')->where('follower_id', $user->id)->where('following_id' , $id)->exists()):
            DB::table('user_follower')->where('follower_id', $user->id)->where('following_id' , $id)->delete();
        endif;

        return back();
    }
}

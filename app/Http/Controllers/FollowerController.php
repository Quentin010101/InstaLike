<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Setting;
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

            $follower = Setting::where('user_id' , $id)->first();
            return back()->with('message_flash', $follower->pseudo);

        endif;

        return back();
    }
}

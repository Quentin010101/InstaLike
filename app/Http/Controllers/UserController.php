<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);

        $follower = DB::table('user_follower')->where('follower_id', $user->id);

        return view('user.userShow', [
            'user' => $user,
            'follower' => $follower,
        ]);
    }
}

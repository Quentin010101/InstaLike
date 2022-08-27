<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\DashbordController;

class DashbordController extends Controller
{
    protected $isActiveFeed = false;
    protected $isActiveProfile = false;
    protected $isActiveSettings = false;

    public function show_feed()
    {
        $this->isActiveFeed = true;


        $user = Auth()->user();

        $user_following = $user->followings;

        // Images
        $image_user = [Image::where('user_id', '=', Auth()->user()->id)->get()];
        foreach($user_following as $following):
            $image = Image::where('user_id', '=', $following->id)->get();
            array_push($image_user, $image);
        endforeach;
        $images = collect($image_user)->collapse()->sortByDesc('created_at');

        // //all user id
        // $keys = $comments->groupBy('user_id')->keys()->toArray();
        // if(!in_array(Auth()->user()->id, $keys)):
        //     array_push($keys, Auth()->user()->id);
        // endif;

        // //all user 
        // $users = [];
        // for($i = 0; $i < count($keys); $i++):
        //     $user = User::where('id', '=', $keys[$i])->get();
        //     array_push($users, $user);
        // endfor;
        // $usersComment = collect($users)->collapse()->groupBy('id');
     

            
        return view('user.dashbord', [
            'images' => $images,
            'isActiveFeed' => $this->isActiveFeed,
            'isActiveProfile' => $this->isActiveProfile,
            'isActiveSettings' => $this->isActiveSettings,
        ]);
    }

    public function show_profile()
    {
        $this->isActiveProfile = true;

        return view('user.dashbord', [
            'isActiveFeed' => $this->isActiveFeed,
            'isActiveProfile' => $this->isActiveProfile,
            'isActiveSettings' => $this->isActiveSettings,
        ]);
    }

    public function show_settings()
    {
        $this->isActiveSettings = true;

        return view('user.dashbord', [
            'isActiveFeed' => $this->isActiveFeed,
            'isActiveProfile' => $this->isActiveProfile,
            'isActiveSettings' => $this->isActiveSettings,
        ]);
    }
}

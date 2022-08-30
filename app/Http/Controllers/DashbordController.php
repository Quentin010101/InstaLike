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
    protected $user;

    public function show_feed()
    {

        $user = Auth::user();

        //Cursor Pagination
        $nextCursor = request()->query('nextCursor') ? Cursor::fromEncoded(request()->query('nextCursor')) : null;
        // Page feed active
        $this->isActiveFeed = true;

        // Retrieve user follower
        $user_follower = DB::table('user_follower')->where('follower_id', '=', $user->id)->pluck('following_id');
        $id_array = $user_follower->toArray();

        // Add user id
        array_push($id_array, $user->id);

        // Retrieve Images
        $images = Image::latest('created_at')
        ->cursorPaginate(4, ['id', 'path', 'description', 'user_id', 'created_at'], 'cursor', $nextCursor);

        if($images->hasMorePages()):
            $nextCursor = $images->nextCursor()->encode();
        endif;

        if(request()->ajax()){
            $returnHTML = view('components.scroll')->with('images', $images)->render();
            return response()->json([
                'success' => true,
                'html' => $returnHTML,
                'nextCursor' => $nextCursor,
            ]);
        }
            
        return view('user.dashbord', [
            'images' => $images,
            'nextCursor' => $nextCursor ?? '',
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

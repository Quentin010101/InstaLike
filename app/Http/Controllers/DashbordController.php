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

class DashbordController extends Controller
{
    protected $isActiveFeed = false;
    protected $isActiveProfile = false;
    protected $isActiveSettings = false;
    protected $isActiveInvitation = false;

    public function show_feed()
    {

        $this->isActiveFeed = true;

        return view('user.dashbord', [
            'isActiveFeed' => $this->isActiveFeed,
            'isActiveProfile' => $this->isActiveProfile,
            'isActiveSettings' => $this->isActiveSettings,
            'isActiveInvitation' => $this->isActiveInvitation,
        ]);
    }

    public function show_profile()
    {
        $this->isActiveProfile = true;

        return view('user.dashbord', [
            'isActiveFeed' => $this->isActiveFeed,
            'isActiveProfile' => $this->isActiveProfile,
            'isActiveSettings' => $this->isActiveSettings,
            'isActiveInvitation' => $this->isActiveInvitation,
        ]);
    }

    public function show_invitation()
    {
        $this->isActiveInvitation = true;

        return view('user.dashbord', [
            'isActiveFeed' => $this->isActiveFeed,
            'isActiveProfile' => $this->isActiveProfile,
            'isActiveSettings' => $this->isActiveSettings,
            'isActiveInvitation' => $this->isActiveInvitation,
        ]);
    }

    public function show_settings()
    {
        $user = Auth::user();

        $this->isActiveSettings = true;

        // Get theme
        $setting = Setting::where('user_id', '=', $user->id);

        return view('user.dashbord', [
            'isActiveFeed' => $this->isActiveFeed,
            'isActiveProfile' => $this->isActiveProfile,
            'isActiveSettings' => $this->isActiveSettings,
            'isActiveInvitation' => $this->isActiveInvitation,
        ]);
    }
}

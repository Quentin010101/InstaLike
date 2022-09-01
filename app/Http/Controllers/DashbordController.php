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

        $this->isActiveFeed = true;

        return view('user.dashbord', [
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

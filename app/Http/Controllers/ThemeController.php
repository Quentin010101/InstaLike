<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThemeController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();
        
        $setting = Setting::where('user_id', '=', $user->id)->first();
        $setting->theme = $request->theme;

        if($setting->isDirty()){
            $setting->save();
            return back()->with('message_theme', 'The theme has been updated!');
        }

        return back()->with('message_theme', 'The theme is already up to date!');
    }
}

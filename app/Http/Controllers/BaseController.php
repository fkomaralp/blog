<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Post;
use App\Models\Settings;
use Ayra\Theme\Facades\Theme;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $setting = Settings::first();

        if ($setting->site_durumu == 0 )
        {
            echo 'Bakımda';
        }
        else
        {
            $settings = Settings::all();
            $posts = Post::all();
            $categories = Categories::all();

            $theme = \App\Models\Theme::where('status' , 1)->first();

            \View::share('categories', $categories);
            \View::share('posts', $posts);
            \View::share('settings', $settings);

            Theme::uses($theme->name);

            return Theme::view('index');
        }




    }
}

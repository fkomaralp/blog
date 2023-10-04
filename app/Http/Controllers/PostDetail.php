<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Comments;
use App\Models\Post;
use App\Models\Settings;
use App\Models\Slider;
use Illuminate\Http\Request;
use Ayra\Theme\Facades\Theme;
class PostDetail extends Controller
{
    public function index($post_url)
    {
        $post = Post::find($post_url);
        $this->post = $post;

        $posts = Post::all();

        $settings = Settings::all();
        $setting = Settings::first();

        $sliders = Slider::all();
        $categories = Categories::all();

        $comment = Comments::first();

        $comments = Comments::all();
        $theme = \App\Models\Theme::where('status', 1)->first();

        Theme::uses($theme->name);

        \View::share('categories', $categories);
        \View::share('posts', $posts);
        \View::share('post', $post);
        \View::share('settings', $settings);
        \View::share('setting', $setting);
        \View::share('sliders', $sliders);
        \View::share('comments', $comments);
        \View::share('comment', $comment);

        return Theme::view('post_detail');
    }

    //Yorum Kaydetme
    public function commnetSave(Request $request)
    {

        $veriler = $request->only(['name', 'email', 'comment_detail','post_id']);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'comment_detail' => 'required|string|min:16',
        ]);

        $settings = Settings::first();
        $yorum_onay_sys = $settings->yorum_onay_sys;
      $ip = $request->ip();

        if($yorum_onay_sys == 1)
        {
            Comments::create([
                'name'=> $veriler['name'],
                'email'=>$veriler['email'],
                'comment_detail'=>$veriler['comment_detail'],
                'post_id'=>$veriler['post_id'],
                'status'=>0,
                'ip_adress'=>$ip
            ])->save();
        }
        else
        {
            Comments::create([
                'name'=> $veriler['name'],
                'email'=>$veriler['email'],
                'comment_detail'=>$veriler['comment_detail'],
                'post_id'=>$veriler['post_id'],
                'status'=>1,
                'ip_adress'=>$ip
            ])->save();
        }

        return redirect()->back()->with('success', 'your message,here');
    }
}

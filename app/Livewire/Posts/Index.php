<?php

namespace App\Livewire\Posts;

use App\Models\Categories;
use App\Models\Post;
use App\Models\Settings;
use http\Env\Request;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
class Index extends Component
{

    use WithFileUploads;
    public $post_adi; public $post_url; public $video_url; public $meta_tag;
    public $post_icerigi; public $category;  public $image; //public $more_image; public $files;

    public function render()
    {
        $posts = Post::all();
        $categories = Categories::all();
        return view('livewire.Posts.index',compact('posts', 'categories'));
    }


    //Post Kaydetme
    public function PostSave()
    {


        $userid = auth()->user()->id;

        $image = $this->image->store('public\photos\resize');
        $file_name = basename($image);
        $file = public_path('/storage/photos/resize/'.$file_name);
        $img = Image::make($file);
        $img->resize(1920, 680);
        $img->save($file, 60);

        Post::create([
           'post_adi' => $this->post_adi,
            'post_url' => $this->post_url,
            'video_url'=>$this->video_url,
            'meta_tag' => $this->meta_tag,
            'post_icerigi' => $this->post_icerigi,
            'category' => $this->category,
            'image' => $this->image ? '/storage/photos/resize/'.$file_name : null,
            'user_id' => $userid,
        ]);

        return redirect('posts');
    }


    //Statü Güncelleme

    public function UpdateStatus($id)
    {
        $post = Post::find($id);
        $post->status =!$post->status;
        $post->save();
    }

    //Post Silme
    public function DeletePost($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return redirect()->to('posts');
    }

    //Post Update

    public function UpdatePost($id)
    {
        dd($id);
    }

}

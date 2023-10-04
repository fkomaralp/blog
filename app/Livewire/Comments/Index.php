<?php

namespace App\Livewire\Comments;

use App\Models\Comments;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $comments = Comments::all();
        return view('livewire.Comments.index',compact('comments'));
    }

    //Yorum Silme
    public function CommentDelete($id)
    {
        $comment = Comments::find($id);
        $comment->delete();
        return redirect()->to('comments');
    }

    //Statü Güncelleme
    public function UpdateStatus($id)
    {
        $comment = Comments::find($id);
        $comment->status =!$comment->status;
        $comment->save();
    }

}

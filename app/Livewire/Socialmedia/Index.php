<?php

namespace App\Livewire\Socialmedia;

use App\Models\Categories;
use App\Models\Socialmedia;
use Livewire\Component;




class Index extends Component
{
    public $social_name; public $social_url; public $social_icon;

    public function render()
    {
        $socialmedia = Socialmedia::all();
        return view('livewire.Socialmedia.index',compact('socialmedia'));
    }
    //Sosyal Medya Ekleme
    public function SocialAdd()
    {
        Socialmedia::create([
           'social_name' =>$this->social_name,
           'social_url' =>$this->social_url,
           'social_icon' =>$this->social_icon,
            'status' => 0,
        ]);

        return redirect('socialmedia');
    }
    //Statu Güncelleme
    public function UpdateStatus($id)
    {
        $social = Socialmedia::find($id);
        $social->status = !$social->status;
        $social->save();
    }
    //Socialmedia Silme

    public function DelteSocialMedia($id)
    {
        $social = Socialmedia::find($id);
        $social->delete();
        return redirect('socialmedia111111111111');
    }

}

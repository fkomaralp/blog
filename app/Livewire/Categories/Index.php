<?php

namespace App\Livewire\Categories;

use App\Models\Categories;
use Livewire\Component;

class Index extends Component
{

    public $categori_adi;



    public function render()
    {
        $categories = Categories::all();
        return view('livewire.Categories.index',compact('categories'));
    }

    //Kategori Oluşturma
    public function CategorySave()
    {
        Categories::create([
           'categori_adi' =>$this->categori_adi,
            'status'=>0
        ]);
        return redirect()->to('categories');
    }
    //Kategori Silme
    public function CategoryDelete($id)
    {
//        dd($id);
        $category = Categories::find($id);
        $category->delete();
        return redirect()->to('categories');
    }
    //Kategori Durumu Güncelleme

    public function UpdateStatus($id)
    {
//        dd('asdasd');
        $category = Categories::find($id);
        $category->status=!$category->status;
        $category->save();
    }

}

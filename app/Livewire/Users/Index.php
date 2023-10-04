<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.Users.index',compact('users'));
    }
    //Kullanıcı Silme
    public function UserDelete($id)
    {
        $user = User::find($id);
        $user->delete();
    }

}

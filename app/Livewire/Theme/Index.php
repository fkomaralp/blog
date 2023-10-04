<?php

namespace App\Livewire\Theme;

use App\Models\Theme;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $themes = Theme::all();
        return view('livewire.Theme.index',compact('themes'));
    }

    public function activateTheme($id)
    {
        $themes = Theme::all();

        foreach ($themes as $theme)
        {
            if ($theme->id == $id)
            {
                $theme->status = 1;
            }
            else
            {
                $theme->status = 0;
            }
            $theme->save();
        }
    }
}

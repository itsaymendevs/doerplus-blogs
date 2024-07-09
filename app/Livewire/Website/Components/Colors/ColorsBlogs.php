<?php

namespace App\Livewire\Website\Components\Colors;

use App\Models\BlogSetting;
use Livewire\Component;

class ColorsBlogs extends Component
{


    public function render()
    {


        // 1: dependencies
        $settings = BlogSetting::first();




        return view('livewire.website.components.colors.colors-blogs', compact('settings'));


    } // end function





} // end class

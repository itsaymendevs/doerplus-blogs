<?php

namespace App\Livewire\Website\Components\Colors;

use App\Models\BlogSetting;
use App\Models\Profile;
use Livewire\Component;

class ColorsBlogs extends Component
{


    public function render()
    {


        // 1: dependencies
        $profile = Profile::first();
        $settings = BlogSetting::first();




        return view('livewire.website.components.colors.colors-blogs', compact('settings', 'profile'));


    } // end function





} // end class

<?php

namespace App\Livewire\Website\Blogs\Components;

use App\Models\BlogSetting;
use App\Models\Profile;
use Livewire\Component;

class BlogsNavbar extends Component
{




    public function render()
    {

        // 1: dependencies
        $settings = BlogSetting::first();
        $profile = Profile::first();



        return view('livewire.website.blogs.components.blogs-navbar', compact('settings', 'profile'));



    } // end function


} // end class

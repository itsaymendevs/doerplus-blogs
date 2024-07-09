<?php

namespace App\Livewire\Website\Blogs\Components;

use App\Models\BlogSetting;
use App\Models\Social;
use Livewire\Component;

class BlogsGround extends Component
{




    public function render()
    {

        // 1: dependencies
        $socials = Social::first();
        $settings = BlogSetting::first();



        return view('livewire.website.blogs.components.blogs-ground', compact('socials', 'settings'));



    } // end function


} // end class

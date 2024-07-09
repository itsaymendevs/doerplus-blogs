<?php

namespace App\Livewire\Website\Blogs\Components;

use App\Models\BlogSetting;
use Livewire\Component;

class BlogsFooter extends Component
{



    public function render()
    {

        // 1: dependencies
        $settings = BlogSetting::first();



        return view('livewire.website.blogs.components.blogs-footer', compact('settings'));



    } // end function


} // end class

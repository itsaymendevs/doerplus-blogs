<?php

namespace App\Livewire\Website;

use App\Models\Blog;
use App\Models\BlogSetting;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layouts.blogs')]
class Blogs extends Component
{


    // :: variables
    public $settings;



    public function mount()
    {


        // 1: get instance
        $this->settings = BlogSetting::first();


    } // end function







    // -------------------------------------------------------------------------
    // -------------------------------------------------------------------------








    public function render()
    {


        // 1: dependencies
        $perPage = $this->settings?->numberOfColumns ?? 3;
        $blogs = Blog::where('isForWebsite', true)->get();



        // 1.2: parts
        $partCounter = 1;
        $partBlogs = $secondPartBlogs = $thirdPartBlogs = $fourthPartBlogs = [];

        foreach ($blogs ?? [] as $blog) {


            $partCounter == 1 ? array_push($partBlogs, $blog) : null;
            $partCounter == 2 ? array_push($secondPartBlogs, $blog) : null;
            $partCounter == 3 ? array_push($thirdPartBlogs, $blog) : null;
            $partCounter == 4 ? array_push($fourthPartBlogs, $blog) : null;


            $partCounter == $perPage ? $partCounter = 1 : $partCounter++;



        } // end loop







        return view('livewire.website.blogs', compact('perPage', 'blogs', 'partBlogs', 'secondPartBlogs', 'thirdPartBlogs', 'fourthPartBlogs'));


    } // end function





} // end class

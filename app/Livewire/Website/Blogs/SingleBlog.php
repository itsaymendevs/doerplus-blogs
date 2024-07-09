<?php

namespace App\Livewire\Website\Blogs;

use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layouts.blogs')]
class SingleBlog extends Component
{



    // :: variables
    public $blog;




    public function mount($title)
    {


        // 1: get instance
        $this->blog = Blog::where('titleURL', $title)?->latest()?->first();


    } // end function










    // -----------------------------------------------------------------
    // -----------------------------------------------------------------






    public function render()
    {

        return view('livewire.website.blogs.single-blog');


    } // end function



} // end class

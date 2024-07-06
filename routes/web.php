<?php

use App\Livewire\Website\Blogs;
use App\Livewire\Website\Blogs\SingleBlog;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;






// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ----------------------------- GENERAL ---------------------------------










// :: linkStorage
Route::get('/storage-link', function () {

    $return = Artisan::call('storage:link');

});








// :: LivewireServerDeployment in subRoute
if (env('APP_ENV') == 'production') {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post(env('LIVEWIRE_UPDATE_PATH'), $handle);
    });


    Livewire::setScriptRoute(function ($handle) {
        return Route::get(env('LIVEWIRE_JAVASCRIPT_PATH'), $handle);
    });

} // end if










// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ------------------------------ BLOGS -----------  -----------------------




// 1: blogs
Route::get('/blogs', Blogs::class)->name('website.blogs');



// 1.2: singleBlog
Route::get('/blogs/{title}', SingleBlog::class)->name('website.singleBlog');









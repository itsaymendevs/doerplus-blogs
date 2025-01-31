<section class="single--blog-section pt-5">





    {{-- head --}}
    @section('head')




    {{-- title - description - keywords meta --}}
    <title>Blog - {{ $blog->title }}</title>

    <meta name="description"
        content="Effortlessly plan your meals with our intuitive meal planner software. Create customized meal plans, track your nutrition, and discover delicious recipes to suit your dietary preferences. Simplify your meal planning today!">


    {{--
    <meta name="keywords" content="Doer - Meal Plan Manager"> --}}



    @endsection
    {{-- endHead --}}













    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}








    {{-- colors --}}
    <livewire:website.components.colors.colors-blogs />








    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}











    {{-- header --}}
    <div class="container container--mod">
        <div class="row align-items-start">
            <div class="col-12 single--blog-header">


                {{-- author - date --}}
                <div class="fs-13 fw-500 mb-3 d-flex justify-content-between align-items-center">

                    <span class='single--blog-author' data-aos="fade" data-aos-duration="500" data-aos-delay="200">{{
                        date('M Y', strtotime($blog->publishDate)) }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-dash-lg mx-3">
                            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z">
                            </path>
                        </svg>
                        {{ $blog->author }}
                    </span>

                    <hr>
                </div>





                {{-- -------------------------------- --}}
                {{-- -------------------------------- --}}




                {{-- title --}}
                <h1 data-aos="fade" data-aos-duration="500" data-aos-delay="200"
                    class="single--blog-title fw-semibold mb-3">{{ $blog->title }}</h1>



                {{-- subtitle --}}
                <p data-aos="fade" data-aos-duration="500" data-aos-delay="400" class="single--blog-subtitle fs-4">{{
                    $blog->summary ?? $blog->subtitle }}</p>
                <div class="d-flex justify-content-end"></div>


            </div>
        </div>
    </div>
    {{-- endContainer --}}










    {{-- ---------------------------------------------- --}}
    {{-- ---------------------------------------------- --}}
    {{-- ---------------------------------------------- --}}










    {{-- scrollCover --}}
    <div class="@if ($blog->isHeaderFluid) container-fluid px-0  @else container container--mod @endif"
        data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
        <div class="row">
            <div class="col-12 mt-4 mb-5 pb-4">
                <div class='w-100 single--blog-cover js-parallax'
                    style='background-image: url({{ url("{$storagePath}/extra/blogs/{$blog->headerImageFile}") }});'>
                </div>
            </div>
        </div>
    </div>









    {{-- ---------------------------------------------- --}}
    {{-- ---------------------------------------------- --}}
    {{-- ---------------------------------------------- --}}









    {{-- content --}}
    <div class="container container--mod">





        {{-- loop - sections --}}
        @foreach ($blog?->sections ?? [] as $section)

        <div class="row blog--single-section" key='blog-section-{{ $section->id }}'>




            {{-- title - subtitle --}}
            <div class="col-12 @if ($section->type != 'Regular') col-lg @endif">

                <h4 data-aos="fade" data-aos-duration="500" data-aos-delay="100"
                    class="fw-semibold mb-4 single--blog-section-title">
                    <strong>{{ $section->title }}</strong>
                </h4>
                <div data-aos="fade" data-aos-duration="500" data-aos-delay="250"
                    class="mb-4 ql-editor single--blog-section-subtitle">{!!
                    $section->content !!}</div>

            </div>








            {{-- --------------------------------- --}}
            {{-- --------------------------------- --}}
            {{-- --------------------------------- --}}









            {{-- 1: attachments - side --}}




            {{-- A: Floating --}}
            @if ($section->type != 'Regular')

            <div class="col-lg-auto @if ($section->type == 'Floating Left') order-lg-first @endif">

                <div data-aos="{{ $section->type == 'Floating Left' ? 'fade-right' : 'fade-left' }}"
                    data-aos-duration="500" data-aos-delay="350" class="single--blog-attachments text-center">




                    {{-- sectionSwiper --}}
                    <div class="swiper section--swiper section--side-swiper
                        @if ($section->type == 'Floating Left') ms-lg-0 @else me-lg-0 @endif">
                        <div class="swiper-wrapper">



                            {{-- 1: imageFile --}}
                            @if ($section->imageFile)

                            <div class="swiper-slide">
                                <img class="w-100 of-cover mb-3"
                                    src='{{ url("{$storagePath}/extra/blogs/sections/{$section->imageFile}") }}'>
                            </div>

                            @endif
                            {{-- end if --}}






                            {{-- 2: secondImageFile --}}
                            @if ($section->secondImageFile)


                            <div class="swiper-slide ">
                                <img class="w-100 of-cover mb-3"
                                    src='{{ url("{$storagePath}/extra/blogs/sections/{$section->secondImageFile}") }}'>
                            </div>


                            @endif
                            {{-- end if --}}






                            {{-- 3: thirdImageFile --}}
                            @if ($section->thirdImageFile)


                            <div class="swiper-slide">
                                <img class="w-100 of-cover mb-3"
                                    src='{{ url("{$storagePath}/extra/blogs/sections/{$section->thirdImageFile}") }}'>
                            </div>


                            @endif
                            {{-- end if --}}





                            {{-- 4: fourthImageFile --}}
                            @if ($section->fourthImageFile)


                            <div class="swiper-slide">
                                <img class="w-100 of-cover mb-3"
                                    src='{{ url("{$storagePath}/extra/blogs/sections/{$section->fourthImageFile}") }}'>
                            </div>


                            @endif
                            {{-- end if --}}




                        </div>





                        {{-- ---------------------------- --}}
                        {{-- ---------------------------- --}}





                        {{-- pagination --}}
                        <div class="swiper-pagination"></div>


                    </div>
                    {{-- endSwiper --}}


                </div>
            </div>
            {{-- endCol --}}









            {{-- ------------------------------------- --}}
            {{-- ------------------------------------- --}}







            {{-- B: center --}}
            @else




            <div class="col-12">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="350"
                    class="text-center text-lg-start single--blog-attachments square">




                    {{-- sectionSwiper --}}
                    <div class="swiper section--swiper section--regular-swiper">
                        <div class="swiper-wrapper">



                            {{-- 1: imageFile --}}
                            @if ($section->imageFile)

                            <div class="swiper-slide">
                                <img class="w-100 of-cover mb-3 shrink--1 greyscale"
                                    src='{{ url("{$storagePath}/extra/blogs/sections/{$section->imageFile}") }}'>
                            </div>

                            @endif
                            {{-- end if --}}






                            {{-- 2: secondImageFile --}}
                            @if ($section->secondImageFile)


                            <div class="swiper-slide">
                                <img class="w-100 of-cover mb-3 shrink--1 greyscale"
                                    src='{{ url("{$storagePath}/extra/blogs/sections/{$section->secondImageFile}") }}'>
                            </div>


                            @endif
                            {{-- end if --}}






                            {{-- 3: thirdImageFile --}}
                            @if ($section->thirdImageFile)


                            <div class="swiper-slide">
                                <img class="w-100 of-cover mb-3 shrink--1 greyscale"
                                    src='{{ url("{$storagePath}/extra/blogs/sections/{$section->thirdImageFile}") }}'>
                            </div>


                            @endif
                            {{-- end if --}}







                            {{-- 4: fourthImageFile --}}
                            @if ($section->fourthImageFile)


                            <div class="swiper-slide">
                                <img class="w-100 of-cover mb-3 shrink--1 greyscale"
                                    src='{{ url("{$storagePath}/extra/blogs/sections/{$section->fourthImageFile}") }}'>
                            </div>


                            @endif
                            {{-- end if --}}




                        </div>





                        {{-- ---------------------------- --}}
                        {{-- ---------------------------- --}}





                        {{-- pagination --}}
                        <div class="swiper-pagination"></div>


                    </div>
                    {{-- endSwiper --}}


                </div>
            </div>
            {{-- endCol --}}





            @endif
            {{-- endCol --}}










        </div>

        @endforeach
        {{-- end loop --}}





    </div>
    {{-- endContainer --}}














    {{-- ---------------------------------------------- --}}
    {{-- ---------------------------------------------- --}}
    {{-- ---------------------------------------------- --}}









    {{-- tagsContainer --}}
    @if ($blog?->tags?->count() > 0 && $blog->showTags)

    <div class="container container--mod">
        <div class="row mb-5">
            <div class="col-12">
                <div class="single--blog-tags-wrap">



                    {{-- heading --}}
                    <h6 data-aos="fade" data-aos-duration="500">
                        <span>Blog Tags
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16" class="bi bi-arrow-right ms-2 me-4 fs-14">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </span>




                        {{-- loop - tags --}}
                        @foreach ($blog?->tags ?? [] as $key => $tag)

                        <button class="btn single--blog-tags" data-aos="fade-up" data-aos-duration="500"
                            data-aos-delay="{{ $key * 50 }}" type="button">{{ $tag->tag }}</button>

                        @endforeach
                        {{-- end loop --}}




                    </h6>
                    {{-- endHeading --}}



                </div>
            </div>
        </div>
    </div>


    @endif
    {{-- endContainer --}}










    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}









    {{-- section --}}
    @section('scripts')



    {{-- 1: swiper --}}
    <script src="{{url('assets/plugins/blogs/js/init-swipers.js')}}"></script>




    @endsection
    {{-- endSection --}}







    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}







</section>
{{-- endSection --}}
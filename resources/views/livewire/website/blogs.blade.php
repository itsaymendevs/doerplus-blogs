<section class="content--section pt-5 pt-lg-5 mt-4 mb-4">



    {{-- head --}}
    @section('head')




    {{-- title - description - keywords meta --}}
    <title>Our Blogs</title>

    <meta name="description"
        content="Effortlessly plan your meals with our intuitive meal planner software. Create customized meal plans, track your nutrition, and discover delicious recipes to suit your dietary preferences. Simplify your meal planning today!">




    @endsection
    {{-- endHead --}}










    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}







    {{-- colors --}}
    <livewire:website.components.colors.colors-blogs />







    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}










    <div class="container container--mod">
        <div class="row align-items-start">


            {{-- title --}}
            @if ($blogs?->count() ?? 0 > 0)


            <div class="col-12">
                <div class="subheading--wrapper mb-5">
                    <hr class="w-25">
                    <h1 class="display-5 text-center font--handwrite">{{ $settings?->contentTitleText }}</h1>
                    <hr class="w-25">
                </div>
            </div>


            @endif
            {{-- end if --}}




            {{-- ----------------------------------- --}}
            {{-- ----------------------------------- --}}





            {{-- content --}}



            {{-- 1: part --}}
            <div class="col-12 col-sm-6 @if ($perPage == 3) col-lg-4 @elseif ($perPage == 4) col-lg-6 col-xl-3 @endif">




                {{-- loop - partBlogs --}}
                @foreach ($partBlogs ?? [] as $blog)


                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" key='single-blog-{{ $blog->id }}'
                    wire:ignore.self class="blog--card @if ($blog->isSquareCard) square @else rectangle @endif">




                    {{-- topContent --}}
                    <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}" class='d-block text-decoration-none'>


                        {{-- image --}}
                        <img class="w-100" src='{{ "{$storagePath}/extra/blogs/{$blog->imageFile}"  }}'>

                        {{-- author - date --}}
                        <p class="d-flex align-items-center justify-content-between mt-2">
                            <span class="fs-14 fw-500 blog--card-author">{{ $blog?->author }}</span>
                            <span class="fs-14 fw-500 blog--card-date">{{ date('M Y', strtotime($blog->publishDate))
                                }}</span>
                        </p>
                    </a>








                    {{-- content --}}
                    <div data-aos="fade" data-aos-duration="500" data-aos-delay="100">



                        {{-- settings - alignments --}}


                        {{-- 1: left --}}
                        @if ($settings->cardAlignment == 'left')


                        {{-- title --}}
                        <h3 class="fw-500 mb-3 blog--card-title">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="pe-3 blog--card-subtitle">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <div class='d-block'>
                            <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}"
                                class="btn btn--readmore fw-500 scale--icon stretched-link"
                                data-bss-hover-animate="pulse" type="button">Read More</a>
                        </div>





                        {{-- 2: right --}}
                        @elseif ($settings->cardAlignment == 'right')




                        {{-- title --}}
                        <h3 class="fw-500 mb-3 blog--card-title text-end mx-auto me-0">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="ps-3 blog--card-subtitle text-end">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <div class='d-block text-end'>
                            <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}"
                                class="btn btn--readmore fw-500 scale--icon stretched-link"
                                data-bss-hover-animate="pulse" type="button">Read More</a>
                        </div>







                        {{-- 3: center --}}
                        @elseif ($settings->cardAlignment == 'center')




                        {{-- title --}}
                        <h3 class="fw-500 mb-3 blog--card-title mx-auto text-center">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="px-2 blog--card-subtitle text-center">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <div class='d-block text-center'>
                            <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}"
                                class="btn btn--readmore fw-500 scale--icon stretched-link"
                                data-bss-hover-animate="pulse" type="button">Read More</a>
                        </div>



                        @endif
                        {{-- end if - settings --}}





                    </div>
                </div>

                @endforeach
                {{-- end loop --}}



            </div>
            {{-- endCol --}}









            {{-- ------------------------------------------------------- --}}
            {{-- ------------------------------------------------------- --}}







            {{-- 2: partTwo --}}
            @if (count($secondPartBlogs ?? []) > 0)



            <div class="col-12 col-sm-6 @if ($perPage == 3) col-lg-4 @elseif ($perPage == 4) col-lg-6 col-xl-3 @endif">




                {{-- loop - blogs --}}
                @foreach ($secondPartBlogs ?? [] as $blog)

                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" key='single-blog-{{ $blog->id }}'
                    wire:ignore.self class="blog--card @if ($blog->isSquareCard) square @else rectangle @endif">




                    {{-- topContent --}}
                    <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}" class='d-block text-decoration-none'>


                        {{-- image --}}
                        <img class="w-100" src='{{ "{$storagePath}/extra/blogs/{$blog->imageFile}"  }}'>

                        {{-- author - date --}}
                        <p class="d-flex align-items-center justify-content-between mt-2">
                            <span class="fs-14 fw-500 blog--card-author">{{ $blog?->author }}</span>
                            <span class="fs-14 fw-500 blog--card-date">{{ date('M Y', strtotime($blog->publishDate))
                                }}</span>
                        </p>
                    </a>








                    {{-- content --}}
                    <div data-aos="fade" data-aos-duration="500" data-aos-delay="100">



                        {{-- settings - alignments --}}


                        {{-- 1: left --}}
                        @if ($settings->cardAlignment == 'left')


                        {{-- title --}}
                        <h3 class="fw-500 mb-3 blog--card-title">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="pe-3 blog--card-subtitle">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <div class='d-block'>
                            <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}"
                                class="btn btn--readmore fw-500 scale--icon stretched-link"
                                data-bss-hover-animate="pulse" type="button">Read More</a>
                        </div>





                        {{-- 2: right --}}
                        @elseif ($settings->cardAlignment == 'right')




                        {{-- title --}}
                        <h3 class="fw-500 mb-3 blog--card-title text-end mx-auto me-0">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="ps-3 blog--card-subtitle text-end">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <div class='d-block text-end'>
                            <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}"
                                class="btn btn--readmore fw-500 scale--icon stretched-link"
                                data-bss-hover-animate="pulse" type="button">Read More</a>
                        </div>







                        {{-- 3: center --}}
                        @elseif ($settings->cardAlignment == 'center')




                        {{-- title --}}
                        <h3 class="fw-500 mb-3 blog--card-title mx-auto text-center">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="px-2 blog--card-subtitle text-center">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <div class='d-block text-center'>
                            <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}"
                                class="btn btn--readmore fw-500 scale--icon stretched-link"
                                data-bss-hover-animate="pulse" type="button">Read More</a>
                        </div>



                        @endif
                        {{-- end if - settings --}}





                    </div>
                </div>

                @endforeach
                {{-- end loop --}}




            </div>
            {{-- endPart --}}



            @endif
            {{-- end if --}}







            {{-- ------------------------------------------------------- --}}
            {{-- ------------------------------------------------------- --}}














            {{-- 3: partThree --}}
            @if ($perPage >= 3 && count($thirdPartBlogs ?? []) > 0)


            <div class="col-12 col-sm-6 @if ($perPage == 3) col-lg-4 @elseif ($perPage == 4) col-lg-6 col-xl-3 @endif">




                {{-- loop - blogs --}}
                @foreach ($thirdPartBlogs ?? [] as $blog)

                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" key='single-blog-{{ $blog->id }}'
                    wire:ignore.self class="blog--card @if ($blog->isSquareCard) square @else rectangle @endif">




                    {{-- topContent --}}
                    <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}" class='d-block text-decoration-none'>


                        {{-- image --}}
                        <img class="w-100" src='{{ "{$storagePath}/extra/blogs/{$blog->imageFile}"  }}'>

                        {{-- author - date --}}
                        <p class="d-flex align-items-center justify-content-between mt-2">
                            <span class="fs-14 fw-500 blog--card-author">{{ $blog?->author }}</span>
                            <span class="fs-14 fw-500 blog--card-date">{{ date('M Y', strtotime($blog->publishDate))
                                }}</span>
                        </p>
                    </a>








                    {{-- content --}}
                    <div data-aos="fade" data-aos-duration="500" data-aos-delay="100">



                        {{-- settings - alignments --}}


                        {{-- 1: left --}}
                        @if ($settings->cardAlignment == 'left')


                        {{-- title --}}
                        <h3 class="fw-500 mb-3 blog--card-title">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="pe-3 blog--card-subtitle">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <div class='d-block'>
                            <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}"
                                class="btn btn--readmore fw-500 scale--icon stretched-link"
                                data-bss-hover-animate="pulse" type="button">Read More</a>
                        </div>





                        {{-- 2: right --}}
                        @elseif ($settings->cardAlignment == 'right')




                        {{-- title --}}
                        <h3 class="fw-500 mb-3 blog--card-title text-end mx-auto me-0">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="ps-3 blog--card-subtitle text-end">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <div class='d-block text-end'>
                            <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}"
                                class="btn btn--readmore fw-500 scale--icon stretched-link"
                                data-bss-hover-animate="pulse" type="button">Read More</a>
                        </div>







                        {{-- 3: center --}}
                        @elseif ($settings->cardAlignment == 'center')




                        {{-- title --}}
                        <h3 class="fw-500 mb-3 blog--card-title mx-auto text-center">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="px-2 blog--card-subtitle text-center">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <div class='d-block text-center'>
                            <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}"
                                class="btn btn--readmore fw-500 scale--icon stretched-link"
                                data-bss-hover-animate="pulse" type="button">Read More</a>
                        </div>



                        @endif
                        {{-- end if - settings --}}





                    </div>
                </div>


                @endforeach
                {{-- end loop --}}



            </div>

            @endif
            {{-- end if --}}







            {{-- ------------------------------------------------------- --}}
            {{-- ------------------------------------------------------- --}}







            {{-- 4: partFour --}}
            @if ($perPage >= 4 && count($fourthPartBlogs ?? []) > 0)



            <div class="col-12 col-sm-6 @if ($perPage == 3) col-lg-4 @elseif ($perPage == 4) col-lg-6 col-xl-3 @endif">



                {{-- loop - blogs --}}
                @foreach ($fourthPartBlogs ?? [] as $blog)


                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" key='single-blog-{{ $blog->id }}'
                    wire:ignore.self class="blog--card @if ($blog->isSquareCard) square @else rectangle @endif">




                    {{-- topContent --}}
                    <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}" class='d-block text-decoration-none'>


                        {{-- image --}}
                        <img class="w-100" src='{{ "{$storagePath}/extra/blogs/{$blog->imageFile}"  }}'>

                        {{-- author - date --}}
                        <p class="d-flex align-items-center justify-content-between mt-2">
                            <span class="fs-14 fw-500 blog--card-author">{{ $blog?->author }}</span>
                            <span class="fs-14 fw-500 blog--card-date">{{ date('M Y', strtotime($blog->publishDate))
                                }}</span>
                        </p>
                    </a>








                    {{-- content --}}
                    <div data-aos="fade" data-aos-duration="500" data-aos-delay="100">



                        {{-- settings - alignments --}}


                        {{-- 1: left --}}
                        @if ($settings->cardAlignment == 'left')


                        {{-- title --}}
                        <h3 class="fw-500 mb-3 blog--card-title">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="pe-3 blog--card-subtitle">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <div class='d-block'>
                            <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}"
                                class="btn btn--readmore fw-500 scale--icon stretched-link"
                                data-bss-hover-animate="pulse" type="button">Read More</a>
                        </div>





                        {{-- 2: right --}}
                        @elseif ($settings->cardAlignment == 'right')




                        {{-- title --}}
                        <h3 class="fw-500 mb-3 blog--card-title text-end mx-auto me-0">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="ps-3 blog--card-subtitle text-end">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <div class='d-block text-end'>
                            <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}"
                                class="btn btn--readmore fw-500 scale--icon stretched-link"
                                data-bss-hover-animate="pulse" type="button">Read More</a>
                        </div>







                        {{-- 3: center --}}
                        @elseif ($settings->cardAlignment == 'center')




                        {{-- title --}}
                        <h3 class="fw-500 mb-3 blog--card-title mx-auto text-center">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="px-2 blog--card-subtitle text-center">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <div class='d-block text-center'>
                            <a href="{{ route('website.singleBlog', [$blog->titleURL]) }}"
                                class="btn btn--readmore fw-500 scale--icon stretched-link"
                                data-bss-hover-animate="pulse" type="button">Read More</a>
                        </div>



                        @endif
                        {{-- end if - settings --}}





                    </div>
                </div>



                @endforeach
                {{-- end loop --}}



            </div>

            @endif
            {{-- end if --}}







        </div>
    </div>
    {{-- endContainer --}}











    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}





    @section('scripts')



    {{-- 1: swiper --}}
    <script src="{{url('assets/plugins/blogs/js/init-swipers.js')}}"></script>



    @endsection





    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}






</section>
{{-- endSection --}}
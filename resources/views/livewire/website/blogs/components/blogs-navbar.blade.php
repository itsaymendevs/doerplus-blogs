<section class="top--section">



    {{-- navbar --}}
    <section data-aos="slide-down" data-aos-duration="500" data-aos-once="true"
        class="navbar--section @if (Request::is('blogs/*')) customized @endif">
        <div class="container container--mod">
            <div class="row align-items-center">


                {{-- logo --}}
                <div class="col-5 col-sm-3">
                    <img class="navbar--logo of-contain"
                        src='{{ url("{$storagePath}/profile/{$profile->imageFile}") }}'>
                </div>


                {{-- desktopMenu --}}
                <div class="col-7 col-sm-9 text-end d-flex justify-content-end">
                    <div id="menu--desktop"
                        class="d-none d-lg-inline-flex align-items-center justify-content-center me-4">
                        <a href="{{ route('website.blogs') }}" class="btn navbar--links" data-aos="fade"
                            data-aos-duration="500" data-aos-delay="600" type="button">Home</a>

                        <a href="{{ route('website.blogs') }}" class="btn active navbar--links" data-aos="fade"
                            data-aos-duration="500" data-aos-delay="700" type="button">Blogs</a>

                        <a href="{{ route('website.blogs') }}" class="btn navbar--links" data-aos="fade"
                            data-aos-duration="500" data-aos-delay="800" type="button">Plans</a>

                        <a href="{{ route('website.blogs') }}" class="btn navbar--links" data-aos="fade"
                            data-aos-duration="500" data-aos-delay="900" type="button">Contact</a>

                        <a href="{{ route('website.blogs') }}" class="btn navbar--links" data-aos="fade"
                            data-aos-duration="500" data-aos-delay="1000" type="button">Login</a>
                    </div>
                </div>



            </div>
        </div>
    </section>
    {{-- endSection --}}





    {{-- ------------------------------------------- --}}
    {{-- ------------------------------------------- --}}







    {{-- homeHeader --}}
    @if (Request::is('blogs'))


    <section class="header--section">
        <div class="container container--mod">
            <div class="row align-items-center">



                {{-- leftCol --}}
                <div class="col-12 col-lg-5 col-xl-6" data-aos="fade" data-aos-duration="500" data-aos-delay="500"
                    data-aos-once="true">
                    <div class="swiper blog--swiper">
                        <div class="swiper-wrapper">


                            {{-- heros --}}



                            {{-- 1: imageFile --}}
                            @if ($settings->heroImageFile)

                            <div class="swiper-slide">
                                <img class="w-100 header--image of-cover"
                                    src='{{ url("{$storagePath}/extra/blogs/settings/{$settings->heroImageFile}") }}'>
                            </div>

                            @endif
                            {{-- end if --}}







                            {{-- 2: secondImageFile --}}
                            @if ($settings->heroSecondImageFile)

                            <div class="swiper-slide">
                                <img class="w-100 header--image of-cover"
                                    src='{{ url("{$storagePath}/extra/blogs/settings/{$settings->heroSecondImageFile}") }}'>
                            </div>

                            @endif
                            {{-- end if --}}






                            {{-- 3: thirdImageFile --}}
                            @if ($settings->heroThirdImageFile)

                            <div class="swiper-slide">
                                <img class="w-100 header--image of-cover"
                                    src='{{ url("{$storagePath}/extra/blogs/settings/{$settings->heroThirdImageFile}") }}'>
                            </div>

                            @endif
                            {{-- end if --}}







                            {{-- 3: FourthImageFile --}}
                            @if ($settings->heroFourthImageFile)

                            <div class="swiper-slide">
                                <img class="w-100 header--image of-cover"
                                    src='{{ url("{$storagePath}/extra/blogs/settings/{$settings->heroFourthImageFile}") }}'>
                            </div>

                            @endif
                            {{-- end if --}}





                        </div>



                        {{-- ---------------------------- --}}
                        {{-- ---------------------------- --}}





                        {{-- pagination --}}
                        <div class="swiper-pagination"></div>

                    </div>
                </div>
                {{-- endCol --}}








                {{-- -------------------------------------------- --}}
                {{-- -------------------------------------------- --}}








                {{-- rightCol --}}
                <div class="col-12 col-lg-6 col-xl-5 offset-lg-1">


                    {{-- hr --}}
                    <div class="d-flex justify-content-end">
                        <hr class="header--hr mb-4 mb-lg-5 mt-4 mt-lg-0">
                    </div>







                    {{-- heroText --}}
                    <div data-aos="fade" data-aos-duration="500" data-aos-delay="200" data-aos-once="true"
                        class='d-block ql-editor header--emh' wire:ignore.self>{!! $settings?->heroText !!}</div>





                    {{-- title --}}
                    {{-- <h6 data-aos="fade" data-aos-duration="500" data-aos-delay="200" data-aos-once="true"
                        class="mb-4">
                        Standon Food &amp; Recipes</h6> --}}

                    {{-- content --}}
                    {{-- <h2 data-aos="fade" data-aos-duration="500" data-aos-delay="400" data-aos-once="true"
                        class="fw-semibold ls-7 header--mh">With the hyper-convenience of modern life, many of us can
                        only operate a microwave. A home-cooked meal is not a luxury, anyone can do it!</h2> --}}




                </div>
            </div>
        </div>
    </section>



    @endif
    {{-- endHeader --}}




</section>
{{-- endHeader --}}
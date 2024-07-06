<section class="top--section">



    {{-- navbar --}}
    <section data-aos="slide-down" data-aos-duration="500" data-aos-once="true" class="navbar--section">
        <div class="container container--mod">
            <div class="row align-items-center">


                {{-- logo --}}
                <div class="col-4 col-sm-3">
                    <img class="navbar--logo of-contain" src="{{url('assets/plugins/blogs/img/logo/aleens.png')}}">
                </div>


                {{-- desktopMenu --}}
                <div class="col-8 col-sm-9 text-end d-flex justify-content-end">
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
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="swiper blog--swiper">
                        <div class="swiper-wrapper">


                            {{-- loop - blogs --}}
                            <div class="swiper-slide">
                                <img class="w-100 header--image of-cover"
                                    src="{{ url('assets/plugins/blogs/img/helpers/download-copy2B2.jpg') }}">
                            </div>

                            <div class="swiper-slide">
                                <img class="w-100 header--image of-cover"
                                    src="{{url('assets/plugins/blogs/img/helpers/121.jpeg')}}">
                            </div>


                            <div class="swiper-slide">
                                <img class="w-100 header--image of-cover"
                                    src="{{url('assets/plugins/blogs/img/helpers/download.jpeg')}}">
                            </div>

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




                    {{-- choosen Blog --}}



                    {{-- title --}}
                    <h6 data-aos="fade" data-aos-duration="500" data-aos-delay="200" data-aos-once="true" class="mb-4">
                        Standon Food &amp; Recipes</h6>



                    {{-- content --}}
                    <h2 data-aos="fade" data-aos-duration="500" data-aos-delay="400" data-aos-once="true"
                        class="fw-semibold ls-7 header--mh">With the hyper-convenience of modern life, many of us can
                        only operate a microwave. A home-cooked meal is not a luxury, anyone can do it!</h2>
                </div>
            </div>
        </div>
    </section>



    @endif
    {{-- endHeader --}}




</section>
{{-- endHeader --}}
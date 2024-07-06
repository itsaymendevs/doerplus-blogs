<section class="single--blog-section pt-5">




    {{-- header --}}
    <div class="container container--mod">
        <div class="row align-items-start">
            <div class="col-12">


                {{-- author - date --}}
                <div class="fs-13 fw-500 mb-3 d-flex justify-content-between align-items-center">

                    <span style="color: var(--bs-form-valid-border-color);">{{ date('M Y',
                        strtotime($blog->publishDate)) }}<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-dash-lg mx-3">
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
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-12 mt-4 mb-5">
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
            <div class="col-12 col-lg-7">

                <h4 data-aos="fade" data-aos-duration="500" data-aos-delay="100" class="fw-semibold mb-4">
                    <strong>{{ $section->title }}</strong>
                </h4>

                <p data-aos="fade" data-aos-duration="500" data-aos-delay="250" class="mb-4">
                    {{ $section->content }}
                </p>

            </div>






            {{-- --------------------------------- --}}
            {{-- --------------------------------- --}}
            {{-- --------------------------------- --}}






            {{-- 1: attachments - side --}}
            <div class="col-12 col-lg-5">
                <div data-aos="fade-left" data-aos-duration="500" data-aos-delay="350"
                    class="single--blog-attachments text-center">




                    {{-- sectionSwiper --}}
                    <div class="swiper section--side-swiper">
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


                            <div class="swiper-slide">
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







            {{-- ---------------------------- --}}
            {{-- ---------------------------- --}}





            {{-- 2: attachment - bottom --}}
            <div class="col-12 d-none">
                <div class="text-center text-lg-start single--blog-attachments square">
                    <img data-aos="fade-up" data-aos-duration="500" data-aos-delay="350" class="mb-3"
                        src='{{ url("{$storagePath}/extra/blogs/sections/{$section->imageFile}") }}' width="300"
                        height="400">

                    <img data-aos="fade-up" data-aos-duration="500" data-aos-delay="450" class="mb-3 ms-4"
                        src="{{url('assets/plugins/blogs/img/helpers/download7.jpg')}}">
                </div>
            </div>
            {{-- endCol --}}


        </div>

        @endforeach
        {{-- end loop --}}









    </div>
    {{-- endContainer --}}
















    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}





    @section('scripts')

    <script src="{{asset('assets/plugins/blogs/js/init-swipers.js')}}"></script>

    @endsection





    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}







</section>
{{-- endSection --}}
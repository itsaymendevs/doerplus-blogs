<section class="content--section pt-4 pt-lg-5">
    <div class="container container--mod">
        <div class="row align-items-start">


            {{-- title --}}
            @if ($blogs?->count() ?? 0 > 0)


            <div class="col-12">
                <div class="subheading--wrapper mb-5">
                    <hr class="w-25">
                    <h1 class="display-5 text-center font--handwrite">Our Recent Blogs</h1>
                    <hr class="w-25">
                </div>
            </div>


            @endif
            {{-- end if --}}




            {{-- ----------------------------------- --}}
            {{-- ----------------------------------- --}}





            {{-- content --}}





            {{-- 1: loop - partBlogs --}}
            @foreach ($partBlogs ?? [] as $blog)

            <div class="col-12 col-sm-6 col-lg-4" key='single-blog-{{ $blog->id }}'>




                {{-- blog [rectangle - square] --}}
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" class="blog--card rectangle">


                    {{-- image --}}
                    <img class="w-100" src='{{ "{$storagePath}/extra/blogs/{$blog->imageFile}"  }}'>


                    {{-- author - date --}}
                    <p class="d-flex align-items-center justify-content-between mt-2">
                        <span class="fs-14 fw-500">{{ $blog?->author }}</span>
                        <span class="fs-14 fw-500">{{ date('M Y', strtotime($blog->publishDate)) }}</span>
                    </p>





                    {{-- content --}}
                    <div data-aos="fade" data-aos-duration="500" data-aos-delay="100">


                        {{-- title --}}
                        <h3 class="pe-3 fw-500 mb-3">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="pe-3">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <a href="{{ route('website.singleBlog', [$blog->id]) }}"
                            class="btn btn--readmore fw-500 scale--icon" data-bss-hover-animate="pulse"
                            type="button">Read More</a>
                    </div>



                </div>
            </div>


            @endforeach
            {{-- end loop --}}








            {{-- ------------------------------------------------------- --}}
            {{-- ------------------------------------------------------- --}}






            @foreach ($secondPartBlogs ?? [] as $blog)

            <div class="col-12 col-sm-6 col-lg-4" key='single-blog-{{ $blog->id }}'>




                {{-- blog [rectangle - square] --}}
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="blog--card square">


                    {{-- image --}}
                    <img class="w-100" src='{{ "{$storagePath}/extra/blogs/{$blog->imageFile}"  }}'>


                    {{-- author - date --}}
                    <p class="d-flex align-items-center justify-content-between mt-2">
                        <span class="fs-14 fw-500">{{ $blog?->author }}</span>
                        <span class="fs-14 fw-500">{{ date('M Y', strtotime($blog->publishDate)) }}</span>
                    </p>






                    {{-- content --}}
                    <div data-aos="fade" data-aos-duration="500" data-aos-delay="100">


                        {{-- title --}}
                        <h3 class="pe-3 fw-500 mb-3">{{ $blog?->title }}</h3>

                        {{-- subtitle --}}
                        <p class="pe-3">{{ $blog?->subtitle }}</p>



                        {{-- viewButton --}}
                        <a href="{{ route('website.singleBlog', [$blog->id]) }}"
                            class="btn btn--readmore fw-500 scale--icon" data-bss-hover-animate="pulse"
                            type="button">Read More</a>
                    </div>


                </div>
            </div>


            @endforeach
            {{-- end loop --}}







        </div>
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
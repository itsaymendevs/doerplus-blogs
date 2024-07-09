{{-- footer --}}
<section class="footer--section position-relative js-parallax"
    style='background-image: url({{ url("{$storagePath}/extra/blogs/settings/{$settings->footerImageFile}") }});'>


    {{-- overlay --}}
    <div class="section--overlay" style="background-color: rgba(0,0,0,0.56);"></div>



    {{-- subscribeForm --}}
    <div class="container container--mod z-index-1">
        <div class="row align-items-start">
            <div class="col text-center fw-semibold">



                {{-- title --}}
                <div class="subheading--wrapper footer mb-5">
                    <hr class="w-25">
                    <h1 class="display-5 text-center font--handwrite footer--heading text-white" data-aos="fade"
                        data-aos-duration="500" data-aos-delay="300">Keep Yourself Updated With<br>Our Blogs
                        &amp; Tips
                    </h1>
                    <hr class="w-25">
                </div>



                {{-- email - submit --}}
                <div class="d-flex justify-content-center">
                    <input type="email" class="form--input for-subscription text-center" placeholder="Email Address">
                    <button class="btn form--button for--subscription" type="button">Subscribe</button>
                </div>



            </div>
        </div>
    </div>
</section>
{{-- endSection --}}
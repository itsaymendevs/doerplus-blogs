{{-- ground --}}
<section class="ground--section">
    <div class="container container--mod">
        <div class="row align-items-center">


            {{-- client's --}}
            <div class="col-6 col-lg-4">
                <p class="mb-0 fs-12 fw-semibold text-white">{{ "@" . date('Y', strtotime($globalTodayDate)) }} {{
                    $settings?->footerCopyrightsText }}</p>
            </div>






            {{-- poweredBy --}}
            <div class="col-6 col-lg-4">
                <div class="footer--powered justify-content-end justify-content-lg-center">
                    <span class="text-white">Powered By</span><img
                        src="{{ url('assets/plugins/blogs/img/logo/doer.png') }}">
                </div>
            </div>







            {{-- socials --}}
            <div class="col-12 col-lg-4 text-center text-lg-end order-first order-lg-last mb-3 mt-1 my-lg-0">
                <div class="footer--socials">



                    {{-- 1: twitter --}}
                    @if ($socials?->twitterURL)
                    <a class="btn btn--icon mx-1" target="_blank" role="button" href="{{ $socials?->twitterURL }}">X</a>
                    @endif





                    {{-- 2: insta --}}
                    @if ($socials?->instagramURL)
                    <a class="btn btn--icon mx-1" target="_blank" role="button"
                        href="{{ $socials?->instagramURL }}">Instagram</a>
                    @endif






                    {{-- 3: facebook --}}
                    @if ($socials?->facebookURL)
                    <a class="btn init--link btn--icon mx-1" target="_blank" role="button"
                        href="{{ $socials?->facebookURL }}">Facebook</a>
                    @endif





                    {{-- 4: tiktok --}}
                    @if ($socials?->tiktokURL)
                    <a class="btn btn--icon mx-1" role="button" target="_blank"
                        href="{{ $socials?->tiktokURL }}">Tiktok</a>
                    @endif







                    {{-- 5: snapchat --}}
                    @if ($socials?->snapchatURL)
                    <a class="btn btn--icon mx-1" role="button" target="_blank"
                        href="{{ $socials?->snapchatURL }}">Snapchat</a>
                    @endif




                    {{-- 6: linkedIn --}}
                    @if ($socials?->linkedInURL)
                    <a class="btn btn--icon mx-1" role="button" target="_blank"
                        href="{{ $socials?->linkedInURL }}">Snapchat</a>
                    @endif




                </div>
            </div>
        </div>
    </div>
</section>
{{-- endSection --}}
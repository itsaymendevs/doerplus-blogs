<!DOCTYPE html>
<html data-bs-theme="light" lang="en">



    {{-- head --}}
    <head>


        {{-- meta --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">





        {{-- fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <link
            href="https://fonts.googleapis.com/css2?family=Courgette&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">








        {{-- styles --}}
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/aos.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/stretchy.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/single-blog.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/splitters-custom.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/splitting-cells.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/blogs.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/form.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/globals.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/splitting.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/styles.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/swipers.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/variables.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/cursor.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/scrollbar.css')}}">
        <link rel="stylesheet" href="{{url('assets/plugins/blogs/css/loader.css')}}">




        {{-- Quill --}}
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />








        {{-- scripts --}}
        <script src="{{ url('assets/plugins/blogs/js/modernizr.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>







        {{-- head --}}
        @yield('head')






    </head>
    {{-- endHead --}}









    {{-- ------------------------------------------------ --}}
    {{-- ------------------------------------------------ --}}








    {{-- body --}}
    <body class="scroll-container isLoading">




        {{-- preloader --}}
        <livewire:website.blogs.components.blogs-preloader />




        {{-- cursor --}}
        <livewire:website.blogs.components.blogs-cursor />













        {{-- floating - navbar --}}
        <livewire:website.blogs.components.blogs-floating-navbar />
        <livewire:website.blogs.components.blogs-navbar />






        {{-- content --}}
        {{ $slot }}









        {{-- footer --}}
        <livewire:website.blogs.components.blogs-footer />



        {{-- ground --}}
        <livewire:website.blogs.components.blogs-ground />








        {{-- modals --}}
        @yield('modals')






        {{-- ------------------------------------------------ --}}
        {{-- ------------------------------------------------ --}}





        {{-- scripts --}}
        <script src="{{asset('assets/plugins/blogs/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="https://unpkg.com/kinet@2.2.1/dist/kinet.min.js"></script>
        <script src="{{asset('assets/plugins/blogs/js/aos.min.js')}}"></script>
        <script src="{{asset('assets/plugins/blogs/js/splitting.min.js')}}"></script>
        <script src="{{asset('assets/plugins/blogs/js/stretchy.js')}}"></script>
        <script src="{{asset('assets/plugins/blogs/js/jarallax.min.js')}}"></script>
        <script src="{{asset('assets/plugins/blogs/js/loader.js')}}"></script>
        <script src="{{asset('assets/plugins/blogs/js/bs-init.js')}}"></script>
        <script src="{{asset('assets/plugins/blogs/js/init.js')}}"></script>





        {{-- swiper --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>




        {{-- sweetAlert --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <x-livewire-alert::scripts />




        @yield('scripts')



    </body>
</html>
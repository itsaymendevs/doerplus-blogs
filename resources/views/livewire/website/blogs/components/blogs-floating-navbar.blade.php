{{-- floatingNavbar --}}
<header class="d-lg-none">
    <nav class="cd-stretchy-nav">


        {{-- outer --}}
        <a class="cd-nav-trigger" href="#0">
            Menu
            <span aria-hidden="true"></span>
        </a>



        {{-- ------------------------------ --}}
        {{-- ------------------------------ --}}




        {{-- links --}}
        <ul>
            <li>
                <a href="{{ route('website.blogs') }}">
                    <span>Home</span>
                </a>
            </li>


            <li>
                <a href="{{ route('website.blogs') }}">
                    <span>Blogs</span>
                </a>
            </li>


            <li>
                <a href="{{ route('website.blogs') }}">
                    <span>Plans</span>
                </a>
            </li>

            <li>
                <a href="{{ route('website.blogs') }}">
                    <span>Login</span>
                </a>
            </li>
        </ul>

        <span aria-hidden="true" class="stretchy-nav-bg"></span>
    </nav>
</header>
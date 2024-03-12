<div class="container-fluid px-md-5  pt-4 pt-md-5">
    <div class="row justify-content-between">
        <div class="col-md-8 order-md-last">
            <div class="row">
                <div class="col-md-6 text-center">
                    <a class="navbar-brand" href="/">K I T A B <span> K A R W A N</span> <small>Book Publishing
                            Company</small></a>
                </div>

            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="social-media">
                <p class="mb-0 d-flex">
                    <a href="https://www.facebook.com/" class="d-flex align-items-center justify-content-center"><span
                            class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                    <a href="https://twitter.com/" class="d-flex align-items-center justify-content-center"><span
                            class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                    <a href="https://www.instagram.com/" class="d-flex align-items-center justify-content-center"><span
                            class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>

                </p>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{url('books')}}" class="nav-link">Books</a></li>
                <li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>



                @if (Route::has('login'))
                @auth
                <li class="nav-item"><a href="{{url('competition')}}" class="nav-link">Competition</a></li>

	          <li class="nav-item"><a href="#" class="nav-link text-danger">Hello {{ Auth::user()->name }}</a></li>
              <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <li class="nav-item"><a class="nav-link important" ><x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link> </a></li>
                        </form>

                    @else

                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Sign in</a></li>
                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>

                    @endauth
              @endif
            </ul>
        </div>
    </div>
</nav>

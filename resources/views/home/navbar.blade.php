        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{url('redirect')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{url('about')}}" class="nav-item nav-link">About Us</a>
                    <a href="{{url('classes')}}" class="nav-item nav-link">Classes</a>
                    <a href="{{url('contact')}}" class="nav-item nav-link">Contact Us</a>
                </div>

                @if (Route::has('login'))

                @auth



                <!-- <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Logout</a> -->
                <x-app-layout>

                </x-app-layout>


                @else

                <a class="btn btn-primary"  href="{{ route('login') }}">Login</a>

                <a class="btn btn-success" href="{{ route('register') }}">Register</a>


                @endauth
                
                @endif
            </div>
        </nav>
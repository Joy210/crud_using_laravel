<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
    <div class="container"><a class="navbar-brand" href="{{url('/')}}">LARAVEL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav ml-auto text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/create')}}">Create Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/create-image')}}">Upload Image</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/show-image')}}">Gallery
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
<!--/.Navbar -->
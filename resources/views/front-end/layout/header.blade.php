    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">KOPPEE</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="{{route('index')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{route('services')}}" class="nav-item nav-link">Service</a>
                    <a href="{{route('home.menu')}}" class="nav-item nav-link">Menu</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    <a href="{{route('clients')}}" class="nav-item nav-link">Testimonials</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
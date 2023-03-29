<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{url('/')}}" class="logo"><img src="{{asset('images/logo.png')}}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{url('about')}}">About</a></li>
                <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{url('service', 'web-development')}}">Web Development</a></li>
                        <li><a href="{{url('service', 'mobile-app-development')}}">Mobile App Development</a></li>
                        <li><a href="{{url('service', 'slug')}}">Drop Down 3</a></li>
                        <li><a href="{{url('service', 'slug')}}">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto " href="{{url('portfolio')}}">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="{{url('contact')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
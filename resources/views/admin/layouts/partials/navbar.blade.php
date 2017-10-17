<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0px;">
    <div class="container">
        <div class="navbar-header">
            <div class="">
                <a class="navbar-left-btn" href="{{url('https://www.facebook.com')}}"><i class="fa fa-lg fa-facebook"></i></a>
                <a class="navbar-left-btn" href="{{url('https://www.instagram.com')}}"><i class="fa fa-lg fa-instagram"></i></a>
                <a class="navbar-left-btn" href="{{url('https://www.pinterest.com')}}"><i class="fa fa-lg fa-pinterest"></i></a>  
            </div>
            <!-- Branding Image -->
            {{-- <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a> --}}
        <div class="text-center">
            <a class="navbar-brand hidden-lg hidden-md visible-sm visible-xs" href="#">{{ config('app.name', 'AmandasPlacePH') }}</a>
        </div>
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
           
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav visible-lg visible-md hidden-sm hidden-xs">
                <li><a href=""><i class="fa fa-lg fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-lg fa-instagram"></i></a></li>
                <li><a href=""><i class="fa fa-lg fa-pinterest"></i></a></li>   
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
                <li><a href="{{route('cart')}}"><i class="fa fa-shopping-bag"></i> Shopping Bag</a></li>
            </ul>
            <form class="navbar-form pull-right" >
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div><!-- /input-group -->
            </form>
        </div>
    </div>
</nav>
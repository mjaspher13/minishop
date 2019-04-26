<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{ route('index.index') }}"><img src="{{ asset('images/logo-white.png') }}"
                    alt="{{ config('app.name') }}" class="navbar-logo"></a>
        </div>
        @if(!Auth::check())
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">       
                <!-- Contact Us -->
                <li>
                    <a href="{{ route('index.contact') }}">
                        <span>Contact Us</span>
                    </a>
                </li>
                <!-- #END# Contact Us -->
                <!-- About Us -->
                <li>
                    <a href="{{ route('index.about') }}">
                        <span>About Us</span>
                    </a>
                </li>
                <!-- #END# About Us -->
                <!-- Login-->
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Login
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('marketplace.marketplace') }}">
                                <span>Login</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('signup.index') }}">
                                <span>Sign Up</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    
                </li> -->
                <!-- #END# Login -->
                @yield('additionalOptions')
            </ul>
        </div>
        @endif
    </div>
</nav>
<!-- #Top Bar -->

<!-- Alert Box -->
<div class="alert custom-alert" role="alert"></div>
<!-- #Alert Box -->

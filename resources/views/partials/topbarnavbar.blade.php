<div class="wrap">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="bg-wrap">
<div class="row">
<div class="col-md-6 d-flex align-items-center">
<p class="mb-0 phone pl-md-2">
<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>Faiza</a>
<a href="#"><span class="fa fa-paper-plane mr-1"></span> Oleetechs@gmail.com</a>
</p>
</div>
<div class="col-md-6 d-flex justify-content-md-end">
<div class="social-media">
<p class="mb-0 d-flex">
<a href="" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
<a href="" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-white ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="{{url('/')}}">Faiza</a>
<!--
<form action="#" class="searchform order-sm-start order-lg-last">
<div class="form-group d-flex">
<input type="text" class="form-control pl-3" placeholder="Search">
<button type="submit" placeholder="" data-toggle="modal" data-target="#exampleModal" class="form-control search"><span class="fa fa-search"></span></button>
</div>
</form>
-->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="fa fa-bars"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav m-auto">
<li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
<li class="nav-item"><a href="{{ url('mould') }}" class="nav-link">Mould</a></li>
<li class="nav-item"><a href="" class="nav-link">About</a></li>
<li class="nav-item"><a href="" class="nav-link">Case Study</a></li>
<li class="nav-item"><a href="" class="nav-link">Blog</a></li>
<li class="nav-item"><a href="" class="nav-link">Contact</a></li>

@include('partials.searchmodal')


<!-- Authentication Links -->
 @guest
 @if (Route::has('login'))
 <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">{{ __('Login') }} <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
     @endif                     
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
                        <li class="nav-item dropdown"><a href="" class="">
                           
                                <a id="navbarDropdown" class=" nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest




</ul>

</div>
</nav>
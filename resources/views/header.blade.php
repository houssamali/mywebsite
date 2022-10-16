<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hossam Al_Mohamadi</title>

    <!--Google Fonts--
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet"> 
    ------------>

    <!---Bootstrap--->

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">



    <!---------------->

    <!----Icon------------->

<link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <!-------------->

</head>
<body class="bg-light">
    
<div class="navbar navbar-expand-md bg-light navbar-light shadow-sm">
    <div class="container">
        <a href="" class="navbar-brand text-danger">{{__('messages.mysite')}}</a>

<button class="btn btn-secondary navbar-toggler bg-light " data-bs-toggle="collapse" data-bs-target="#houssam">
    <span class="navbar-toggler-icon "></span>
</button>


        <div class="collapse navbar-collapse py-2" id="houssam">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#home" class="nav-link">{{__('messages.Home')}}</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">{{__('messages.About')}}</a></li>
                <li class="nav-item"><a href="#services" class="nav-link">{{__('messages.Services')}}</a></li>
                
                






                @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('messages.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('messages.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


                           




                        <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle"
                     data-bs-toggle="dropdown">{{__('messages.Portoflio')}}</a>
                <ul class="dropdown-menu bg-light border-0" id="dropdowns">
                    <li><a href="#testimonials" class="dropdown-item ">{{__('messages.Testimonials')}}</a></li>
                    <li><a href="#contact" class="dropdown-item ">{{__('messages.Contact')}}</a></li>

                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              <li>
            <a class="dropdown-item " rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach

                </ul>
                </li>








                
            </ul>
        </div>

    </div>
</div>



{{--@section('mainNav')--}}
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

    <div class="container">
        <div class="row">

            <div class="col-12 text-right">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">{{__('customLang.services')}}</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="#bookNow">{{__('customLang.booknow')}}</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">{{__('customLang.about')}}</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">{{__('customLang.team')}}</a></li>


                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('customLang.login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('customLang.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            </div>
        </div>

        <div class="links">
            <a href="lang/en">EN</a>
            <a href="lang/spn">ESP</a>
            <a href="lang/fr">FR</a>
        </div>
    </div>
    </nav>
{{--@show--}}

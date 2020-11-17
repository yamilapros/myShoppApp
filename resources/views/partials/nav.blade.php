<!-- Top bar Start -->
<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <i class="fa fa-envelope"></i>
                support@email.com
            </div>
            <div class="col-sm-6">
                <i class="fa fa-phone-alt"></i>
                +012-345-6789
            </div>
        </div>
    </div>
</div>
<!-- Top bar End -->

<!-- Nav Bar Start -->
<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                    <a href="#" class="nav-item nav-link">Products</a>
                    <a href="#" class="nav-item nav-link">Cart</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">@auth()
                            {{ Auth::user()->name }}
                        @endauth
                    @guest
                        Mi cuenta
                    @endguest
                    </a>
                        <div class="dropdown-menu">
                            <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @endif
                                    @if (Route::has('register'))
                                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                    @else
                                   {{--   <li class="nav-item dropdown">  --}}
                                        {{--  <a id="navbarDropdown" class="dropdown-item dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>  --}}
        
                                       {{--   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">  --}}
                                           @if(auth()->user()->admin == true)
                                            <a href="{{ url('/admin/products') }}" class="dropdown-item">Ir a dashboard</a>
                                           @endif
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                      {{--    </div>  --}}
                                  {{--    </li>  --}}
                                @endguest
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->   
<!-- Bottom Bar Start -->
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('shop/img/logo.png') }}" alt="Logo">
                    </a>
                </div>
            </div>
            {{--  <div class="col-md-6">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <button><i class="fa fa-search"></i></button>
                </div>
            </div>  --}}
            <div class="col-md-9">
                <div class="user">
                    <a href="{{ url('/home') }}" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        {{--  @if(auth()->user()->cart)
                        <span>({{ auth()->user()->cart->details->count() }})</span>
                        @endif  --}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bottom Bar End -->    

<header id="site-header" class="fixed-top white_wine_background_color shadow">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0 pt-lg-0 p-lg-0">
            <h1> <a class="navbar-brand" href="{{route('home')}}">
                    <img class="w-25" id="logo" src="{{asset('images/logo.png')}}" alt="wine cube"> <span class="red_wine_color text-lowercase">wine cube</span>
                </a></h1>
            <!-- if logo is image enable this
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
            <button class="navbar-toggler collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars red_wine_background_color white_wine_color"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times red_wine_background_color white_wine_color"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link menu_link" href="{{route('home')}}">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @@about__active">
                        <a class="nav-link menu_link" href="{{route('wines')}}">Wines</a>
                    </li>
                    <li class="nav-item @@contact__active">
                        <a class="nav-link menu_link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item @@contact__active">
                        <a class="nav-link menu_link" href="{{route('author')}}">Author</a>
                    </li>
                    @if(session()->has('user'))
                        <li class="nav-item @@services__active">
                            <a class="nav-link menu_link" href="{{route('user')}}">User corner</a>
                        </li>
                    @endif
                    @if(session()->has('user') && session('user')->role->id==1)
                        <li class="nav-item @@services__active">
                            <a class="nav-link menu_link" href="{{route('control_panel.home')}}">Control panel</a>
                        </li>
                    @endif
                </ul>
                @if(!session()->has('user'))
                    <div class="top-quote mr-lg-3 mt-lg-0 mb-lg-0 mb-3">
                        <a href="{{route('sign_up.create')}}" class="btn btn-style btn-primary menu_button">Sign up</a>
                    </div>
                    <div class="top-quote mr-lg-3 mt-lg-0 mt-3">
                        <a href="{{route('log_in.create')}}" class="btn btn-style btn-primary menu_button">Log in</a>
                    </div>
                @endif
                @if(session()->has('user'))
                    <div class="top-quote mr-lg-3 mt-lg-0 mb-lg-0 mb-3">
                        <a href="{{route('log_out')}}" class="btn btn-style btn-primary menu_button">Log out</a>
                    </div>
                @endif
                @if(session()->has('user'))
                    <a href="{{route('user')}}">
                        <div class="width_50 display_inline_block position-relative">
                            <img class="img_fluid border_radius_50" src="{{asset('images/'.session('user')->image)}}" />
                            @if(session()->has('items'))
                                <?php
                                    $total_quantity = session('items');
                                    $wine_units = 0;
                                    if(count(session('items'))!=0){
                                        foreach($total_quantity as $quantity){
                                            $wine_units += $quantity->quantity;
                                        }
                                    }
                                ?>
                                <span id="pin" class="position-absolute width_25 height_25 text-center red_wine_color font-weight-bold @if($wine_units==0) d-none @endif">{{$wine_units}}</span>
                            @endif
                        </div>
                    </a>
                @endif
            </div>
        </nav>
    </div>
</header>

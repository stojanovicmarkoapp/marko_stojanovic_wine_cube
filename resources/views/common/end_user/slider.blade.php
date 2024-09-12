<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            @foreach($slides as $slide)
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2" style="background: url(../images/{{$slide->image}}) no-repeat !important; background-size: cover !important;">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg id=container">
                                    <h5 class="white_wine_color">{{$slide->title}}</h5>
                                    <p class="mt-4 white_wine_color">{{$slide->description}}</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 white_wine_background_color red_wine_color white_wine_border" href="{{$slide->link}}">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /main-slider -->

@extends("end_user_layout")
@section("title")
    {{$wine->name}}
@endsection
@section("keywords")
    Wine, Cube, liquor, one, best
@endsection
@section("description")
    Take a peek into our vast arsenal of the best Californian wines.
@endsection
@section("vista")
    <section class="team py-5 red_wine_background_color header_cleaner" id="team">
        <div class="container">
            <div id="pills-tabContent1">
                <div class="tab-pane fade show active red_wine_background_color" id="pills-team1" role="tabpanel" aria-labelledby="pills-team1-tab">
                    <div class="team-grids row">
                        <div class="col-lg-6 frame_for_image overflow-hidden zoom">
                            <br class="margin_top_for_image"/>
                            <img src="{{asset('images/'.$wine->image)}}" class="rounded img-fluid zoom" alt="" />
                        </div>
                        <div class="col-lg-6 align-self mt-lg-0 mt-md-5 mt-4">
                            <h2 class="title-big white_wine_color">{{$wine->name}}</h2>
                            <div>
                                <p class="white_wine_color">{{$wine->features}}</p>
                            </div>
                            <div class="manufacturer">
                                <p class="white_wine_color"><span class="font-weight-bold">Manufacturer:</span> {{$wine->manufacturer->name}}</p>
                            </div>
                            <div class="type">
                                <p class="white_wine_color"><span class="font-weight-bold">Type:</span> {{$wine->variety->type->name}} wine</p>
                            </div>
                            <div class="variety">
                                <p class="white_wine_color"><span class="font-weight-bold">Variety:</span> {{$wine->variety->name}}</p>
                            </div>
                            <div class="price">
                                <p class="white_wine_color"><span class="font-weight-bold">Price:</span> ${{$wine->price}}</p>
                            </div>
                            @if($wine->available==true)
                                <img src="{{asset('images/frozen.png')}}" alt="Frozen wine cube"/>
                                <span class="ml-1 font-weight-bold white_wine_color">Available!</span>
                            @else
                                <img src="{{asset('images/splashed.png')}}" alt="Splashed wine cube"/>
                                <span class="ml-1 font-weight-bold white_wine_color">Not available.</span>
                            @endif
                            @if(session()->has('user') && session('user')->role->id!=1)
                                <div>
                                    <form>
                                        <?php
                                            $empty_cart = true;
                                            if(session()->has('items')){
                                                $items = session('items');
                                                $number_of_items = 0;
                                                foreach($items as $item){
                                                    if($wine->id==$item->wine_id){
                                                        $empty_cart = false;
                                                        $number_of_items = $item->quantity;
                                                    }
                                                }
                                            }
                                        ?>
                                            <button id="cart" class="btn btn-style btn-primary mt-sm-3 mt-2 white_wine_background_color red_wine_color red_wine_border red_wine_border_left red_wine_border-right @if($empty_cart==false) d-none @endif" data-wine="{{$wine->id}}">Put into cart!</button>
                                            <button id="increase" class="btn btn-style rounded-0 border_radius_left btn-primary mt-sm-3 mt-2 white_wine_background_color red_wine_color red_wine_border @if($empty_cart==true) d-none @endif" ><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            <button id="{{$wine->id.'_items'}}" class="btn btn-style btn-primary rounded-0 mt-sm-3 mt-2 white_wine_background_color red_wine_color red_wine_border red_wine_border_left red_wine_border-right @if($empty_cart==true) d-none @endif">@if(session('items')){{$number_of_items}}@endif</button>
                                            <button id="decrease" class="btn btn-style rounded-0 border_radius_right btn-primary mt-sm-3 mt-2 white_wine_background_color red_wine_color red_wine_border @if($empty_cart==true) d-none @endif"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            @endif
                                {{--<div class="d-flex align-items-center mt-3">
                                    <button class="btn btn-style rounded-0 border_radius_left btn-primary mt-sm-3 mt-2 white_wine_background_color red_wine_color red_wine_border" href="#"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    <button class="btn btn-style rounded-0 btn-primary mt-sm-3 mt-2 white_wine_background_color red_wine_color red_wine_border red_wine_border_left red_wine_border-right">Carted!</button>
                                    <button class="btn btn-style rounded-0 border_radius_right btn-primary mt-sm-3 mt-2 white_wine_background_color red_wine_color red_wine_border" href="#"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                    <h5 class="white_wine_color mt-sm-3 mt-2 ml-2">Units in cart: 0</h5>
                                </div>
                            @endif--}}
                            <div class="rating mt-5">
                                @if(count($wine->reviews)==0)
                                    <span class="white_wine_color font-weight-bold">No scores yet.</span>
                                @else
                                    <?php
                                        $score_on_average = 0;
                                        foreach($wine->reviews as $review){
                                            $score_on_average += $review->score->score;
                                        }
                                        $score_on_average = round($score_on_average/count($wine->reviews));
                                        $name_of_the_score_on_average = "";
                                        foreach($scores as $score){
                                            if($score->score==$score_on_average){
                                                $name_of_the_score_on_average= $score->name;
                                            }
                                        }
                                    ?>
                                    @for($i=0;$i<$score_on_average;$i++)
                                        <img src="{{asset('images/white.png')}}" alt="Soaked wine cube"/>
                                    @endfor
                                    @for($i=0;$i<5-$score_on_average;$i++)
                                        <img src="{{asset('images/ice.png')}}" alt="Frozen wine cube"/>
                                    @endfor
                                        <p class="white_wine_color"><span class="font-weight-bold">Critics' score on average: </span>{{$score_on_average}}/5 - <span class="font-weight-bold">{{$name_of_the_score_on_average}}</span></p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 mt-lg-0">
                        <h3 class="font-weight-bold white_wine_color">About <span class="font-italic">{{$wine->manufacturer->name}}</span> wine label</h3>
                        <p class="white_wine_color">{{$wine->manufacturer->features}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-clients-1 red_wine_background_color" id="testimonials">
        <div class="cusrtomer-layout py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <h3 class="font-weight-bold white_wine_color mb-2">Review spot</h3>
            @if(session()->has('user') && session('user')->role->id==2)
                    <h4 class="white_wine_color mt-3 mb-3">Let the world know what do you think!</h4>
                    <form id="reviewing">
                        <select id="score" name="score" class="custom-select pb-4 h-auto red_wine_background_color white_wine_color">
                            <option value="0" selected>Choose</option>
                            @foreach($scores as $score)
                                <option class="white_wine_color" {{old('score')==$score->id ? "selected" : ""}} value="{{$score->id}}">{{$loop->iteration."/5 ".$score->name}}
                                </option>
                            @endforeach
                        </select>
                        <br/><output id="score_error" for="score" class="mt-2 review_error_field white_wine_color"></output>
                        <textarea id="comment" name="comment" class="w-100 mt-4 pl-3 pr-3 rounded border-0 white_wine_background_color red_wine_color"></textarea>
                        <br/><output id="comment_error" for="comment" class="mt-2 review_error_field white_wine_color"></output>
                        <button id="submit_review" class="btn btn-primary w-100 white_wine_background_color red_wine_color p-3 rounded mt-4 mb-4" type="submit" data-wine="{{$wine->id}}">Review this wine!</button>
                    </form>
                @endif
                <?php
                    $all_wine_scores = count($wine->reviews);
                    $cube_wine_scores = 0;
                ?>
                @if(count($wine->reviews)>0)
                    <h4 class="white_wine_color mb-5">Total number of critics given scores for this wine is <span class="font-weight-bold">{{$all_wine_scores}}</span>, out of which:</h4>
                    @for($i=5;$i>=1;$i--)
                        @for($y=1;$y<=$i;$y++)
                            <img src="{{asset('images/white.png')}}" alt="Soaked wine cube"/>
                        @endfor
                        <?php
                            foreach($wine->reviews as $review){
                                if($review->score->score==$i){
                                    $cube_wine_scores++;
                                }
                            }
                        ?>
                        <span class="white_wine_color ml-3 font-weight-bold">{{$cube_wine_scores}}</span>
                        <?php
                            $cube_wine_scores=0;
                        ?>
                        <br class="mt-3"/>
                    @endfor
                    <div class="testimonial-row mt-5">
                        <div id="owl-demo1" class="owl-theme row">
                            <?php
                            $reversed_reviews = $wine->reviews->reverse();
                            ?>
                            @foreach($reversed_reviews as $review)
                                <x-review :review="$review"/>
                            @endforeach
                        </div>
                    </div>
                @else
                    <p class="font-weight-bold white_wine_color">There are no critics' reviews for this wine yet.</p>
                @endif
            </div>
            <!-- /grids -->
        </div>
        <!-- //grids -->
    </section>
@endsection

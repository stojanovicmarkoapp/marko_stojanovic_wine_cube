<div class="item col-12 col-lg-6 mt-5">
    <div class="testimonial-content">
        <div class="testimonial">
            <div class="test-img">
                <img src="{{asset('images/'.$review->critic->image)}}" class="img-fluid"
                     alt="client-img">
            </div>
            <div class="testi-des">
                <div class="peopl align-self">
                    <h4 class="white_wine_color font-weight-bold">{{$review->critic->first_name}} {{$review->critic->last_name}}</h4>
                </div>
            </div>
            <blockquote class="mt-3">
                <q class="white_wine_color">{{$review->comment}}</q>
            </blockquote>
            @for($i=0;$i<$review->score->score;$i++)
                <img class="w-auto" src="{{asset('images/white.png')}}" alt="Soaked wine cube"/>
            @endfor
            @for($i=0;$i<5-$review->score->score;$i++)
                <img class="w-auto" src="{{asset('images/ice.png')}}" alt="Frozen wine cube"/>
            @endfor
            <p class="white_wine_color mb-5">{{$review->score->score}}/5 - {{$review->score->name}}
        </div>
    </div>
</div>

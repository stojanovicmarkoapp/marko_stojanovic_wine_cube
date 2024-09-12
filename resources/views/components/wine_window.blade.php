<div class="item col-12 col-lg-6 mt-5 mb-5">
    <div class="card">
        <div class="card-header p-0 position-relative">
            <a href="{{route('wine',['id'=>$wine->id])}}" class="zoom d-block white_wine_background_color">
                <img class="card-img-bottom d-block" src="{{asset('images/'.$wine->image)}}"
                     alt="Card image cap">
            </a>
        </div>
        <div class="card-body course-details white_wine_background_color">
            <h3><a href="{{route('wine',['id'=>$wine->id])}}" class="title-big red_wine_color">{{$wine->name}}</a>
            </h3>
            <div class="features">
                <p class="mt-3 red_wine_color">{{$wine->features}}</p>
            </div>
            <div class="manufacturer">
                <p class="mt-3 red_wine_color"><span class="font-weight-bold">Manufacturer:</span> {{$wine->manufacturer->name}}</p>
            </div>
            <div class="type">
                <p class="mt-3 red_wine_color"><span class="font-weight-bold">Type:</span> {{$wine->variety->type->name}} wine</p>
            </div>
            <div class="price">
                <p class="mt-3 red_wine_color"><span class="font-weight-bold">Price:</span> ${{$wine->price}}</p>
            </div>
            <div class="blog-bottom-info">
                <a href="{{route('wine',['id'=>$wine->id])}}" class="btn btn-primary btn-style1 red_wine_background_color white_wine_color">Find out more!</a>
                <div class="course-meta">
                    <div class="meta-item course-students">
                        @if($wine->available==true)
                            <img src="{{asset('images/frozen.png')}}" alt="Frozen wine cube"/>
                            <span class="red_wine_color ml-1 font-weight-bold">Available!</span>
                        @else
                            <img src="{{asset('images/splashed.png')}}" alt="Splashed wine cube"/>
                            <span class="red_wine_color ml-1 font-weight-bold">Not available.</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

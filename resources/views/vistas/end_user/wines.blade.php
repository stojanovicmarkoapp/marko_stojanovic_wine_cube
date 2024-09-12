@extends("end_user_layout")
@section("title")
    Wines
@endsection
@section("keywords")
    Wine, Cube, liquor, red, white
@endsection
@section("description")
    Take a peek into our vast arsenal of the best Californian wines.
@endsection
@section("vista")
    <section class="w3l-courses header_cleaner red_wine_background_color" id="blog">
        <div class="blog py-5" id="courses">
            <div class="container py-lg-5">
                <form>
                    <div class="row w-100 d-flex justify-content-around">
                        <div class="col-5">
                            <select id="label" name="label" class="custom-select w-100 pb-4 h-auto red_wine_background_color white_wine_color border-0">
                                <option class="white_wine_color" value="0" selected>All labels</option>
                                @foreach($labels as $label)
                                    <option class="white_wine_color" value="{{$label->id}}">{{$label->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-5 mb-5">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="red_wines" checked>
                                <label class="custom-control-label white_wine_color" for="red_wines" >Red wines</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="white_wines" checked>
                                <label class="custom-control-label white_wine_color" for="white_wines">White wines</label>
                            </div>
                        </div>
                    </div>
                    <div class="row w-100 d-flex justify-content-around">
                        <div class="col-5">
                            <select id="sort" name="sort" class="custom-select w-100 pb-4 h-auto red_wine_background_color white_wine_color border-0">
                                @foreach($sorts as $sort)
                                    <option class="white_wine_color" value="{{$sort->id}}">{{$sort->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-5 d-flex">
                            <span class="fa fa-search" aria-hidden="true"></span>
                            <input type="search" name="search" id="search" class="w-100 white_wine_background_color red_wine_color" placeholder="Search wines by name..."/>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around mt-3">
                        <div class="col-5">
                            <?php
                            $max_price = 0;
                                foreach($wines as $wine){
                                    if($wine->price > $max_price){
                                        $max_price = $wine->price;
                                    }
                                }
                            ?>
                                <label class="white_wine_color">Price range from $0 to $<output id="top_line">{{$max_price}}</output>:</label>
                                <input class="ml-2 w-50 rounded white_wine_background_color" type="range" min="0" step="0.01" max="{{$max_price}}" value="{{$max_price}}" name="price_range" id="price_range"/>
                            </div>
                        <div class="col-5">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="unavailables" checked>
                                <label class="custom-control-label white_wine_color" for="unavailables">Include unavailable</label>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div id="wines" class="col-md-12 row mx-auto d-block d-lg-flex justify-content-between">
                        @forelse($wines as $wine)
                            <x-wine_window :wine="$wine"/>
                        @empty
                            <p class="white_wine_color mt-5 font-weight-bold">There are no wines matching your search.</p>
                        @endforelse
                        {{$wines->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

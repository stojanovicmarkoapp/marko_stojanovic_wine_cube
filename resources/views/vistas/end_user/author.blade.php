@extends("end_user_layout")
@section("title")
    Author
@endsection
@section("keywords")
    Wine, Cube, best, liquor, store
@endsection
@section("description")
    Wine Cube is the best liquor store out there. Try any of our wines today and find out why!
@endsection
@section("vista")
    <div class="w3l-contact-info py-5 red_wine_background_color" id="contact">
        <div class="container py-lg-5 py-md-4">
            <div class="row header_cleaner">
                <div class="col-12 col-lg-6">
                    <img src="{{asset('images/marko_stojanovic.jpg')}}" alt="Marko Stojanović"/>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-contact-infos d-flex flex-column">
                        <div class="text-box">
                            <div class="icon-box"> <span class="fa fa-user-circle white_wine_color"></span></div>
                            <h3 class="mb-3 white_wine_color mt-2">About author</h3>
                            <p class="white_wine_color">Author of this website is Marko Stojanović, student of College for Information and Communication Techonologies in Belgrade, Serbia. Born and raised in town of Požarevac, he moved to Belgrade in 2019 after graduation in Economic and Trade School with a degree of economic technician. However, he chose to move on and come to Belgrade to study what he love the most - computing. Up to this point, Marko Stojanović has learned a decent amount of knowledge related to the information techonologies, first and for most in domain of programming. That knowledge includes ability to work in programming languages C, C# and PHP, as well as script languages, such as JavaScript and database query language SQL. Aside from programming, he has quite a lot studying experience in administrating network devices. In his free time, he enjoys watching movies and listening to music.</p>
                            <a class="btn btn-style btn-primary mt-2 white_wine_background_color red_wine_color white_wine_border" href="{{route('documentation')}}">Documentation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

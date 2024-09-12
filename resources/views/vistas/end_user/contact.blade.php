@extends("end_user_layout")
@section("title")
    Contact
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
                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Liquor store Vena Market&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-contact-infos mt-5 mb-5">
                        <div class="icon-box"> <span class="fa fa-map-marker"></span></div>
                        <div class="text-box">
                            <h3 class="mb-3 white_wine_color">Address info</h3>
                            <p class="white_wine_color">Wine Cube, 8905 Venice Blvd., Los Angeles, CA 90034, United States</p>
                        </div>
                    </div>
                    <div class="single-contact-infos mt-5 mb-5">
                        <div class="icon-box"> <span class="fa fa-clock-o white_wine_color"></span></div>
                        <div class="text-box">
                            <h3 class="mb-3 white_wine_color">Opening hours</h3>
                            <p class="white_wine_color"> Monday – Friday : 9am - 6pm</p>
                            <p class="white_wine_color"> Saturday : 10am - 4pm</p>
                        </div>
                    </div>
                    <div class="single-contact-infos mt-5 mb-5">
                        <div class="icon-box"> <span class="fa fa-envelope white_wine_color"></span></div>
                        <div class="text-box">
                            <h3 class="mb-3 white_wine_color">Contact info</h3>
                            <p><a href="tel:+1(21) 234 4567" class="white_wine_color">+1(21) 234 4567</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

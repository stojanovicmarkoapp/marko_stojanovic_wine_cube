@extends("end_user_layout")
@section("title")
    Home
@endsection
@section("keywords")
    Wine, Cube, best, liquor, store
@endsection
@section("description")
    Wine Cube is the best liquor store out there. Try any of our wines today and find out why!
@endsection
@section("vista")
    @include("common.end_user.slider")
    <section class="w3l-servicesblock py-5 red_wine_background_color" id="about">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row" id="welcome">
                <div class="col-lg-8 about-right-faq align-self">
                    <span class="title-small mb-2 white_wine_color">Be free to enjoy</span>
                    <h3 class="title-big mx-0 white_wine_color"> Take it easy with a Wine Cube!</h3>
                    <p class="mt-lg-4 mt-3 white_wine_color">A glass of wine can be your best friend wherever you're at - on a romantic dinner, a wild party, or just a peaceful evening in your lovely home. Possibilities are endless and we, people from Wine Cube, are here to provide you with everything you need to make your day look less gloomy and more happy! We have only the best from State of California-originated wines carefully picked to meet everybody's desires. From sharp, dry Chardonnay to the refreshingly sweet Riesling - Wine Cube has it all. Try out today!</p>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-5">
                    <img src="{{asset('images/interior_2.jpg')}}" alt="Interior" class="img-fluid radius-image">
                </div>
            </div>
            <div class="row" id="history">
                <div class="col-lg-4 mt-lg-0 mt-5">
                    <img src="{{asset('images/history_2.jpg')}}" alt="Tradition" class="img-fluid radius-image">
                </div>
                <div class="col-lg-8 about-right-faq align-self">
                    <span class="title-small mb-2 white_wine_color">A long ride</span>
                    <h3 class="title-big mx-0 white_wine_color">Our history - our guarantee of quality!</h3>
                    <p class="mt-lg-4 mt-3 white_wine_color">Starting out in 1949. - it's needless to say how our company has a rich history. But along with the tradition, we have always been devoted to the creation of the more inclusive and righteous society and were always glad in giving opportunities to minorities. As we still do today. Our company policy is that everybody has equal rights not only to enjoy in charms of this wonderful beverage, but also to earn money for buying it! That's why our liquor store has been loved from people of the most different ethic and religious backgrounds united in idea of liberty.</p>
                </div>
            </div>
            <div class="row" id="buy">
                <div class="col-lg-8 about-right-faq align-self">
                    <span class="title-small mb-2 white_wine_color">New deal</span>
                    <h3 class="title-big mx-0 white_wine_color">Online liquor shopping</h3>
                    <p class="mt-lg-4 mt-3 white_wine_color">Welcome a brand new addition to Wine Cube's offerings - online shopping! That's right, you can now buy wine from your favorite liquor store from comfort of your armchair! Great feature made for you is also a possibility of putting wines into the online cart as your online wish list! Even if the particular wine is not available at the moment, it'll be waiting for you in your cart. All you have to do is just to sign in!</p>
                        <a class="btn btn-style btn-primary mt-2 white_wine_background_color red_wine_color white_wine_border" href="route('wines')">Go shopping</a>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-5">
                    <img src="{{asset('images/cart.jpg')}}" alt="Cart" class="img-fluid radius-image">
                </div>
            </div>
            <div class="row" id="interior">
                <div class="col-lg-4 mt-lg-0 mt-5">
                    <img src="{{asset('images/interior_3.jpg')}}" alt="Interior" class="img-fluid radius-image">
                </div>
                <div class="col-lg-8 about-right-faq align-self">
                    <span class="title-small mb-2 white_wine_color">A long ride</span>
                    <h3 class="title-big mx-0 white_wine_color">Our history - our guarantee of quality!</h3>
                    <p class="mt-lg-4 mt-3 white_wine_color">For anyone of you traditionalists, or if you're just in a hurry; you can come by to our store in fabulous Los Angeles, just minutes away from Venice Beach. Beside practical purposes, our store is also great for photography, as we operate in work-of-art building which is a work of art of the modern achitecture. Take a sip of you favorite wine in an equally pleasing environment. You deserved it!</p>
                    <a class="btn btn-style btn-primary mt-2 white_wine_background_color red_wine_color white_wine_border" href="route('contact')">Get it touch with us</a>
                </div>
            </div>
        </div>
    </section>
@endsection

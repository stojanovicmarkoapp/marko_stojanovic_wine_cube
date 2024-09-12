@extends("end_user_layout")
@section("title")
    Log in
@endsection
@section("keywords")
    Wine, Cube, liquor, log, in
@endsection
@section("description")
    Experience the best liquor out there. Log in today!
@endsection
@section("vista")
    <div class="w3l-contact-info py-5 red_wine_background_color" id="contact">
        <div class="container py-lg-5 py-md-4">
                <div class="form-inner-cont mt-lg-0 mt-sm-5 mt-4 white_wine_color">
                    <form action="{{route('log_in')}}" method="post" class="signin-form">
                        @csrf
                        <div class="form-group mt-4 mb-4">
                            <label for="user_name">User name</label>
                            <input id="user_name" name="user_name" class="white_wine_color" value="{{old('user_name')}}@error('provided_user_name'){{$message}}@enderror" type="text">
                            @error('user_name')
                            <output for="user_name">{{$message}}</output>
                            @enderror
                        </div>
                        <div class="form-group mt-4 mb-5">
                            <label for="password">Password</label>
                            <input id="password" name="password" class="white_wine_color"  type="password">
                            @error('password')
                                <output for="password">{{$message}}</output>
                            @enderror
                            @error('wrong_password')
                                <output for="password">{{$message}}</output>
                            @enderror
                        </div>
                        <button class="btn btn-primary w-100 white_wine_background_color red_wine_color p-3 rounded mt-4 mb-4" type="submit">Log in!</button>
                            <div class="d-lg-flex mt-5">
                                <p class="white_wine_color mt-3">Don't have an account? No problem, whatsoever. You can make one right there: </p>
                                <a href="{{route('sign_up.create')}}" class="btn btn-primary w-100 white_wine_background_color red_wine_color p-3 rounded mt-4 mb-4" type="submit">Sign up!</a>
                            </div>
                    </form>
                </div>
        </div>
    </div>
@endsection

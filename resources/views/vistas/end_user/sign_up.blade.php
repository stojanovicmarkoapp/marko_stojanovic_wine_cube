@extends("end_user_layout")
@section("title")
    Sign up
@endsection
@section("keywords")
    Wine, Cube, liquor, sign, up
@endsection
@section("description")
    Experience the best liquor out there. Sign up today!
@endsection
@section("vista")
    <div class="w3l-contact-info py-5 red_wine_background_color" id="contact">
        <div class="container py-lg-5 py-md-4">
                <div class="form-inner-cont mt-lg-0 mt-sm-5 mt-4 white_wine_color">
                    <form action="{{route('sign_up.store')}}" enctype="multipart/form-data" method="post" class="signin-form">
                        @csrf
                        <div class="form-row mt-4 mb-4">
                            <div class="form-group col-md-6">
                                <label for="first_name">First name</label>
                                <input id="first_name" name="first_name" class="white_wine_color" value="{{old('first_name')}}" type="text">
                                @error('first_name')
                                    <output for="first_name">{{$message}}</output>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">Last name</label>
                                <input id="last_name"  name="last_name" class="white_wine_color" value="{{old('last_name')}}" type="text">
                                @error('last_name')
                                    <output for="last_name">{{$message}}</output>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mt-4 mb-4">
                            @foreach($genders as $gender)
                                <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="{{$gender->id}}" class="custom-control-input"  name="gender" {{old('gender')==$gender->id ? "checked" : ""}} value="{{$gender->id}}">
                                        <label class="custom-control-label" for="{{$gender->id}}">{{$gender->name}}</label>
                                    </div>
                                </div>
                            @endforeach
                                @error('gender')
                                    <output for="gender">{{$message}}</output>
                            @enderror
                        </div>
                        <div class="form-row mt-4 mb-4">
                            <div class="form-group col-md-6">
                                <label for="home_address">Home address</label>
                                <input id="home_address" name="home_address" class="white_wine_color" type="text" value="{{old('home_address')}}">
                                @error('home_address')
                                    <output for="home_address">{{$message}}</output>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="d-block" for="country">Country</label>
                                <select id="country" name="country" class="custom-select pb-4 h-auto red_wine_background_color white_wine_color">
                                    <option value="0" selected>Choose</option>
                                    @foreach($countries as $country)
                                        <option class="white_wine_color" {{old('country')==$country->id ? "selected" : ""}} value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                    <output for="country" class="mt-4">{{$message}}</output>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row mt-4 mb-4">
                            <div class="form-group col-md-6">
                                <label for="email_address">Email address</label>
                                <input id="email_address" class="white_wine_color" name="email_address" value="{{old('email_address')}}" type="text">
                                @error('email_address')
                                    <output for="email_address">{{$message}}</output>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="user_name">User name</label>
                                <input id="user_name" name="user_name" class="white_wine_color" value="{{old('user_name')}}" type="text">
                                @error('user_name')
                                    <output for="user_name">{{$message}}</output>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label for="password">Password</label>
                            <input id="password" name="password" class="white_wine_color"  type="password">
                            @error('password')
                                <output for="password">{{$message}}</output>
                            @enderror
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label for="confirm_password">Confirm password</label>
                            <input id="confirm_password" class="white_wine_color"  name="confirm_password" type="password">
                            @error('confirm_password')
                                <output for="confirm_password">{{$message}}</output>
                            @enderror
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label for="image">Profile image</label>
                            <input id="image" class="white_wine_color"  name="image" type="file">
                            @error('image')
                                <output for="image">{{$message}}</output>
                            @enderror
                        </div>
                        <button class="btn btn-primary w-100 white_wine_background_color red_wine_color p-3 rounded mt-4 mb-4" type="submit">Sign up!</button>
                    </form>
                </div>
        </div>
    </div>
@endsection

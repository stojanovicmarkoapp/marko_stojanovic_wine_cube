@extends("end_user_layout")
@section("title")
    User Corner
@endsection
@section("keywords")
    Wine, Cube, liquor, user, cart
@endsection
@section("description")
    Take a peek into our vast arsenal of the best Californian wines.
@endsection
@section("vista")
    <div class="header_cleaner container-fluid red_wine_background_color pb-5">
        <div class="container">
            <div class="d-lg-flex justify-content-between pt-lg-5">
                <div class="w-25 border-radius-50 mt-5 mt-lg-0">
                    <img class="img_fluid border_radius_50" src="{{asset('images/'.session('user')->image)}}"/>
                </div>
                <div class="w-75 col-md-6">
                    <h1 class="header_cleaner mt-lg-5 white_wine_color">Welcome {{session('user')->first_name.'!'}} </h1>
                </div>
            </div>
            <h2 class="white_wine_color mt-5">About you</h2>
            <form id="changing" class="signin-form ice_color">
                @csrf
                <div class="form-row mt-4 mb-4">
                    <div class="form-group col-lg-6">
                        <label for="first_name">First name</label>
                        <input id="first_name" name="first_name" class="ml-1 w-50 white_wine_color red_wine_background_color border-0" value="{{session('user')->first_name}}" type="text">
                        <br/><output id="first_name_error" for="first_name" class="mt-2 white_wine_color"></output>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="last_name">Last name</label>
                        <input id="last_name"  name="last_name" class="ml-1 w-50 white_wine_color red_wine_background_color border-0" value="{{session('user')->last_name}}" type="text">
                        <br/><output id="last_name_error" for="last_name" class="mt-2 white_wine_color"></output>
                    </div>
                </div>
                <div class="form-row mt-4 mb-4">
                    @foreach($genders as $gender)
                        <div class="form-group col-lg-6">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="{{$gender->id}}" class="custom-control-input"  name="gender" {{session('user')->gender->id==$gender->id ? "checked" : ""}} value="{{$gender->id}}">
                                <label class="custom-control-label" for="{{$gender->id}}">{{$gender->name}}</label>
                            </div>
                        </div>
                    @endforeach
                    <br/><output id="gender_error" for="gender" class="mt-2 white_wine_color"></output>
                </div>
                <div class="form-row mt-5 mb-5">
                    <div class="form-group col-lg-6">
                        <div class="d-flex">
                            <label for="home_address">Home address</label>
                            <input id="home_address" name="home_address" class="ml-1 w-50 white_wine_color red_wine_background_color border-0" type="text" value="{{session('user')->home_address}}">
                        </div>
                        <br/><output id="home_address_error" for="home_address" class="mt-2 white_wine_color"></output>
                    </div>
                    <div class="form-group col-lg-6 d-flex">
                        <label class="d-block mt-2" for="country">Country</label>
                        <select id="country" name="country" class="custom-select pb-4 h-auto red_wine_background_color white_wine_color border-0">
                            <option value="0" selected>Choose</option>
                            @foreach($countries as $country)
                                <option class="white_wine_color" {{session('user')->country->id==$country->id ? "selected" : ""}} value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                        <br/><output id="country_error" for="country" class="mt-2 yellow_wine_color"></output>
                    </div>
                </div>
                <div class="form-row mt-5 mb-5">
                    <div class="form-group col-lg-6">
                        <label for="email_address">Email address</label>
                        <input id="email_address" class="ml-1 w-50 white_wine_color red_wine_background_color border-0" name="email_address" value="{{session('user')->email_address}}" type="text">
                        <br/><output id="email_address_error" for="email_address" class="mt-2 white_wine_color"></output>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="user_name">User name</label>
                        <input id="user_name" name="user_name" class="ml-1 w-50 white_wine_color red_wine_background_color border-0" value="{{session('user')->user_name}}" type="text">
                        <br/><output id="user_name_error" for="user_name" class="mt-2 white_wine_color"></output>
                    </div>
                </div>
                <div class="form-row mt-5 mb-5">
                    <div class="form-group col-lg-6">
                        <label for="password">Password</label>
                        <input id="password" name="password" class="ml-1 w-50 white_wine_color red_wine_background_color border-0"  type="password">
                        <br/><output id="password_error" class="mt-2 white_wine_color" for="password"></output>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="confirm_password">Confirm password</label>
                        <input id="confirm_password" class="ml-1 w-50 white_wine_color red_wine_background_color border-0"  name="confirm_password" type="password">
                        <br/><output id="confirm_password_error" class="mt-2 white_wine_color" for="confirm_password"></output>
                    </div>
                </div>
                <div class="form-group mt-5 mb-5">
                    <label for="image">Profile image</label>
                    <input id="image" class="white_wine_color" name="image" type="file">
                    <br/><output id="image_error" for="image" class="mt-2 white_wine_color"></output>
                </div>
                <button id="change" class="btn btn-primary w-100 white_wine_background_color red_wine_color p-3 rounded mt-4 mb-4" type="submit">Change it!</button>
            </form>
            @if(session('user')->role->id!=1)
                <h2 class="white_wine_color mt-5">Checkout</h2>
                <div id="checkout">
                    @if(session()->has('items') && count(session('items'))!=0)
                        <form>
                            <table class="mt-3 w-100">
                                <thead>
                                    <tr class="white_wine_color">
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Available</th>
                                        <th class="text-center">Increase</th>
                                        <th class="text-center">Decrease</th>
                                        <th class="text-center">Take back</th>
                                        <th class="text-center">Buy</th>
                                    </tr>
                                </thead>
                                <tbody id="items">
                                    @foreach(session('items') as $item)
                                        <tr class="{{$loop->index%2==0 ? "white_wine_background_color red_wine_color" : "red_wine_background_color white_wine_color"}}">
                                            <td align="center"><a class="{{$loop->index%2==0 ? "red_wine_color" : "white_wine_color"}}" href="{{route('wine',$item->wine->id)}}">{{$item->wine->name}}</a></td>
                                            <td align="center"><a href="{{route('wine',$item->wine->id)}}"><img width="50px" src="{{asset('images/'.$item->wine->image)}}"/></a></td>
                                            <td align="center">${{$item->wine->price}}</td>
                                            <td id="{{$item->wine->id.'_items'}}" align="center">{{$item->quantity}}</td>
                                            <td align="center">{{round($item->quantity * $item->wine->price,2)}}</td>
                                            <td align="center"><img class="mr-3" src="{{$item->wine->available==true ? 'images/frozen.png' : 'images/splashed.png'}}"/>{{$item->wine->available == true ? "Yes!" : "No."}}</td>
                                            <td align="center"> <button class="increase btn border_radius_50 {{$loop->index%2==0 ? "red_wine_background_color white_wine_color" : "white_wine_background_color red_wine_color"}}" data-wine="{{$item->wine->id}}"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
                                            <td align="center"> <button class="decrease btn border_radius_50 {{$loop->index%2==0 ? "red_wine_background_color white_wine_color" : "white_wine_background_color red_wine_color" }}" data-wine="{{$item->wine->id}}"><i class="fa fa-minus" aria-hidden="true"></i></button></td>
                                            <td align="center"> <button class="take_back btn border_radius_50 {{$loop->index%2==0 ? "red_wine_background_color white_wine_color" : "white_wine_background_color red_wine_color" }}" data-wine="{{$item->wine->id}}"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                            <td align="center"> <button class="buy btn border_radius_50 {{$loop->index%2==0 ? "red_wine_background_color white_wine_color" : "white_wine_background_color red_wine_color" }}" {{$item->wine->available != true ? "disabled" : ""}}  data-toggle="{{$item->wine->available != true ? "tooltip" : ""}}" data-wine="{{$item->wine->id}}"  data-placement="{{$item->wine->available != true ? "top" : ""}}"  title="{{$item->wine->available != true ? "Not available at the moment." : ""}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    @else
                        <h3 class="white_wine_color mt-5">Your cart is empty.</h3>
                    @endif
                </div>
                <h2 class="white_wine_color mt-5">Purchases</h2>
                <div id="purchases">
                    @if(count($orders)!=0)
                        <table class="mt-3 w-100">
                            <thead>
                            <tr class="white_wine_color">
                                <th class="text-center">Name</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Total</th>
                                <th class="text-center">Paid</th>
                                <th class="text-center">Order date</th>
                            </tr>
                            </thead>
                            <tbody id="orders">
                                @foreach($orders as $order)
                                    <tr class="{{$loop->index%2==0 ? "white_wine_background_color red_wine_color" : "red_wine_background_color white_wine_color"}}">
                                        <td align="center"><a class="{{$loop->index%2==0 ? "red_wine_color" : "white_wine_color"}}" href="{{route('wine',$order->wine->id)}}">{{$order->wine->name}}</a></td>
                                        <td align="center"><a href="{{route('wine',$order->wine->id)}}"><img width="50px" src="{{asset('images/'.$order->wine->image)}}"/></a></td>
                                        <td align="center">${{$order->wine->price}}</td>
                                        <td align="center">{{$order->quantity}}</td>
                                        <td align="center">{{round($order->quantity * $order->wine->price,2)}}</td>
                                        <td align="center"><img class="mr-3" src="{{$order->paid==true ? 'images/frozen.png' : 'images/ice.png'}}"/>{{$order->paid==true ? "Yes!" : "No."}}</td>
                                        <td align="center">{{substr($order->created_at,0,10)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h3 class="white_wine_color mt-5">You made no purchases.</h3>
                    @endif
                </div>
            @endif
        </div>
    </div>
@endsection

<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ChangeUserMiddleware;
use App\Http\Requests\AuthenticationRequest;
use App\Http\Requests\ChangeUserRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\Country;
use App\Models\Gender;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserControlController extends Controller
{
    public function create_sign_up_form(){
        try{
            $country_model = new Country();
            $all_countries = $country_model->get_all_countries();
            $gender_model = new Gender();
            $all_genders = $gender_model->get_all_genders();
            return view("vistas.end_user.sign_up",[
                'countries'=>$all_countries,
                'genders'=>$all_genders
            ]);
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
    public function store_sign_up_data(RegistrationRequest $request){
        try{
            $image_name = "";
            if($request->gender==1){
                $image_name = "male_user.png";
            }
            else {
                $image_name = "female_user.png";
            }
            if($request->hasFile('image')){
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $request->image->move(public_path('images'),$image_name);
            }
            $user_model = new User();
            $user_model->store_user($request,$image_name);
            $user = $user_model->get_user($request->user_name);
            $request->session()->put("user",$user);
            Log::info("User has signed in!");
            return redirect()->route('user.home');
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
    public function change_user(ChangeUserRequest $request){
        try{
            $user_id = session('user')->id;
            $user_model = new User();
            $users = $user_model->get_all_users();
            $user_name = $request->user_name;
            $email_address = $request->email_address;
            foreach($users as $user){
                if($user->id!=$user_id){
                    if($user->user_name==$user_name){
                        return json_encode(['message'=>'User name has already been taken.']);
                    }
                    if($user->email_address==$email_address){
                        return json_encode(['message'=>'Email address has already been taken.']);
                    }
                }
            }
            $image_name = session('user')->image;
            if($request->hasFile('image')){
                if(file_exists(public_path("/images/".$image_name))){
                    unlink(public_path("/images/".$image_name));
                }
                $image_name = time().'_'.$request->file('image')->getClientOriginalName();
                $request->image->move(public_path('images'),$image_name);
            }
            $user_model->change($request,$image_name,$user_id);
            $user = $user_model->find_user_by_id($user_id);
            session()->put("user",$user);
            Log::info("User data has been changed!");
            return json_encode(['message'=>'Your data has been changed!']);
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
    public function user_corner(){
        $country_model = new Country();
        $all_countries = $country_model->get_all_countries();
        $gender_model = new Gender();
        $all_genders = $gender_model->get_all_genders();
        $orders = [];
        if(session('user')->role->id!=1){
            $customer_id = session('user')->id;
            $order_model = new Order();
            $orders = $order_model->get_orders_by_customer_id($customer_id);
        }
        return view("vistas.end_user.user_corner",[
            'orders'=>$orders,
            'countries' => $all_countries,
            'genders'=>$all_genders
        ]);
    }
    public function log_out(Request $request){
        $request->session()->flush();
        return redirect()->route("home");
    }
    public function create_log_in_form(){
        return view("vistas.end_user.log_in");
    }
    public function log_in(AuthenticationRequest $request){
        try {
            $user_model = new User();
            $user = $user_model->get_user($request->user_name);
            if($user->password!=sha1($request->password)){
                return redirect()->back()->withErrors(['wrong_password'=>'Wrong password.','provided_user_name'=>$request->user_name]);
            }
            $request->session()->put("user",$user);
            Log::info("User has logged in!");
            return redirect()->route("user");
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
}

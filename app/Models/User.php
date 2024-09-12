<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Requests\ChangeUserRequest;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'image',
        'home_address',
        'email_address',
        'user_name',
        'country_id',
        'gender_id',
        'role_id',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function gender(){
        return $this->belongsTo(Gender::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class,'critic_id');
    }
    public function items(){
        return $this->hasMany(Item::class,'customer_id');
    }
    public function orders(){
        return $this->hasMany(Order::class,'customer_id');
    }
    public function get_user($user_name){
        return User::where("user_name",$user_name)->first();
    }
    public function get_all_users(){
        return User::all();
    }
    public function find_user_by_id($user_id){
        return User::find($user_id);
    }
    public function store_user(RegistrationRequest $request, string $image_name){
        return User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'home_address' => $request->home_address,
            'country_id'=>$request->country,
            'gender_id'=> $request->gender,
            'email_address'=> $request->email_address,
            'user_name'=>$request->user_name,
            'password'=> sha1($request->password),
            'image'=> $image_name,
            'role_id'=>3
        ]);
    }
    public function change(ChangeUserRequest $request, string $image_name, $user_id){
        $user_model = new User();
        $user = $user_model->find_user_by_id($user_id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->home_address = $request->home_address;
        $user->user_name = $request->user_name;
        $user->email_address = $request->email_address;
        $user->country_id = $request->country;
        $user->gender_id = $request->gender;
        $user->password = sha1($request->password);
        $user->image = $image_name;
        return $user->save();
    }
}

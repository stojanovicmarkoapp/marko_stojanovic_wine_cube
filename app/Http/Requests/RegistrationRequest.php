<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "first_name" => "bail|required|min:2|max:255|regex:/^[\p{Lu}][\p{L}'-]+([ ][\p{Lu}][\p{L}'-]+)*$/",
            "last_name" => "bail|required|min:2|max:255|regex:/^[\p{Lu}][\p{L}'-]+([ ][\p{Lu}][\p{L}'-]+)*$/",
            "home_address" => "bail|required|min:2|max:255",
            "country" => "bail|required|exists:countries,id",
            "gender" => "bail|required|exists:genders,id",
            "email_address" => "bail|required|regex:/^(?=.{6,30}@)[0-9\p{Ll}]+(?:\.[0-9\p{Ll}]+)*@[\p{Ll}0-9]{2,}(?:\.[\p{Ll}]{2,})+$/|unique:users,email_address",
            "user_name" => "bail|required|min:2|max:255|alpha_dash|unique:users,user_name",
            "password" => [
              'bail',
              'required',
               'alpha_dash',
                Password::min(12)
                ->letters()
                ->numbers()
                ->mixedCase(),
              'max:255'
            ],
            "confirm_password"=>'bail|required|same:password',
            "image"=> 'bail|image|mimes:jpg,png'
        ];
    }
    public function messages(){
        return [
            "first_name.regex"=>"First name has to begin with a capitalized letter and to be built from letters and optionally spaces, hyphens and/or apostrophes.",
            "last_name.regex"=>"Last name has to begin with a capitalized letter and to be built from letters and optionally spaces, hyphens and/or apostrophes."
        ];
    }
}

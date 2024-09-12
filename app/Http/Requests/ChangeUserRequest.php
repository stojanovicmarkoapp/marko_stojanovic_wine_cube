<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ChangeUserRequest extends FormRequest
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
            "first_name" => "bail|min:2|max:255|regex:/^[\p{Lu}][\p{L}'-]+([ ][\p{Lu}][\p{L}'-]+)*$/",
            "last_name" => "bail|min:2|max:255|regex:/^[\p{Lu}][\p{L}'-]+([ ][\p{Lu}][\p{L}'-]+)*$/",
            "home_address" => "bail|min:2|max:255",
            "country" => "bail|required|exists:countries,id",
            "gender" => "bail|required|exists:genders,id",
            "email_address" => "bail|regex:/^(?=.{6,30}@)[0-9\p{Ll}]+(?:\.[0-9\p{Ll}]+)*@[\p{Ll}0-9]{2,}(?:\.[\p{Ll}]{2,})+$/",
            "user_name" => "bail|min:2|max:255|alpha_dash",
            "password" => [
                'nullable',
                'alpha_dash',
                Password::min(12)
                    ->letters()
                    ->numbers()
                    ->mixedCase(),
                'max:255'
            ],
            "confirm_password"=>'same:password',
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

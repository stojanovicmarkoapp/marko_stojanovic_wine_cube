<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author(){
        return view("vistas.end_user.author");
    }
    public function documentation(){
        return response()->download(public_path('documentation.pdf'));
    }
}

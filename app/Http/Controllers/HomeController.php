<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends VistaController
{
    public function home(){
        $slide_model = new Slide();
        $slides = $slide_model->get_slides();
        return view("vistas.end_user.home",['slides'=>$slides]);
    }
}

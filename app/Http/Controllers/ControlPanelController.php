<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use Illuminate\Http\Request;

class ControlPanelController extends VistaController
{
    public function home(){
        return view("vistas.control_panel.home");
    }
    public function wines()
    {
        $wine_model = new Wine();
        $all_wines = $wine_model->get_all_wines();
        return view("vistas.control_panel.wines",['wines'=>$all_wines]);
    }
}

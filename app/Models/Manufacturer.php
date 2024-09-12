<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    public function wines(){
        return $this->hasMany(Wine::class);
    }
    public function get_all_manufacturers(){
        return Manufacturer::all();
    }
}

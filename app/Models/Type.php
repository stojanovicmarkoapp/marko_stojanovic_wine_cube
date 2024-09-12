<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    public function varieties(){
        return $this->hasMany(Variety::class);
    }
    public function get_all_types(){
        return Type::all();
    }
}

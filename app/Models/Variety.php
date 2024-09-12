<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    use HasFactory;
    public function wines(){
        return $this->hasMany(Wine::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }
}

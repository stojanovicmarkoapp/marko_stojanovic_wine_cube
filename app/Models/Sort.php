<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sort extends Model
{
    use HasFactory;
    public function ordering(){
        return $this->belongsTo(Ordering::class);
    }
    public function get_all_sorts(){
        return Sort::with(['ordering'])
            ->get();
    }
}

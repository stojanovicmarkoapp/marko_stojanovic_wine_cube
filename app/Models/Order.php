<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'wine_id',
        'customer_id',
        'price',
        'quantity',
        'paid'
    ];
    public function customer(){
        return $this->belongsTo(User::class,'customer_id');
    }
    public function wine(){
        return $this->belongsTo(Wine::class);
    }
    public function store_order($wine_id,$customer_id,$price,$number_of_items){
        return Order::create([
            'wine_id' => $wine_id,
            'customer_id' => $customer_id,
            'price' => $price,
            'quantity' => $number_of_items,
            'paid'=> false
        ]);
    }
    public function get_orders_by_customer_id($customer_id){
        return Order::where('customer_id',$customer_id)
            ->orderBy('id','desc')
            ->get();
    }
}

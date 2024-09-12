<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'wine_id',
        'customer_id',
        'quantity'
    ];
    public function customer(){
        return $this->belongsTo(User::class,'customer_id');
    }
    public function wine(){
        return $this->belongsTo(Wine::class);
    }
    public function find_item_by_features($wine_id,$customer_id){
        return Item::where([
            ['wine_id',$wine_id],
            ['customer_id',$customer_id]
        ])->first();
    }
    public function store_item($wine_id,$customer_id){
        return Item::create([
           'wine_id'=>$wine_id,
           'customer_id'=>$customer_id,
           'quantity'=>1
        ]);
    }
    public function find_item_by_id($item_id){
        return Item::find($item_id);
    }
    public function get_items_by_customer_id($customer_id){
        return Item::where('customer_id',$customer_id)
            ->orderBy('id','desc')
            ->get();
    }
    public function increase_quantity($item_id){
        $item = $this->find_item_by_id($item_id);
        $item->quantity++;
        return $item->save();
    }
    public function decrease_quantity($item_id){
        $item = $this->find_item_by_id($item_id);
        $item->quantity--;
        return $item->save();
    }
    public function destroy_item($item_id){
        return Item::destroy($item_id);
    }
}

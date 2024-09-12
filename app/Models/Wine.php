<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use http\Env\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * @method static paginate(int $int)
 */
class Wine extends Model
{
    use HasFactory;
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function variety(){
        return $this->belongsTo(Variety::class);
    }
    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }
    public function items(){
        return $this->hasMany(Item::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function get_all_wines(){
        return Wine
            ::with(['manufacturer','variety','reviews'])
            ->get();
    }
    public function get_one_wine($id){
        return Wine
            ::where('id',$id)
            ->first();
    }
    public function clean(Request $request,$sorts){
        $wines = Wine
            ::query()
        ->with(['manufacturer','variety']);
        if($request->has('search')&& trim($request->input('search'))!=""){
            $wines->where(DB::raw('upper(name)'),'like','%'.strtoupper(trim($request->input('search'))).'%');
        }
        if($request->has('unavailables') && $request->unavailables != 1){
            $wines->where('available','=',true);
        }
        if($request->has('max_price')){
            $wines->where('price','<=',$request->max_price);
        }
        if($request->has('label') && $request->label != 0){
            $wines->where('manufacturer_id','=',$request->label);
        }
        if($request->has('red_wines') && $request->red_wines==1){
            $wines->whereHas('variety.type',function($query){
               $query->where('id','=',1);
            });
        }
        if($request->has('white_wines') && $request->white_wines==1){
            $wines->whereHas('variety.type',function($query){
                $query->where('id','=',2);
            });
        }
        $chosen_sort = $sorts[0];
        if($request->has('sort')) {
            foreach ($sorts as $sort) {
                if ($sort->id == $request->sort) {
                    $chosen_sort = $sort;
                    break;
                }
            }
        }
        $wines->orderBy($chosen_sort->column,$chosen_sort->ordering->name);
        return $wines->paginate(4)->withQueryString();
    }
}

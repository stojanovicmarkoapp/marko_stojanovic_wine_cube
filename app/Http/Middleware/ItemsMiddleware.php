<?php

namespace App\Http\Middleware;


use App\Models\Item;
use Closure;
use Illuminate\Http\Request;

class ItemsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session("user") && session("user")->role->id!=1){
            $customer_id = session('user')->id;
            $item_model = new Item();
            $items = $item_model->get_items_by_customer_id($customer_id);
            if(session('items')){
                $request->session()->forget('items');
            }
            session(['items' => $items]);
        }
        return $next($request);
    }
}

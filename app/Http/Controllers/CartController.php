<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function put_one_item(Request $request){
        try{
            $wine_id = $request->wine_id;
            $customer_id = session('user')->id;
            $item_model = new Item();
            $number_of_items=1;
            $item = $item_model->find_item_by_features($wine_id,$customer_id);
            if($item){
                $item_id = $item->id;
                $item_model->increase_quantity($item_id);
                $number_of_items += $item->quantity;
                Log::info("Wine quantity in the cart has been increased!");
            }
            else {
                $item_model->store_item($wine_id,$customer_id);
                Log::info("Wine has been put into cart!");
            }
            $items = session('items');
            $total_number_of_items = 1;
            if($items){
                foreach($items as $item){
                    $total_number_of_items+= $item->quantity;
                }
            }
            return json_encode([
                'number_of_items'=>$number_of_items,
                'total_number_of_items' => $total_number_of_items
            ]);
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
    public function take_one_item(Request $request){
        try{
            $wine_id = $request->wine_id;
            $customer_id = session('user')->id;
            $item_model = new Item();
            $item = $item_model->find_item_by_features($wine_id,$customer_id);
            $item_id = $item->id;
            $number_of_items = $item->quantity;
            $number_of_items-=1;
            if($number_of_items>0){
                $item_model->decrease_quantity($item_id);
                Log::info("Wine quantity has been decreased!");
            }
            else {
                $item_model->destroy_item($item_id);
                Log::info("Wine has been taken out of the cart!");
            }
            $items = session('items');
            $total_number_of_items = -1;
            foreach($items as $item){
                    $total_number_of_items+= $item->quantity;
            }
            return json_encode([
                'number_of_items'=>$number_of_items,
                'total_number_of_items' => $total_number_of_items
            ]);
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
    public function take_all_items(Request $request){
        try{
            $wine_id = $request->wine_id;
            $customer_id = session('user')->id;
            $item_model = new Item();
            $item = $item_model->find_item_by_features($wine_id,$customer_id);
            $item_id = $item->id;
            $number_of_items = $item->quantity;
            $item_model->destroy_item($item_id);
            Log::info("Wine has been taken out of the cart!");
            $items = session('items');
            $total_number_of_items = 0;
            $total_number_of_items -=$number_of_items;
            foreach($items as $item){
                $total_number_of_items+= $item->quantity;
            }
            return json_encode([
                'total_number_of_items' => $total_number_of_items
            ]);
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
    public function buy(Request $request){
        try{
            $wine_id = $request->wine_id;
            $customer_id = session('user')->id;
            $item_model = new Item();
            $item = $item_model->find_item_by_features($wine_id,$customer_id);
            $number_of_items = $item->quantity;
            $price = $item->wine->price;
            $order_model = new Order();
            $order_model->store_order($wine_id,$customer_id,$price,$number_of_items);
            Log::info("Order has been placed!");
            $items = session('items');
            $total_number_of_items = 0;
            $total_number_of_items -=$number_of_items;
            foreach($items as $item){
                $total_number_of_items+= $item->quantity;
            }
            return json_encode([
                'total_number_of_items' => $total_number_of_items
            ]);
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
    public function get_checkout(Request $request)
    {
        try{
            $wine_id = $request->wine_id;
            $customer_id = session('user')->id;
            $item_model = new Item();
            $item = $item_model->get_items_by_customer_id($customer_id);
            $items = [];
            $wines = [];
            foreach ($item as $wine) {
                if ($wine->wine_id != $wine_id) {
                    $items[] = $wine;
                    $wines[] = $wine->wine;
                }
            }
            return json_encode([
                'items' => $items,
                'wines'=>$wines
            ]);
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
    public function get_orders()
    {
        try{
            $customer_id = session('user')->id;
            $order_model = new Order();
            $order = $order_model->get_orders_by_customer_id($customer_id);
            $wines = [];
            $purchases = [];
            foreach ($order as $wine) {
                $purchases[] = $wine;
                $wines[] = $wine->wine;
            }
            return json_encode([
                'orders' => $purchases,
                'wines'=>$wines
            ]);
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
}

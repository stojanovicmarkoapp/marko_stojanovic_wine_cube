<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Manufacturer;
use App\Models\Review;
use App\Models\Score;
use App\Models\Sort;
use App\Models\Type;
use App\Models\Variety;
use App\Models\Wine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WineController extends VistaController
{
    public function wines(Request $request)
    {
        try{
            $wine_model = new Wine();
            $type_model = new Type();
            $label_model = new Manufacturer();
            $labels = $label_model->get_all_manufacturers();
            $types = $type_model->get_all_types();
            $sort_model = new Sort();
            $all_sorts = $sort_model->get_all_sorts();
            $wines = $wine_model->clean($request,$all_sorts);
            if($request->ajax()){
                return json_encode(['wines'=>$wines,'sorts'=>$all_sorts,'types'=>$types,'labels'=>$labels]);
            }
            return view("vistas.end_user.wines",['wines'=>$wines,'sorts'=>$all_sorts,'types'=>$types,'labels'=>$labels]);
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
    public function wine($id)
    {
        try {
            $wine_model = new Wine();
            $wine = $wine_model->get_one_wine($id);
            $score_model = new Score();
            $all_scores = $score_model->get_all_scores();
            return view("vistas.end_user.wine", [
                'wine' => $wine,
                'scores' => $all_scores]);
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
    public function review(ReviewRequest $request){
        try{
            $critic_id = session('user')->id;
            $wine_id = $request->wine_id;
            $review_model = new Review();
            $critic_reviews= $review_model->get_reviews_by_critic_id($critic_id);
            foreach($critic_reviews as $critic_review){
                if($critic_review->wine_id==$wine_id){
                    $review_model->destroy_review($critic_review->id);
                }
            }
            $review_model->store_review($request,$critic_id);
            Log::info("Review has been added!");
            return json_encode(['message'=>'You have successfully added your review!']);
        }
        catch(\Exception $exception){
            Log::error($exception->getMessage()."\n".$exception->getTraceAsString()."\n".time());
        }
    }
}

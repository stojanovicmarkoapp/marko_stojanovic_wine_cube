<?php

namespace App\Models;

use App\Http\Requests\ReviewRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'wine_id',
        'critic_id',
        'comment',
        'score_id'
    ];
    public function wine()
    {
        return $this->belongsTo(Wine::class);
    }
    public function critic(){
        return $this->belongsTo(User::class,'critic_id');
    }
    public function score(){
        return $this->belongsTo(Score::class);
    }
    public function destroy_review($review_id){
        return Review::destroy($review_id);
    }
    public function store_review(ReviewRequest $request,$critic_id){
        return Review::create([
            'wine_id'=>$request->wine_id,
            'critic_id'=>$critic_id,
            'comment'=>$request->comment,
            'score_id'=>$request->score
        ]);
    }
    public function get_reviews_by_critic_id($critic_id){
        return Review::where('critic_id',$critic_id)
            ->get();
    }
}

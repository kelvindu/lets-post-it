<?php

namespace App;

//TODO: refactor the model class so that you won't have sepparate fillable, as you
// just see it's 100% nescesarry
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['user_id','category_id','title','body'];

    //one to many relations

    public function comments(){
      return $this->hasMany(Comment::class);
    }

    public function addComment($user_id, $body){
      $this->comments()->create(compact(['user_id','body']));
    }

    //many to one relations
    public function user(){
      return $this->belongsTo(User::class);
    }

    public function category(){
      return $this->belongsTo(Category::class);
    }
}

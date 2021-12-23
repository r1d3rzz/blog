<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // protected $with = ['author','category']; All Load N+1 problem

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){ //author->id
        return $this->belongsTo(User::class,'user_id');
    }
}

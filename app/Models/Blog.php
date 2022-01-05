<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, $filter){
        // $query = Blog::with('category','author')->latest();
        $query->when($filter['search']??false,function($query, $search) {
            $query->where('title','LIKE','%'.$search.'%')
                    ->orWhere('body','LIKE','%'.$search.'%');
        });
        // return $query->get();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){ //author->id
        return $this->belongsTo(User::class,'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['name','description','price','image','category_id'];

    public function category(){
//        dd('aslom');
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
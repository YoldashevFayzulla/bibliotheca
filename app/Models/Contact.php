<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=['name','number','massage','book_id'];


    public function post(){
        return $this->belongsTo(Post::class,    'book_id','id');
    }
}

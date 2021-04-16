<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'category', 'image'];

    public function getImageAttribute($value){

        if(isset($value)) {

            return asset('storage/' . $value );
    
        } else {

            return asset('/images/default-image.jpg');
        }
        
    }
}

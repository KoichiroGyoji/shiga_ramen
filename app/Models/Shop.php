<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    
    public function images()
    {
        return $this->hasMany(Image::class); 
    }
    
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class); 
    }
}


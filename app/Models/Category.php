<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends= [
        'parent',
    ];

//    One to many
    public function car(){
        return $this->hasMany(Cars::class);
    }
// EVERY CATEGORY HAS JUST ONE PARENT
    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }

// EVERY CATEGORY HAS MORE THEN ONE CHİLDREN
    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'IP',
        'subject',
        'review',
        'rate',
    ];

    public function car(){
        return $this->belongsTo(Cars::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

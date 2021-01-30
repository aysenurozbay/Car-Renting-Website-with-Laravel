<?php

namespace App\Models;

use App\Http\Livewire\Rewiew;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function reviews(){
        return $this->hasMany(Rewiew::class);
    }

}

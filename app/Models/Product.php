<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    #One to Many (Inverse) / Belongs to
    public function category (){
        return $this->belongsTo(Category::class);
    }
}

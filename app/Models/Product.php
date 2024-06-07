<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
       protected $fillable = ['name', 'slug', 'description', 'thumb', 'price', 'available', 'brand_id'];
    
        public function brand() {
            return $this->belongsTo(Brand::class);
        }

}

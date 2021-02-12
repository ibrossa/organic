<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }

    public function product_review()
    {
        return $this->hasMany(ProductReview::class, 'product_id');
    }

}

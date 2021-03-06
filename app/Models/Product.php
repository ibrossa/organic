<?php

namespace App\Models;

use App\Traits\HasDefaultScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasDefaultScopes;


    public function product_review()
    {
        return $this->hasMany(ProductReview::class, 'product_id');
    }

}

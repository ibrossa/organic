<?php

namespace App\Models;

use App\Traits\HasDefaultScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Blog
 * @package App\Models
 * @mixin HasDefaultScopes
 */
class Blog extends Model
{
    use HasFactory;
    use HasDefaultScopes;


    public function blog_comments()
    {
        return $this->hasMany(BlogComment::class, 'blog_id');
    }
}

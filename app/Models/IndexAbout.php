<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexAbout extends Model
{
    use HasFactory;

    public function scopeOrdered($query, $d){
        $query->orderby('created_at', $d);
    }
}

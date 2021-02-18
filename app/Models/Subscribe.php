<?php

namespace App\Models;

use App\Mail\Email;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Self_;

class Subscribe extends Model
{
    use HasFactory;
    protected $guarded = [
    ];


}

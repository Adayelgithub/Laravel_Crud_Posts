<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; /* traits */

   // protected $table = "mis_post";
    protected $fillable = ['title', 'body', 'image'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primarykey = 'idpost';
    protected $incrementing = 'true';
    protected $fillable =[
        'author',
        'title',
        'description',
        'category'
    ];
}

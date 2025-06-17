<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $table = 'topics';
    protected $primarykey = 'idtopic';
    protected $incrementing = 'true';
    protected $fillable =[
        'content',
        'author',
        'topic_id',
    ];
}

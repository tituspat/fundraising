<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    
    use SoftDeletes;
 
    protected $table = "news";
    protected $dates = ['deleted_at'];



    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'url',
        'is_expired',
        'is_previewed'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

        /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'category',
        'thumbnail',
        'is_previewed',
        'created_by',
        'meta_desc',
    ];
}

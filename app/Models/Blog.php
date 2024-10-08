<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Blog extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = "blogs";
    protected $dates = ['deleted_at'];


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

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];



    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ref_blog_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category',
    ];

    /**
     * Get the users for the role.
     */
    public function users()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory;
    use SoftDeletes;
 
    protected $table = "programs";
    protected $dates = ['deleted_at'];


    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'gambar',
        'description',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

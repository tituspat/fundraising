<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

       /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

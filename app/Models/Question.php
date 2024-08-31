<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory;
    use SoftDeletes;
 
    protected $dates = ['deleted_at'];
    protected $table = 'questions';

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'origin',
        'question',
    ];
    // protected $dates = ['created_at', 'updated_at'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
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

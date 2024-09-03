<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
 
    protected $table = "contents";

        /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'jumbotron_title',
        'logo',
        'jumbotron_subtitle',
        'profile_title',
        'program_title',
        'support_text',
        'email_title',
    ];
}

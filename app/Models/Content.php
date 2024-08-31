<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    use SoftDeletes;
 
    protected $table = "contents";
    protected $dates = ['deleted_at'];

        /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'jumbotron_title',
        'Jumbotron_subtitle',
        'profile_title',
        'program_title',
        'support_text',
        'email_title',
    ];
}

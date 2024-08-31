<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileCalon extends Model
{
    use HasFactory;

    use SoftDeletes;
 
    protected $table = "profile_calons";
    protected $dates = ['deleted_at'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_calon',
        'visi',
        'misi',
        'profile',
    ];
}

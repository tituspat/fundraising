<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;
 
    protected $dates = ['deleted_at'];



    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ref_user_roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role',
    ];

    /**
     * Get the users for the role.
     */
    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}

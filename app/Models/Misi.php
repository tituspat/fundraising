<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Misi extends Model
{
    use HasFactory;
    
    
    use SoftDeletes;
 
    protected $table = "Misis";
    protected $dates = ['deleted_at'];

    

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'head_misi',
        'body_misi',
    ];

    public function profileCalon()
    {
        return $this->belongsTo(ProfileCalon::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    //
    protected $fillable = [
        'user_id', 'stuff_id'
    ];
    
    public $timestamps = true;
}

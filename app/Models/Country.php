<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'code', 'name', 'created_at', 'updated_at'
    ];
    
    public $timestamps = false;

    public function provinces()
    {
        return $this->hasMany('App\Models\Province');
    }
}
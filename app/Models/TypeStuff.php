<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeStuff extends Model
{
    //
    protected $fillable = [
        'code', 'name'
    ];

    // Name of table must be set plural and snake_case
    protected $table = 'types_stuff';
    
    public $timestamps = true;

    /**
     * Get the stuffs for the type stuff.
     */
    public function stuffs()
    {
        return $this->hasMany('App\Models\Stuff');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    //
    protected $fillable = [
        'name', 'stock', 'price', 'type_stuff_id'
    ];
    
    public $timestamps = true;

    /**
     * Get the type_stuff for the stuff.
     */
    public function type_stuff()
    {
        return $this->belongsTo('App\Models\TypeStuff');
    }
}
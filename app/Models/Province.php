<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'code', 'name', 'country_id'
    ];
    
    public $timestamps = true;

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function suppliers()
    {
        return $this->hasMany('App\Models\Supplier');
    }
}
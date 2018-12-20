<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'is_active', 'name', 'address', 'phone', 'email', 'province_id'
    ];
    
    public $timestamps = true;

    public function province()
    {
        return $this->BelongsTo('App\Models\Province');
    }
}
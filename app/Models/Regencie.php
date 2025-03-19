<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regencie extends Model
{
    protected $fillable = ['nama', 'province_id'];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
}

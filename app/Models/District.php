<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['name', 'regencie_id'];

    public function wilayah()
    {
        return $this->belongsTo(Regencie::class, 'regencie_id');
    }
}

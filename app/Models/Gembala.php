<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gembala extends Model
{
    protected $fillable = ['kode', 'nama', 'gelar_depan', 'gelar_belakang', 'tgl_lahir', 'tempat_lahir', 'tgl_peneguhan', 'nik_ktp', 'alamat_ktp', 'alamat_tinggal', 'province_id', 'wilayah_id', 'kecamatan_id', 'jk', 'no_hp', 'no_wa', 'email', 'hobi', 'status_menikah', 'tgl_nikah', 'nama_istri'];

    // Relationships
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function wilayah()
    {
        return $this->belongsTo(Regencie::class, 'wilayah_id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(District::class, 'kecamatan_id');
    }
}

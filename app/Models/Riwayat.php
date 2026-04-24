<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table = 'riwayat';

    protected $fillable = [
        'user_id',
        'nama','alamat','pekerjaan',
        'jk','usia','tb','bb',
        'sistolik','diastolik','nadi','pernapasan',
        'hasil'
    ];

    public function riwayat()
    {
        return $this->hasMany(\App\Models\Riwayat::class);
    }
}

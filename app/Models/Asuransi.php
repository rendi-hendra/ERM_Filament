<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asuransi extends Model
{
    protected $fillable = [
        'nama_asuransi',
        'no_kontak',
        'alamat',
    ];


    public function asuransiPasien()
    {
        return $this->hasMany(AsuransiPasien::class);
    }
}

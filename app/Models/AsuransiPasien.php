<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsuransiPasien extends Model
{
    protected $fillable = [
        'pasien_id',
        'asuransi_id',
        'no_kartu',
        'aktif',
    ];


    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function asuransi()
    {
        return $this->belongsTo(Asuransi::class);
    }

    // public function asuransiPasien()
    // {
    //     return $this->hasOne(AsuransiPasien::class);
    // }
}

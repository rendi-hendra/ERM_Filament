<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $fillable = [
        'pasien_id',
        'tanggal_kunjungan',
        'keluhan',
        'dokter_id',
        'metode_pembayaran',
        'asuransi_pasien_id'
    ];


    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function asuransi()
    {
        return $this->belongsTo(Asuransi::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function asuransiPasien()
    {
        return $this->belongsTo(AsuransiPasien::class);
    }
}

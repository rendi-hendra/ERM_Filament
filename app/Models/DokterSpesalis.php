<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokterSpesalis extends Model
{
    protected $fillable = [
        'dokter_id',
        'spesalis_id'
    ];


    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function spesalis()
    {
        return $this->belongsTo(Spesalis::class);
    }
}

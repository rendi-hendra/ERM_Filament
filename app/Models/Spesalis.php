<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spesalis extends Model
{
    protected $fillable = [
        'nama',
    ];



    public function dokterSpesalis()
    {
        return $this->hasMany(DokterSpesalis::class);
    }
}

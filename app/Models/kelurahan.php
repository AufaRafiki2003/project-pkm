<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kel';

    protected $fillable=[
        'nama_kel',
        'id_kec',
    ];

    public function tpsuaras()
    {
        return $this->hasMany(Tpsuara::class, 'id_kel');
    }

    public function rekap_suara_partais()
    {
        return $this->hasMany(Rekap_suara_partai::class, 'id_kel');
    }

    public function rekap_suara_calegs()
    {
        return $this->hasMany(Rekap_suara_caleg::class, 'id_kel');
    }

    public function kecamatans()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kec');
    }

}
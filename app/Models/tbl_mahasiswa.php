<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_mahasiswa extends Model
{
    use HasFactory;

    protected $fillable=[
        'nim',
        'tpt_lahir',
        'tgl_lahir',
        'jk',
        'id_agama',
        'id_stskawin',
        'sts_kerja',
        'gol_darah',
        'sts_wni',
        'id_negara',
        'id_wilayah',
        'alamat',
        'kode_pos',
        'no_hp',
        'email_backup',
        'identitas_jenis',
        'id_agama',
        'id_agama',
    ];
}

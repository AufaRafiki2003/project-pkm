<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_bank extends Model
{
    use HasFactory;
    protected $table = 'tbl_bank';
    protected $primarykey = 'id_bank';

    protected $fillable=[
        'id_bank','kode_bank','nama_bank','no_rekening','token','is_digunakan','kode',
    ];
}

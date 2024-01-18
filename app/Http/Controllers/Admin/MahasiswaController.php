<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tbl_mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $tbl_mahasiswas = tbl_mahasiswa::latest()->when(request()->q, function($tbl_mahasiswas){
            $tbl_mahasiswas = $tbl_mahasiswas->where ("nama", "like", "%". request()->q ."%");
       })->paginate(10);
       return view("admin.mahasiswa.index", compact("$tbl_mahasiswas"));
    }
}

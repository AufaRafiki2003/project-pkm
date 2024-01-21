<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tbl_bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index(){
        $banks = tbl_bank::latest()->when(request()->q, function($banks){
            $banks = $banks->where ("nama", "like", "%". request()->q ."%");
       })->paginate(10);
       return view("admin.bank.index", compact("banks"));
    }
}

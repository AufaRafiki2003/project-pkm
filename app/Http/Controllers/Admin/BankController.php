<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tbl_bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index(){
        $banks = tbl_bank::all();
       return view("admin.bank.index", compact("banks"));
    }
}

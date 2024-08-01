<?php

namespace App\Http\Controllers;

use App\Models\add_account_model;
use App\Models\customer;
use App\Models\orderTo;
use App\Models\uom;
use App\Models\users;
use Illuminate\Http\Request;


class orderDiarycontroller extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
    public function master(Request $request)
    {
        return view('master');
    }
    public function payment()
    {
        return view('payment');
    }

    public function report()
    {
        return view('report');
    }

}

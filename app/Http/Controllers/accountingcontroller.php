<?php

namespace App\Http\Controllers;

use App\Models\add_account_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\AddAccount;
use App\Models\Category;
use App\Models\Payee;
use App\Models\PayeeCategory;
use App\Models\PaymentCategory;
use App\Models\tocategorys;
use Illuminate\Contracts\View\View;
use Nette\Utils\Json;

class accountingcontroller extends Controller
{

    public function index(Request $request)
    {
        $payeeCategorysData = PayeeCategory::all();
        $category = Category::all();
        $paymentCategory = paymentCategory::all();
        $toCatecorys = tocategorys::all();

        $account = AddAccount::all();
        $getData = Payee::with(['payeeCategories', 'categories', 'paymentMethods', 'toCategorys'])->get();
        return view('index', compact('payeeCategorysData', 'toCatecorys', 'category', 'paymentCategory', 'account', 'getData'));
    }

    public function master()
    {
        return view('master');
    }

    public function payment()
    {
        return view('payment');
    }
}

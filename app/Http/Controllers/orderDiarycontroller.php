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
        $orderFatch = orderTo::all();
        $customerFatch = customer::all();
        $userFatch = users::all();
        $uomFatch = uom::all();
        return view('master',compact('orderFatch','customerFatch','userFatch','uomFatch'));
    }

    public function orderTo(Request $request)
    {
        $categories = $request->input('category-group', []);
        foreach ($categories as $category) {
            orderTo::create([
                'name' => $category['name'],
                'number' => $category['number'],
            ]);
        }
        return redirect()->route('master');
    }

    public function customer(Request $request)
    {
        $customer = $request->input('category-group', []);
        foreach ($customer as $category) {
            customer::create([
                'name' => $category['name'],
                'address' => $category['address'],
            ]);
        }
        return redirect()->route('master');
    }

    public function user(Request $request)
    {
        $user = $request->input('category-group', []);
        foreach ($user as $category) {
            users::create([
                'name' => $category['name'],
                'Office_Vender' => $category['Office_Vender'],
            ]);
        }
        return redirect()->route('master');
    }

    public function uom(Request $request)
    {
        $uom = $request->input('category-group', []);
        foreach ($uom as $category) {
            uom::create([
                'uom' => $category['uom'],
            ]);
        }
        return redirect()->route('master');
    }


    public function payment()
    {
        return view('payment');
    }


}

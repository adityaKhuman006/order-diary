<?php

namespace App\Http\Controllers;

use App\Models\add_account_model;
use App\Models\customer;
use App\Models\orderTo;
use App\Models\uom;
use App\Models\masterUsers;
use Illuminate\Http\Request;
use Illuminate\Tests\Integration\Queue\Order;


class orderDiarycontroller extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function masterUser(Request $request)
    {
        return view('master.user');
    }

    public function masterUom(Request $request)
    {
        return view('master.uom');
    }

    public function masterOrder(Request $request)
    {
        $data = orderTo::all();
            return view('master.order',compact('data'));
    }

    public function masterCustomer(Request $request)
    {
        return view('master.customer');
    }

    public function createCustomer(Request $request){
        $data =  $request->all();

        foreach ($data['category-group'] as $item){
            customer::create([
                "name"=>$item['name'],
                "address"=>$item['address']
            ]);
        }

        return redirect()->route('master.customer');
    }

    public function createOrder(Request $request){
        $data =  $request->all();

        foreach ($data['category-group'] as $item){
            orderTo::create([
                "name"=>$item['name'],
                "number"=>$item['number']
            ]);
        }

        return redirect()->route('master.order');
    }

    public function createUom(Request $request){
        $data =  $request->all();

        foreach ($data['category-group'] as $item){
            uom::create([
                "name"=>$item['name'],
            ]);
        }

        return redirect()->route('master.uom');

    }

    public function createUser(Request $request){
        $data =  $request->all();

        foreach ($data['category-group'] as $item){
            masterUsers::create([
                "name"=>$item['name'],
                "type"=>$item['type']
            ]);
        }

        return redirect()->route('master.User');
    }


    public function payment()
    {
        return view('payment');
    }

    public function report()
    {
        return view('report');
    }

    public function updateOrderName(Request $request)
    {
        $data = $request->all();
        orderTo::where('id',$data['id'])->update(['name'=>$data['name']]);
        return response()->json(['success'=>'true'],201);
    }

    public function updateOrderNumber(Request $request)
    {
        $data = $request->all();
        orderTo::where('id',$data['id'])->update(['number'=>$data['number']]);
        return response()->json(['success'=>'true'],201);
    }

    public function deleteOrder(Request $request)
    {
        $data = $request->all();
        orderTo::where('id',$data['id'])->delete();
        return response()->json(['success'=>'true'],201);
    }
}

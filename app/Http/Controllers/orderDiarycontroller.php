<?php

namespace App\Http\Controllers;

use App\Models\add_account_model;
use App\Models\addUsers;
use App\Models\Belt;
use App\Models\customer;
use App\Models\orderTo;
use App\Models\uom;
use App\Models\masterUsers;
use App\Models\tbOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Tests\Integration\Queue\Order;


class orderDiarycontroller extends Controller
{
    public function index(Request $request)
    {
        $order = orderTo::all();
        $customer = customer::all();
        $belt = Belt::all();
        $uom = uom::all();
        return view('index', compact('order', 'customer', 'belt', 'uom'));
    }

    public function tableOrder(Request $request)
    {

        $attach_doc_file = '';
        $doc_attached_file = '';

        if ($request->hasFile('attach_doc_file')) {
            $file = $request->file('attach_doc_file');
            $destinationPath = 'public/img/';
            $attach_doc_file = $file->getClientOriginalName();
            $file->move($destinationPath, $attach_doc_file);
        }

        if ($request->hasFile('doc_attached_file')) {
            $file = $request->file('doc_attached_file');
            $destinationPath = 'public/img/';
            $doc_attached_file = $file->getClientOriginalName();
            $file->move($destinationPath, $doc_attached_file);
        }

        tbOrder::create([
            "customer_name" => $request->customer_name,
            "date" => $request->date,
            "order_given_by" => $request->order_given_by,
            "order_select" => $request->order_select,
            "order_no" => $request->order_no,
            "belt_select" => $request->belt_select,
            "quantity" => $request->quantity,
            "description" => $request->description,
            "uom_select" => $request->uom_select,
            "rate" => $request->rate,
            "amount" => $request->amount,
            "attach_doc_file" => $attach_doc_file,
            "remark_vender" => $request->remark_vender,
            "order_priority" => $request->order_priority,
            "wight_belt" => $request->wight_belt,
            "packing_size_belt" => $request->packing_size_belt,
            "packing_charges" => $request->packing_charges,
            "transportaion_charges" => $request->transportaion_charges,
            "doc_attached_file" => $doc_attached_file,
            "tentaive_delevery_date" => $request->tentaive_delevery_date,
            "delevery_date" => $request->delevery_date,
        ]);

        return redirect()->route('index');
    }



    public function masterbelt(Request $request)
    {
        $beltData = Belt::all();
        return view('master.belt', compact('beltData'));
    }

    public function masterUser(Request $request)
    {
        $UserData = masterUsers::all();
        return view('master.user', compact('UserData'));
    }

    public function masterUom(Request $request)
    {
        $uomData = uom::all();
        return view('master.uom', compact('uomData'));
    }

    public function masterOrder(Request $request)
    {
        $data = orderTo::all();
        return view('master.order', compact('data'));
    }

    public function masterCustomer(Request $request)
    {
        $CustomData = customer::all();
        return view('master.customer', compact('CustomData'));
    }

    public function createCustomer(Request $request)
    {
        $data =  $request->all();

        foreach ($data['category-group'] as $item) {
            customer::create([
                "name" => $item['name'],
                "address" => $item['address']
            ]);
        }

        return redirect()->route('master.customer');
    }

    public function createOrder(Request $request)
    {
        $data =  $request->all();

        foreach ($data['category-group'] as $item) {
            orderTo::create([
                "name" => $item['name'],
                "number" => $item['number']
            ]);
        }

        return redirect()->route('master.order');
    }

    public function createUom(Request $request)
    {
        $data =  $request->all();

        foreach ($data['category-group'] as $item) {
            uom::create([
                "uom" => $item['uom'],
            ]);
        }

        return redirect()->route('master.uom');
    }

    public function createUser(Request $request)
    {
        $data =  $request->all();

        foreach ($data['category-group'] as $item) {
            masterUsers::create([
                "name" => $item['name'],
                "type" => $item['type']
            ]);
        }

        return redirect()->route('master.User');
    }

    public function createBelt(Request $request)
    {
        $data =  $request->all();

        foreach ($data['category-group'] as $item) {
            Belt::create([
                "name" => $item['name'],
            ]);
        }

        return redirect()->route('master.belt');
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
        orderTo::where('id', $data['id'])->update(['name' => $data['name'] ?? '']);
        return response()->json(['success' => 'true'], 201);
    }

    public function updateOrderNumber(Request $request)
    {
        $data = $request->all();
        orderTo::where('id', $data['id'])->update(['number' => $data['number']  ?? '']);
        return response()->json(['success' => 'true'], 201);
    }

    public function deleteOrder(Request $request)
    {
        $data = $request->all();
        orderTo::where('id', $data['id'])->delete();
        return response()->json(['success' => 'true'], 201);
    }




    public function updateCustomerName(Request $request)
    {
        $data = $request->all();
        customer::where('id', $data['id'])->update(['name' => $data['name']  ?? '']);
        return response()->json(['success' => 'true'], 201);
    }

    public function updateCustomeraddress(Request $request)
    {
        $data = $request->all();
        customer::where('id', $data['id'])->update(['address' => $data['address'] ?? '']);
        return response()->json(['success' => 'true'], 201);
    }

    public function deleteCustomer(Request $request)
    {
        $data = $request->all();
        customer::where('id', $data['id'])->delete();
        return response()->json(['success' => 'true'], 201);
    }



    public function updateuom(Request $request)
    {
        $data = $request->all();
        uom::where('id', $data['id'])->update(['uom' => $data['uom'] ?? '']);
        return response()->json(['success' => 'true'], 201);
    }

    public function deleteuom(Request $request)
    {
        $data = $request->all();
        uom::where('id', $data['id'])->delete();
        return response()->json(['success' => 'true'], 201);
    }



    public function updateuserName(Request $request)
    {
        $data = $request->all();
        masterUsers::where('id', $data['id'])->update(['name' => $data['name'] ?? '']);
        return response()->json(['success' => 'true'], 201);
    }

    public function updateusertype(Request $request)
    {
        $data = $request->all();
        masterUsers::where('id', $data['id'])->update(['type' => $data['type'] ?? '']);
        return response()->json(['success' => 'true'], 201);
    }

    public function deleteuser(Request $request)
    {
        $data = $request->all();
        masterUsers::where('id', $data['id'])->delete();
        return response()->json(['success' => 'true'], 201);
    }



    public function updateBelt(Request $request)
    {
        $data = $request->all();
        Belt::where('id', $data['id'])->update(['name' => $data['name'] ?? '']);
        return response()->json(['success' => 'true'], 201);
    }

    public function deleteBelt(Request $request)
    {
        $data = $request->all();
        Belt::where('id', $data['id'])->delete();
        return response()->json(['success' => 'true'], 201);
    }



    public function users(Request  $request)
    {
        $Item = User::all();
        return view('users', compact('Item'));
    }

    public function usersCreate(Request  $request)
    {
        return view('users-create');
    }

    public function usersAdd(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users');
    }

    public function usersUpdate(Request $request)
    {
        $user = User::findOrFail($request->id);
        return view('users-update', compact('user'));
    }

    public function usersUpdateData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::findOrFail($request->id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users');
    }
}

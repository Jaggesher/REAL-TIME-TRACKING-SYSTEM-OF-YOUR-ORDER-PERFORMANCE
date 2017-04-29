<?php

namespace App\Http\Controllers;

use App\ordertoship_marchant;
use Illuminate\Http\Request;

class OrderToShipPackingController extends Controller
{
    public function show(Request $request)
    {
        $id = $request->session()->get('id');
        $db = ordertoship_marchant::where('id', '=', $id)->get();

        $items = [
            "id" => $id,
            "buyer" => $request->session()->get('buyer'),
            "orderNo" => $request->session()->get('orderNo'),
            "color" => $request->session()->get('color'),
            "item" => $request->session()->get('item'),
        ];

        return view('Order to ship.packing')->with('items', $items)->with('db', $db);
    }

    public function updateOrderQuantity(Request $request)
    {
        $id = $request->session()->get('id');

        if ($request["hiddenMerchantID"] != "" && $request["updatePackingReceive"] != "") {
            ordertoship_marchant::where('marchant_id', '=', $request["hiddenMerchantID"])->update(['PackingReceive' => $request["updatePackingReceive"]]);

        }


        return redirect('/order-to-ship/packing');
    }
}
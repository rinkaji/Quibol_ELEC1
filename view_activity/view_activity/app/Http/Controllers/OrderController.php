<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewCustomer($id, $name, $address){
        return view('customer', compact('id','name','address'));
    }
    public function viewItem($itemNo, $itemName, $price){
        return view('item', compact('itemNo','itemName','price'));
    }
    public function viewOrder($customerId, $orderName, $orderNo, $date){
        return view('order', compact('customerId','orderName','orderNo','date'));
    }
    public function viewOrderDetails($transNo, $orderNo, $item,$id,$name,$price,$qty){
        return view('orderDetails', compact('transNo','orderNo','item','id','name','price','qty'));
    }
}

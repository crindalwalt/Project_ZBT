<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['orders'] = Order::all();
        $data['pending_orders'] = Order::where("delivery_status","pending")->get();
        $data['completed_orders'] = Order::where('delivery_status','approved')->get();
        return view("pages.admin.orders.orders_all")->with($data);
    }
    public function dispatch(Order $order){
        $order->update([
            "delivery_status" =>  "dispatched",
        ]);
        Alert::success("Order has been Dispatched ","User will view order tracking on his dashboard");
        return redirect()->back();
    }
    public function cancel(Order $order){
        $order->update([
            "delivery_status" =>  "cancelled",
        ]);
        Alert::success("Order has been Cancelled ","Remember to refund the customer from Stripe also");
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $data['order'] = $order;
        return view("pages.admin.orders.order_detail")->with($data);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}

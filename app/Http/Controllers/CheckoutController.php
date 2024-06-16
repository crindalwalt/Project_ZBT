<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserAddressRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use RealRashid\SweetAlert\Facades\Alert;


class CheckoutController extends Controller
{


    public function checkout_save(StoreUserAddressRequest $request)
    {
        $address = auth()->user()->address()->create([
            'line_1' => $request->biling_line_1,
            'line_2' => $request->biling_line_2,
            'country' => $request->country,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
        ]);
        $key = $address->getKey();
//        $this->setAddressKey($key);
//        $key2 = $this->getAddressKey();
//        dd($key2);
//        dd($this->addressId);
        $data['address_id'] = $key;
//        dd($data);
        return redirect()->route("checkout.create")->with($data);
    }

    public function createCheckoutSession(Request $request)
    {
        $address_key = $request->session()->get("address_id");
//        dd($address_key);
        $total_price = 0;
        $lineItems = [];
        $cartItems = auth()->user()->cart->items;
        $orderId = auth()->user()->order()->create([
            'user_address_id' => $address_key,
            "delivery_status" => "pending",
            "payment_status" => "pending",
            "total_value" => "0"
        ]);

        foreach ($cartItems as $item) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $item->product->title,
                    ],
                    'unit_amount' => $item->product->discount_price * 100, // assuming price is in dollars
                ],
                'quantity' => $item->quantity,
            ];
            $orderId->details()->create([
                "product_id" => $item->product_id,
                "quantity" => $item->quantity,
                "price" => $item->product->discount_price,
            ]);
            $total_price += $item->product->discount_price * $item->quantity;
        }
        $orderId->update(["total_value" => $total_price]);


        # Stripe payload
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('checkout.success', ['order_id' => $orderId->getKey()]),
            'cancel_url' => route('checkout.cancel'),
        ]);

        return redirect($session->url);
    }

    public function success(Request $request)
    {
//        dd($request->all());
        $order = Order::find($request->order_id);
        $order->update(["payment_status" => "approved"]);
//        auth()->user()->cart->items->delete();
        Alert::success("success", "Your order has been placed successfully . keep checking the order status in your acccount page");
        return redirect()->route("account");
    }

    public function cancel()
    {
        Alert::danger("Warning", "We could not process your order at this moment . please try later");
        return redirect()->back();
    }
}

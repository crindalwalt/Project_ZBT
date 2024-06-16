<?php

namespace App\Livewire;

use App\Models\CartItem;
use Livewire\Component;

class CartBox extends Component
{


    public function removeCartItem($cartItemId)
    {
        $cartItem = CartItem::find($cartItemId);
        $cartItem->delete();


    }

    public function totalPrice()
    {
        $totalprice = 0;

        if (isset(auth()->user()->cart)) {
            $totalItems = auth()->user()->cart->items;
            foreach ($totalItems as $item) {
                $totalprice += $item->product->discount_price * $item->quantity;
            }
        }


        return $totalprice;
    }

    public function render()

    {
        if (auth()->check()) {
//            dd(auth()->user()->cart);
//            $hasCart = auth()->user()->cart)
            return view('livewire.cart-box')->with([

                'cart' => auth()->user()->cart,
                'total' => $this->totalPrice(),
            ]);
        }

        return '<div class="container my-2 alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Hello User!</strong> Register yourself as a user to enjoy the seemless experience.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
}

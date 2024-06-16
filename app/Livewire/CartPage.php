<?php

namespace App\Livewire;

use App\Models\CartItem;
use App\Models\Product;
use Livewire\Component;

class CartPage extends Component
{

    public $cartItems = [];

    public function mount()
    {
        // Initialize cart items (this could be fetched from a database or session)
        $this->cartItems = auth()->user()->cart->items->toArray();
    }

    public function incrementQuantity($itemId)
    {
        $cart_item = CartItem::find($itemId);
        $cart_item->update(["quantity" => $cart_item->quantity + 1]);
//        $cart_item['quantity'] += 1;
//        dd($cart_item);
//
//        dd($cart_item->quantity);
//        $cart_item->quantity
//        foreach ($this->cartItems as &$item) {
//            if ($item['id'] == $itemId) {
////                dd($item);
//                $item['quantity']++;
//                break;
//            }
//        }
    }

    public function decrementQuantity($itemId)
    {
        $cart_item = CartItem::find($itemId);
        if($cart_item->quantity > 0){
            $cart_item->update(["quantity" => $cart_item->quantity - 1]);
        }
        if($cart_item->quantity == 0){
            $cart_item->delete();
        }
    }

    public function getTotalAmount()
    {
        return array_reduce(auth()->user()->cart->items->toArray(), function ($carry, $item) {
            $product = Product::find($item["product_id"])->toArray();
            return $carry + ($item["quantity"] * $product["discount_price"]);
        }, 0);
    }


//    public $productsArray = [];
    public function totalPerProduct($productId)
    {
        $item = CartItem::find($productId);
        return $item->product->discount_price * $item->quantity;
    }

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
        if (!auth()->check()) {
            return redirect()->route("login");
        }

        $cart = auth()->user()->cart;

        return view('livewire.cart-page')->with([
            "cart" => $cart,
            'total' => $this->getTotalAmount(),
        ]);
    }
}

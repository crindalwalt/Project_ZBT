<div>
    <!-- Start Cart Dropdown -->
    <div class="rbt-cart-side-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="title">
                        <h4 class="title mb--0">Your shopping cart</h4>
                    </div>
                    <div class="rbt-btn-close" id="btn_sideNavClose">
                        <button class="minicart-close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
            </div>
            @if(isset($cart))
                <nav class="side-nav w-100">
                    <ul class="rbt-minicart-wrapper">


                        @if($cart)
                            @foreach($cart->items as $item)
                                <li class="minicart-item">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="{{ asset($item->product->media[0]->image) }}" alt="Product Images">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <h6 class="title"><a
                                                href="{{ route("product.detail", $item->product->slug) }}">{{ $item->product->title }}</a>
                                        </h6>

                                        <span class="quantity">{{$item->quantity}} * <span
                                                class="price">${{$item->product->discount_price}}</span></span>
                                    </div>
                                    <div class="close-btn">
                                        <button wire:click="removeCartItem({{$item->id}})" class="rbt-round-btn"><i
                                                class="feather-x"></i></button>
                                    </div>

                                </li>
                            @endforeach
                        @endif

                    </ul>
                </nav>

                <div class="rbt-minicart-footer">
                    <hr class="mb--0">
                    <div class="rbt-cart-subttotal">
                        <p class="subtotal"><strong>Subtotal:</strong></p>


                        <p class="price">${{ $total }}</p>


                    </div>
                    <hr class="mb--0">
                    <div class="rbt-minicart-bottom mt--20">

                        <div class="checkout-btn mt--20">
                            <a class="rbt-btn btn-gradient icon-hover w-100 text-center" href="{{ route("cart") }}">
                                <span class="btn-text">View Cart</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Cart is Empty! </strong> <a href="{{ route("products")}}">click here</a> to browse some valuable items
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    <!-- End Cart Dropdown -->
    <a class="close_side_menu" href="javascript:void(0);"></a>
</div>
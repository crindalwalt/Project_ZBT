<div class="col-12">
    <span>
{{--        @dd($cart)--}}
        <!-- Cart Table -->
        <style>
            .inc_button{
                width: 30px;
                height: 30px;
                background-color: #efefef;
                border: 1px solid gray;
                color: black;
                border-radius: 50%;
                /*display: flex;*/
                /*flex-direction: column;*/
                /*justify-content: center;*/
                /*align-items: center;*/

            }
        </style>
        <div class="cart-table table-responsive mb--60">
            <table class="table">
                <thead>
                <tr>
                    <th class="pro-thumbnail">Image</th>
                    <th class="pro-title">Product</th>
                    <th class="pro-price">Price</th>
                    <th class="pro-quantity">Quantity</th>
                    <th class="pro-subtotal">Total</th>
                    <th class="pro-remove">Remove</th>
                </tr>
                </thead>
                <tbody>
                @if($cart)
                    @foreach($cart->items as $item)
                        <tr>
                            <td class="pro-thumbnail"><a
                                    href="{{ route("product.detail",$item->product->slug) }}"><img
                                        src="{{ asset($item->product->media[0]->image) }}"
                                        alt="Product"></a></td>
                            <td class="pro-title"><a href="#">{{ $item->product->title }}</a></td>
                            <td class="pro-price"><span>${{ $item->product->discount_price }}</span>
                            </td>
                            <td class="pro-quantity">
                                <button class="inc_button" type="button" wire:click="incrementQuantity({{ $item->id }})">+</button>
                                <span >{{ $item->quantity }}</span>
                                <button class="inc_button" type="button" wire:click="decrementQuantity({{ $item->id }})">-</button>
{{--                                <div class="pro-qty"><input type="text" value="1"--}}
{{--                                                            name="quantity_choosen"--}}
{{--                                                            wire:click="incrementQuantity({{ $item->id }})"--}}
{{--                                    ></div>--}}
                            </td>
                            <td class="pro-subtotal"><span>${{$item->product->discount_price * $item->quantity}}</span></td>
                            <td class="pro-remove"><button type="button" class="btn btn-xl "  wire:click="removeCartItem({{$item->id}})" ><i class="feather-x"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    {{--                                    <tr>--}}
                    {{--                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/7.jpg"--}}
                    {{--                                                                                   alt="Product"></a></td>--}}
                    {{--                                        <td class="pro-title"><a href="#">Happy Strong</a></td>--}}
                    {{--                                        <td class="pro-price"><span>$100.00</span></td>--}}
                    {{--                                        <td class="pro-quantity">--}}
                    {{--                                            <div class="pro-qty"><input type="text" value="2"></div>--}}
                    {{--                                        </td>--}}
                    {{--                                        <td class="pro-subtotal"><span>$120.00</span></td>--}}
                    {{--                                        <td class="pro-remove"><a href="#"><i class="feather-x"></i></a>--}}
                    {{--                                        </td>--}}
                    {{--                                        --}}
                    {{--                                    </tr>--}}
                    {{--                                    <tr>--}}
                    {{--                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/3.jpg"--}}
                    {{--                                                                                   alt="Product"></a></td>--}}
                    {{--                                        <td class="pro-title"><a href="#">Rich Dad Poor Dad</a></td>--}}
                    {{--                                        <td class="pro-price"><span>$59.00</span></td>--}}
                    {{--                                        <td class="pro-quantity">--}}
                    {{--                                            <div class="pro-qty"><input type="text" value="1"></div>--}}
                    {{--                                        </td>--}}
                    {{--                                        <td class="pro-subtotal"><span>$150.00</span></td>--}}
                    {{--                                        <td class="pro-remove"><a href="#"><i class="feather-x"></i></a>--}}
                    {{--                                        </td>--}}
                    {{--                                    </tr>--}}
                    {{--                                    <tr>--}}
                    {{--                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/4.jpg"--}}
                    {{--                                                                                   alt="Product"></a></td>--}}
                    {{--                                        <td class="pro-title"><a href="#">Momentum Theorem</a></td>--}}
                    {{--                                        <td class="pro-price"><span>$250.00</span></td>--}}
                    {{--                                        <td class="pro-quantity">--}}
                    {{--                                            <div class="pro-qty"><input type="text" value="1"></div>--}}
                    {{--                                        </td>--}}
                    {{--                                        <td class="pro-subtotal"><span>$270.00</span></td>--}}
                    {{--                                        <td class="pro-remove"><a href="#"><i class="feather-x"></i></a>--}}
                    {{--                                        </td>--}}
                    {{--                                    </tr>--}}
                @else
                    <div class="text-center fw-bold text-danger">Nothing found <a href="/shop">Shop
                            some</a></div>
                @endif
                </tbody>
            </table>
        </div>
    </span>

    <div class="row g-5">

        <div class="col-lg-6 col-12">

            <!-- Discount Coupon -->
            <div class="discount-coupon edu-bg-shade">
                <div class="section-title text-start">
                    <h4 class="title mb--30">Discount Coupon Code</h4>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-md-6 col-12 mb--25">
                            <input type="text" placeholder="Coupon Code">
                        </div>
                        <div class="col-md-6 col-12 mb--25">
                            <button class="rbt-btn btn-gradient hover-icon-reverse btn-sm">
                                                    <span class="icon-reverse-wrapper">
                                                        <span class="btn-text">Apply Code</span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            {{--                                <div class="col-lg-6">--}}
            {{--                                    <div class="rbt-create-course-sidebar course-sidebar sticky-top rbt-shadow-box rbt-gradient-border">--}}
            {{--                                        <div class="inner">--}}
            {{--                                            <div class="section-title mb--30">--}}
            {{--                                                <h4 class="title">Course Upload Tips</h4>--}}
            {{--                                            </div>--}}
            {{--                                            <div class="rbt-course-upload-tips">--}}
            {{--                                                <ul class="rbt-list-style-1">--}}
            {{--                                                    <li><i class="feather-check"></i> Set the Course Price option or make it free.--}}
            {{--                                                    </li>--}}
            {{--                                                    <li><i class="feather-check"></i> Standard size for the course thumbnail is--}}
            {{--                                                        700x430.</li>--}}
            {{--                                                    <li><i class="feather-check"></i> Video section controls the course overview--}}
            {{--                                                        video.</li>--}}
            {{--                                                    <li><i class="feather-check"></i> Course Builder is where you create & organize--}}
            {{--                                                        a course.</li>--}}
            {{--                                                    <li><i class="feather-check"></i> Add Topics in the Course Builder section to--}}
            {{--                                                        create lessons, quizzes, and assignments.</li>--}}
            {{--                                                    <li><i class="feather-check"></i> Prerequisites refers to the fundamental--}}
            {{--                                                        courses to complete before taking this particular course.</li>--}}
            {{--                                                    <li><i class="feather-check"></i> Information from the Additional Data section--}}
            {{--                                                        shows up on the course single page.</li>--}}
            {{--                                                </ul>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}

            {{--                                <!-- Calculate Shipping -->--}}
            <div class="calculate-shipping edu-bg-shade my-5">
                <div class="section-title text-start">
                    <h4 class="title mb--30">Calculate Shipping</h4>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="rbt-create-course-sidebar course-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                                <div class="inner">
                                    <div class="section-title mb--30">
                                        <h4 class="title">Course Upload Tips</h4>
                                    </div>
                                    <div class="rbt-course-upload-tips">
                                        <ul class="rbt-list-style-1">
                                            <li><i class="feather-check"></i> Set the Course Price option or make it free.
                                            </li>
                                            <li><i class="feather-check"></i> Standard size for the course thumbnail is
                                                700x430.</li>
                                            <li><i class="feather-check"></i> Video section controls the course overview
                                                video.</li>
                                            <li><i class="feather-check"></i> Course Builder is where you create & organize
                                                a course.</li>
                                            <li><i class="feather-check"></i> Add Topics in the Course Builder section to
                                                create lessons, quizzes, and assignments.</li>
                                            <li><i class="feather-check"></i> Prerequisites refers to the fundamental
                                                courses to complete before taking this particular course.</li>
                                            <li><i class="feather-check"></i> Information from the Additional Data section
                                                shows up on the course single page.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
        <!-- Cart Summary -->

        <div class="col-lg-5 offset-lg-1 col-12">
            <div class="cart-summary">
                <div class="cart-summary-wrap">
                    <div class="section-title text-start">
                        <h4 class="title mb--30">Cart Summary</h4>
                    </div>
                    <p>Sub Total <span>${{$total}}</span></p>
                    <p>Shipping Cost <span>$00.00</span></p>
                    <h2>Grand Total <span>${{$total}}</span></h2>
                </div>

                <div class="cart-submit-btn-group">
                    <div class="single-button w-100">
                        <a href="{{ route("checkout") }}" class="rbt-btn btn-gradient rbt-switch-btn rbt-switch-y w-100 text-center">
                            <span data-text="Checkout">Checkout</span>
                        </a>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>

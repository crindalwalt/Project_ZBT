<x-layouts.main_layout>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Checkout</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->
    <form action="{{ route("course.enrollment.checkout",$course->slug) }}" method="POST">
        @csrf
        <div class="checkout_area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row g-5 checkout-form">

                    <div class="col-lg-7">
                        <div class="checkout-content-wrapper">

                            <!-- Billing Address -->
                            <div id="billing-form">
                                <h4 class="checkout-title">Billing Address</h4>

                                <div class="row">

                                    <div class="col-md-12 col-12 mb--20">
                                        <label>First Name*</label>
                                        <input type="text" placeholder="First Name" value="{{ auth()->user()->name }}"
                                               readonly>
                                    </div>


                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Email Address*</label>
                                        <input type="email" placeholder="Email Address"
                                               value="{{ auth()->user()->email }}" readonly>
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Phone no*</label>
                                        <input type="text" placeholder="Phone number"
                                               value="{{ auth()->user()->phone }}" readonly>
                                    </div>

                                    {{--                                <div class="col-12 mb--20">--}}
                                    {{--                                    <label>Company Name</label>--}}
                                    {{--                                    <input type="text" placeholder="Company Name">--}}
                                    {{--                                </div>--}}

                                    <div class="col-12 mb--20">
                                        <label>Address*</label>
                                        <input type="text" placeholder="Address line 1" name="biling_line_1">
                                        <input type="text" placeholder="Address line 2" name="biling_line_2">
                                        @error("biling_line_1") {{ $message }} @enderror
                                        @error("biling_line_2") {{ $message }} @enderror
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Country*</label>
                                        <input type="text" placeholder="Country" name="country">
                                        @error("country") {{ $message }} @enderror

                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Town/City*</label>
                                        <input type="text" placeholder="Town/City" name="city">
                                        @error("city") {{ $message }} @enderror

                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>State*</label>
                                        <input type="text" placeholder="State" name="state">
                                        @error("state") {{ $message }} @enderror

                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Zip Code*</label>
                                        <input type="text" placeholder="Zip Code" name="zipcode">
                                        @error("zipcode") {{ $message }} @enderror

                                    </div>

                                    <div class="col-12 mb--20">
                                        <div class="check-box">
                                            <input type="checkbox" id="create_account" checked>
                                            <label for="create_account">I agree to the <a
                                                    href="{{ route("terms_and_condition") }}">terms and
                                                    conditions</a></label>
                                        </div>
                                        {{--                                    <div class="check-box">--}}
                                        {{--                                        <input type="checkbox" id="shiping_address" data-shipping>--}}
                                        {{--                                        <label for="shiping_address">Ship to Different Address</label>--}}
                                        {{--                                    </div>--}}
                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="row pl--50 pl_md--0 pl_sm--0">
                            <!-- Cart Total -->
                            <div class="col-12 mb--60">

                                {{--                                <h4 class="checkout-title">Cart Total</h4>--}}

                                <div class="checkout-cart-total">

                                    <h4>Product <span>Total</span></h4>

                                    <ul>
                                        {{--                                        @if($cart)--}}
                                        {{--                                            @foreach($cart->items as $item)--}}
                                        {{--                                                <li>{{ $item->product->title }} X {{ $item->quantity }}--}}
                                        {{--                                                    <span>${{ $item->quantity * $item->product->discount_price }}</span>--}}
                                        {{--                                                </li>--}}
                                        {{--                                            @endforeach--}}
                                        {{--                                        @endif--}}
                                        {{--                                    <li>Aquet Drone D 420 X 02 <span>$550.00</span></li>--}}
                                        {{--                                    <li>Play Station X 22 X 01 <span>$295.00</span></li>--}}
                                        <li>{{ $course->title }} <span>${{$course->discount_price}}.00/per Month</span>
                                        </li>
                                    </ul>
                                    {{--                                    @php--}}
                                    {{--                                        $sub_total = 0;--}}
                                    {{--                                        $shipping_fee = 15;--}}
                                    {{--                                        foreach ($cart->items as $item){--}}
                                    {{--                                            $sub_total += ($item->product->discount_price * $item->quantity);--}}


                                    {{--                                        }--}}
                                    {{--                                        $grand_total = $sub_total ;--}}
                                    {{--                                    @endphp--}}


                                    <p>Duration <span>{{ $course->months }} Months</span></p>
                                    <p>Tax <span>$0</span></p>

                                    <h4 class="mt--30">Grand Total <span>${{$course->discount_price}}.00</span></h4>
                                    <li class="mt--30">Course payment will deduct every month till course end
                                        ({{ $course->months . " months" }}) <span>${{$course->discount_price}}.00</span>
                                    </li>

                                </div>

                            </div>

                            <!-- Payment Method -->
                            <div class="col-12 mb--60">
                                <h4 class="checkout-title">Payment Method</h4>
                                <div class="checkout-payment-method">

                                    <div class="single-method">
                                        <input type="radio" id="payment_check" name="payment-method" value="check">
                                        <label for="payment_check">Credit/Debit Card</label>
                                        <p data-method="check">You will be redirected to the Stripe official checkout
                                            where you will prompted to ask for your payment detail. we will not save or
                                            process any of that information</p>
                                    </div>

                                    <div class="single-method">
                                        <input type="radio" id="payment_gpay" name="payment-method" value="check">
                                        <label for="payment_gpay">Google pay (Gpay)</label>
                                        <p data-method="check">You will be redirected to the Stripe official checkout
                                            where you will prompted to ask for your payment detail. we will not save or
                                            process any of that information</p>
                                    </div>


                                </div>
                                <div class="plceholder-button mt--50">
                                    <button type="submit"
                                            class="rbt-btn btn-gradient hover-icon-reverse">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Place order</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
</x-layouts.main_layout>

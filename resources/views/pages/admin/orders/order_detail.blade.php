<x-layouts.main_layout>

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>

    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <div class="row g-5">
                        <div class="col-lg-3">
                            <!-- Start Dashboard Sidebar  -->
                            <x-utils.admin-sidebar />
                            <!-- End Dashboard Sidebar  -->
                        </div>

                        <div class="col-lg-9">
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--20">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Manage #order-{{ $order->id }}</h4>
                                    </div>
                                    {{-- <div class="row g-5">

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div
                                                class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-primary-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-primary-opacity">
                                                        <i class="feather-book-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-primary"><span
                                                                class="odometer"
                                                                data-count="{{ count($orders) }}">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Total Orders</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->





                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div
                                                class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-pink-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-pink-opacity">
                                                        <i class="feather-users"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-pink"><span
                                                                class="odometer"
                                                            data-count="{{ count($pending_orders) }}">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Pending Orders</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div
                                                class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-coral-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-coral-opacity">
                                                        <i class="feather-gift"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-coral"><span
                                                                class="odometer"
                                                                data-count="{{ count($completed_orders) }}">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Completed Orders</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->



                                    </div> --}}
                                </div>
                            </div>
                            <!-- Start Enrole Course  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">
                                    {{-- here --}}
                                    <style>
                                        .card {
                                            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
                                        }

                                        .card {
                                            position: relative;
                                            display: flex;
                                            flex-direction: column;
                                            min-width: 0;
                                            word-wrap: break-word;
                                            background-color: #fff;
                                            background-clip: border-box;
                                            border: 0 solid rgba(0, 0, 0, .125);
                                            border-radius: 1rem;
                                        }

                                        .text-reset {
                                            --bs-text-opacity: 1;
                                            color: inherit !important;
                                        }

                                        a {
                                            color: #5465ff;
                                            text-decoration: none;
                                        }
                                    </style>
                                    <div class="">

                                        <div class="">
                                            <!-- Title -->
                                            <div class="d-flex justify-content-between align-items-center py-3">
                                                <h2 class="h5 mb-0"><a href="#" class="text-muted"></a> #Order-{{ $order->id }}</h2>

                                                <div class="d-flex align-items-center justify-content-between">

                                                    <div>
                                                        <a href="{{ route("admin.order.dispatch",$order->id) }}" class="btn btn-success btn-lg px-5">Dispatch Order</a>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route("admin.order.cancel",$order->id) }}" class="btn btn-danger btn-lg px-5 ms-3">Cancel Order</a>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- Main content -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Details -->
                                                    <div class=" mb-4">
                                                        <div class="card-body">
                                                            <div class="mb-3 d-flex justify-content-between">
                                                                <div>
                                                                    <span class="me-3">{{ \Carbon\Carbon::parse($order->created_at)->format("D d M y H:i A") }}</span>
                                                                    <span class="me-3">#Order-{{$order->id  }}</span>
                                                                    <span class="me-3"> Paid via Stripe</span>
                                                                    <span
                                                                        class="badge rounded-pill bg-info">{{ $order->delivery_status }}</span>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <button
                                                                        class="btn btn-link p-0 me-3 d-none d-lg-block btn-icon-text"><i
                                                                            class="bi bi-download"></i> <span
                                                                            class="text">Invoice</span></button>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-link p-0 text-muted"
                                                                            type="button" data-bs-toggle="dropdown">
                                                                            <i class="bi bi-three-dots-vertical"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                            <li><a class="dropdown-item"
                                                                                    href="#"><i
                                                                                        class="bi bi-pencil"></i>
                                                                                    Edit</a></li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="#"><i
                                                                                        class="bi bi-printer"></i>
                                                                                    Print</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    @if($order->details->isNotEmpty())
                                                                    @foreach ($order->details as $item)
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex mb-2">
                                                                                <div class="flex-shrink-0">
                                                                                    <img src="{{ asset($item->product->media[0]->image) }}"
                                                                                        alt="" width="35"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                                <div class="flex-lg-grow-1 ms-3">
                                                                                    <h6 class="small mb-0"><a
                                                                                            href="#"
                                                                                            class="text-reset">
                                                                                            {{ $item->product->title  }}
                                                                                        </a></h6>
                                                                                    <span class="small">Color:
                                                                                        Black</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>{{ $item->quantity }}</td>
                                                                        <td class="text-end">${{ $item->product->discount_price }}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                    @endif

                                                                    {{-- <tr>
                                                                        <td>
                                                                            <div class="d-flex mb-2">
                                                                                <div class="flex-shrink-0">
                                                                                    <img src="https://www.bootdey.com/image/280x280/FF69B4/000000"
                                                                                        alt="" width="35"
                                                                                        class="img-fluid">
                                                                                </div>
                                                                                <div class="flex-lg-grow-1 ms-3">
                                                                                    <h6 class="small mb-0"><a
                                                                                            href="#"
                                                                                            class="text-reset">Smartwatch
                                                                                            IP68 Waterproof GPS and
                                                                                            Bluetooth Support</a></h6>
                                                                                    <span class="small">Color:
                                                                                        White</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>1</td>
                                                                        <td class="text-end">$79.99</td>
                                                                    </tr> --}}
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <td colspan="2">Subtotal</td>
                                                                        <td class="text-end">${{ $order->total_value }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Shipping</td>
                                                                        <td class="text-end">$00.00</td>
                                                                    </tr>

                                                                    <tr class="fw-bold">
                                                                        <td colspan="2">TOTAL</td>
                                                                        <td class="text-end">${{ $order->total_value }}</td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- Payment -->
                                                    <div class=" mb-4">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <h3 class="h6">Payment Method</h3>
                                                                    <p>Paid via Stripe <br>
                                                                        Total: ${{ $order->total_value }} <span
                                                                            class="badge bg-success rounded-pill">{{ $order->payment_status }}</span>
                                                                    </p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <h3 class="h6 mt-5">Shipping address</h3>
                                                                    <address>
                                                                        <strong>{{ $order->user->name }}</strong><br>
                                                                        {{ $order->order_address->line_1 ?? "" }} <br>
                                                                        {{ $order->order_address->line_1 ?? ""}} <br>
                                                                        {{ $order->order_address->country ?? ""}} <br>
                                                                        {{ $order->order_address->city ?? ""}} <br>
                                                                        {{ $order->order_address->state ?? ""}} <br>
                                                                        {{ $order->order_address->zipcode ?? ""}} <br>
                                                                        <br>

                                                                        <div title="Phone">Phone:</abbr> {{ $order->user->phone }} </div>
                                                                        <div title="Phone">Email:</abbr> {{ $order->user->email }} </div>

                                                                    </address>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Enrole Course  -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->


    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

</x-layouts.main_layout>

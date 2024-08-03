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
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Orders</h4>
                                    </div>
                                    <div class="row g-5">

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



                                    </div>
                                </div>
                            </div>
                            <!-- Start Enrole Course  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">

                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Manage Orders here</h4>
                                    </div>

                                    <div class="advance-tab-button mb--30">
                                        <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="myTab-4" role="tablist">
                                            <li role="presentation">
                                                <a href="#" class="tab-button active" id="home-tab-4" data-bs-toggle="tab" data-bs-target="#home-4" role="tab" aria-controls="home-4" aria-selected="true">
                                                    <span class="title">Pending Orders</span>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#" class="tab-button" id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#profile-4" role="tab" aria-controls="profile-4" aria-selected="false">
                                                    <span class="title">Completed Orders</span>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#" class="tab-button" id="contact-tab-4" data-bs-toggle="tab" data-bs-target="#contact-4" role="tab" aria-controls="contact-4" aria-selected="false">
                                                    <span class="title">All Orders</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="home-4" role="tabpanel" aria-labelledby="home-tab-4">
                                            <div class="row g-5">
                                                <div class="rbt-dashboard-table table-responsive mobile-table-750">
                                                    <table class="rbt-table table table-borderless" id="ordersTable">
                                                        <thead>
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Customer</th>
                                                            {{-- <th>Date</th> --}}
                                                            <th>Price</th>
                                                            <th>Payment</th>
                                                            <th>Delivery</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        @if($pending_orders)
                                                            @foreach($pending_orders as $item)
                                                                <tr>
                                                                    <th>#00{{$item->id}}</th>
                                                                    <td>{{$item->user->name}}</td>
                                                                    {{-- <td>{{ Carbon\Carbon::parse($item->created_at)->format("Y-m-d H:i:s") }}</td> --}}
                                                                    <td>${{ $item->total_value }}</td>
                                                                    <td><span
                                                                            class="rbt-badge-5
                                                                            @if($item->payment_status == "approved") bg-color-success-opacity color-success
                                                                            @elseif($item->payment_status == "cancelled")
                                                                            bg-color-danger-opacity color-danger
                                                                            @elseif($item->payment_status == "pending")
                                                                            bg-color-warning-opacity color-warning
                                                                            @endif
                                                                            ">{{ $item->payment_status }}</span>
                                                                    </td>
                                                                    <td><span
                                                                            class="rbt-badge-5


                                                                            @if($item->delivery_status == "approved") bg-color-success-opacity color-success
                                                                            @elseif($item->delivery_status == "cancelled")
                                                                            bg-color-danger-opacity color-danger
                                                                            @elseif($item->delivery_status == "pending")
                                                                            bg-color-warning-opacity color-warning
                                                                            @elseif($item->delivery_status == "dispatched")
                                                                            bg-color-primary-opacity color-primary
                                                                            @elseif($item->delivery_status == "delivered")
                                                                            bg-color-dark-opacity color-dark
                                                                            @endif

                                                                            ">{{ $item->delivery_status }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <a href="{{ route("order.detail",$item->id) }}" class="me-2 btn btn-md rounded-pill btn-info px-3 py-2">Show Order</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#4585</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>May 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#9656</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#2045</th>--}}
                                                        {{--                                                <td>Application</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#5478</th>--}}
                                                        {{--                                                <td>App Development</td>--}}
                                                        {{--                                                <td>January 27, 2023</td>--}}
                                                        {{--                                                <td>$100.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#4585</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>May 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#9656</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#2045</th>--}}
                                                        {{--                                                <td>Application</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#5478</th>--}}
                                                        {{--                                                <td>App Development</td>--}}
                                                        {{--                                                <td>January 27, 2023</td>--}}
                                                        {{--                                                <td>$100.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#4585</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>May 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#9656</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#2045</th>--}}
                                                        {{--                                                <td>Application</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#5478</th>--}}
                                                        {{--                                                <td>App Development</td>--}}
                                                        {{--                                                <td>January 27, 2023</td>--}}
                                                        {{--                                                <td>$100.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#4585</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>May 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#9656</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#2045</th>--}}
                                                        {{--                                                <td>Application</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                                            <div class="row g-5">

                                                <div class="rbt-dashboard-table table-responsive mobile-table-750">
                                                    <table class="rbt-table table table-borderless" id="ordersTable">
                                                        <thead>
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Customer</th>
                                                            {{-- <th>Date</th> --}}
                                                            <th>Price</th>
                                                            <th>Payment</th>
                                                            <th>Delivery</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        @if($orders)
                                                            @foreach($completed_orders as $item)
                                                            <tr>
                                                                <th>#00{{$item->id}}</th>
                                                                <td>{{$item->user->name}}</td>
                                                                {{-- <td>{{ Carbon\Carbon::parse($item->created_at)->format("Y-m-d H:i:s") }}</td> --}}
                                                                <td>${{ $item->total_value }}</td>
                                                                <td><span
                                                                        class="rbt-badge-5
                                                                        @if($item->payment_status == "approved") bg-color-success-opacity color-success
                                                                        @elseif($item->payment_status == "cancelled")
                                                                        bg-color-danger-opacity color-danger
                                                                        @elseif($item->payment_status == "pending")
                                                                        bg-color-warning-opacity color-warning
                                                                        @endif
                                                                        ">{{ $item->payment_status }}</span>
                                                                </td>
                                                                <td><span
                                                                        class="rbt-badge-5


                                                                        @if($item->delivery_status == "approved") bg-color-success-opacity color-success
                                                                        @elseif($item->delivery_status == "cancelled")
                                                                        bg-color-danger-opacity color-danger
                                                                        @elseif($item->delivery_status == "pending")
                                                                        bg-color-warning-opacity color-warning
                                                                        @elseif($item->delivery_status == "dispatched")
                                                                        bg-color-primary-opacity color-primary
                                                                        @elseif($item->delivery_status == "delivered")
                                                                        bg-color-dark-opacity color-dark
                                                                        @endif

                                                                        ">{{ $item->delivery_status }}</span>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ route("order.detail",$item->id) }}" class="me-2 btn btn-md rounded-pill btn-info px-3 py-2">Show Order</a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        @endif
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#4585</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>May 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#9656</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#2045</th>--}}
                                                        {{--                                                <td>Application</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#5478</th>--}}
                                                        {{--                                                <td>App Development</td>--}}
                                                        {{--                                                <td>January 27, 2023</td>--}}
                                                        {{--                                                <td>$100.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#4585</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>May 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#9656</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#2045</th>--}}
                                                        {{--                                                <td>Application</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#5478</th>--}}
                                                        {{--                                                <td>App Development</td>--}}
                                                        {{--                                                <td>January 27, 2023</td>--}}
                                                        {{--                                                <td>$100.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#4585</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>May 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#9656</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#2045</th>--}}
                                                        {{--                                                <td>Application</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#5478</th>--}}
                                                        {{--                                                <td>App Development</td>--}}
                                                        {{--                                                <td>January 27, 2023</td>--}}
                                                        {{--                                                <td>$100.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#4585</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>May 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#9656</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#2045</th>--}}
                                                        {{--                                                <td>Application</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="contact-4" role="tabpanel" aria-labelledby="contact-tab-4">
                                            <div class="row g-5">
                                                <div class="rbt-dashboard-table table-responsive mobile-table-750">
                                                    <table class="rbt-table table table-borderless" id="ordersTable">
                                                        <thead>
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Customer</th>
                                                            {{-- <th>Date</th> --}}
                                                            <th>Price</th>
                                                            <th>Payment</th>
                                                            <th>Delivery</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        @if($orders)
                                                            @foreach($orders as $item)
                                                            <tr>
                                                                <th>#00{{$item->id}}</th>
                                                                <td>{{$item->user->name}}</td>
                                                                {{-- <td>{{ Carbon\Carbon::parse($item->created_at)->format("Y-m-d H:i:s") }}</td> --}}
                                                                <td>${{ $item->total_value }}</td>
                                                                <td><span
                                                                        class="rbt-badge-5
                                                                        @if($item->payment_status == "approved") bg-color-success-opacity color-success
                                                                        @elseif($item->payment_status == "cancelled")
                                                                        bg-color-danger-opacity color-danger
                                                                        @elseif($item->payment_status == "pending")
                                                                        bg-color-warning-opacity color-warning
                                                                        @endif
                                                                        ">{{ $item->payment_status }}</span>
                                                                </td>
                                                                <td><span
                                                                        class="rbt-badge-5


                                                                        @if($item->delivery_status == "approved") bg-color-success-opacity color-success
                                                                        @elseif($item->delivery_status == "cancelled")
                                                                        bg-color-danger-opacity color-danger
                                                                        @elseif($item->delivery_status == "pending")
                                                                        bg-color-warning-opacity color-warning
                                                                        @elseif($item->delivery_status == "dispatched")
                                                                        bg-color-primary-opacity color-primary
                                                                        @elseif($item->delivery_status == "delivered")
                                                                        bg-color-dark-opacity color-dark
                                                                        @endif

                                                                        ">{{ $item->delivery_status }}</span>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ route("order.detail",$item->id) }}" class="me-2 btn btn-md rounded-pill btn-info px-3 py-2">Show Order</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        @endif
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#4585</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>May 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#9656</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#2045</th>--}}
                                                        {{--                                                <td>Application</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#5478</th>--}}
                                                        {{--                                                <td>App Development</td>--}}
                                                        {{--                                                <td>January 27, 2023</td>--}}
                                                        {{--                                                <td>$100.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#4585</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>May 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#9656</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#2045</th>--}}
                                                        {{--                                                <td>Application</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#5478</th>--}}
                                                        {{--                                                <td>App Development</td>--}}
                                                        {{--                                                <td>January 27, 2023</td>--}}
                                                        {{--                                                <td>$100.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#4585</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>May 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#9656</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#2045</th>--}}
                                                        {{--                                                <td>Application</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#5478</th>--}}
                                                        {{--                                                <td>App Development</td>--}}
                                                        {{--                                                <td>January 27, 2023</td>--}}
                                                        {{--                                                <td>$100.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#4585</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>May 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#9656</th>--}}
                                                        {{--                                                <td>Graphic</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        {{--                                            <tr>--}}
                                                        {{--                                                <th>#2045</th>--}}
                                                        {{--                                                <td>Application</td>--}}
                                                        {{--                                                <td>March 27, 2023</td>--}}
                                                        {{--                                                <td>$200.99</td>--}}
                                                        {{--                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span>--}}
                                                        {{--                                                </td>--}}
                                                        {{--                                            </tr>--}}
                                                        </tbody>
                                                    </table>
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

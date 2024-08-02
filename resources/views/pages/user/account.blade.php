<x-layouts.main_layout>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">My Account</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->
    <div class="my-account-section bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row g-5">Logo
                        Favicon
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="rbt-my-account-tab-button nav" role="tablist">
                                <a href="#dashboad" class="active" data-bs-toggle="tab">Dashboard</a>
                                <a href="#orders" data-bs-toggle="tab">Orders</a>
                                <a href="#download" data-bs-toggle="tab">Enrollment</a>
                                <a href="#classes" data-bs-toggle="tab">Classes</a>
                                {{--                                <a href="#payment-method" data-bs-toggle="tab">Payment Method</a> --}}

                                <!-- <a href="#address-edit" data-bs-toggle="tab">Address</a> -->
                                <a href="#account-info" data-bs-toggle="tab">Account Details</a>
                                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                    @csrf
                                    <style>
                                        .log:hover {
                                            color: white;
                                        }
                                    </style>
                                    <a class="log bg-danger text-white" :href="route('logout')"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade active show" id="dashboad" role="tabpanel">
                                    <div class="rbt-my-account-inner">
                                        <h3>Dashboard</h3>

                                        <div class="about-address mb--20">
                                            <p>Hello, <strong>{{ auth()->user()->name }}</strong>
                                            </p>
                                        </div>

                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="rbt-my-account-inner">
                                        <h3>Orders</h3>

                                        <div class="rbt-my-account-table table-responsive text-center">

                                                        <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>

                                                        @foreach ($orders as $item)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>Order#{{ $item->id }}</td>
                                                                <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}
                                                                </td>
                                                                <td>{{ strtoupper($item->delivery_status) }}</td>
                                                                <td>${{ $item->total_value }}</td>
                                                                <td>
                                                                    <a class="rbt-btn btn-gradient btn-sm"
                                                                        href="{{ route('invoice.generate', $item->id) }}">
                                                                        Download Invoice</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>

                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="rbt-my-account-inner">
                                        <h3>Enrollments</h3>

                                        <div class="rbt-my-account-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>#ID</th>
                                                        <th>Class Name</th>
                                                        <th>Class Time</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (auth()->user()->enrollment as $item)
                                                        @if ($item->enrollment_status != 'active')
                                                            @continue
                                                        @endif
                                                        <tr>
                                                            <td>{{ $item->course->title }}</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Yes</td>
                                                            <td>
                                                                @if ($item->enrollment_status == 'active')
                                                                    <span class="badge bg-success rounded-5 ">
                                                                        Active
                                                                    </span>
                                                                @else
                                                                    <span class="badge bg-danger rounded-5 ">
                                                                        Pending
                                                                    </span>
                                                                @endif


                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    {{--                                                <tr> --}}
                                                    {{--                                                    <td>Happy Strong</td> --}}
                                                    {{--                                                    <td>Sep 12, 2018</td> --}}
                                                    {{--                                                    <td>Never</td> --}}
                                                    {{--                                                    <td><a class="rbt-btn btn-gradient btn-sm" href="#">Download --}}
                                                    {{--                                                            File</a></td> --}}
                                                    {{--                                                </tr> --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="classes" role="tabpanel">
                                    <div class="rbt-my-account-inner">
                                        <h3>Classes</h3>

                                        <div class="rbt-my-account-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        {{-- <th>#ID</th> --}}
                                                        <th>Class Name</th>
                                                        <th>Class Time</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($classes as $item)
                                                        {{-- @if ($item->enrollment_status != 'active')
                                                            @continue
                                                        @endif --}}
                                                        <tr>
                                                            <td>{{ $item->badge->name }}</td>
                                                            <td>{{ $item->badge->class_time }}</td>
                                                            {{-- <td>Yes</td> --}}
                                                            <td>
                                                                <a class="rbt-btn btn-gradient btn-sm"
                                                                    href="{{ route('student.class', $item->badge->id) }}">View
                                                                    Class
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    {{--                                                <tr> --}}
                                                    {{--                                                    <td>Happy Strong</td> --}}
                                                    {{--                                                    <td>Sep 12, 2018</td> --}}
                                                    {{--                                                    <td>Never</td> --}}
                                                    {{--                                                    <td><a class="rbt-btn btn-gradient btn-sm" href="#">Download --}}
                                                    {{--                                                            File</a></td> --}}
                                                    {{--                                                </tr> --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="rbt-my-account-inner">
                                        <h3>Payment Method</h3>

                                        <p class="rbt-saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="rbt-my-account-inner">
                                        <h3>Billing Address</h3>

                                        <address>
                                            <p><strong>Banani, Dhaka</strong></p>
                                            <p>1205 Supper Market<br>
                                                Dhaka, Bangladesh</p>
                                            <p>Mobile: 01911111111</p>
                                        </address>

                                        <div class="rbt-link-hover">
                                            <a href="#" class="d-inline-block"><i
                                                    class="fa fa-edit mr--5"></i>Edit
                                                Address</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="rbt-my-account-inner">
                                        <h3>Account Details</h3>

                                        <div class="account-details-form">
                                            <form action="{{ route('password.change') }}" method="POST">
                                                @csrf
                                                <div class="row g-5">
                                                    <div class="col-lg-12 col-12">
                                                        <input id="first-name" placeholder="Full Name" type="text"
                                                            value="{{ auth()->user()->name }}" readonly>
                                                    </div>



                                                    <div class="col-12">
                                                        <input id="display-name" placeholder="Email Address"
                                                            type="email" value="{{ auth()->user()->email }}"
                                                            readonly>
                                                    </div>

                                                    <div class="col-12">
                                                        <input id="email-address" placeholder="Email Address"
                                                            type="tel" value="{{ auth()->user()->phone }}"
                                                            readonly>
                                                    </div>

                                                    <div class="col-12">
                                                        <h4>Password change</h4>
                                                    </div>

                                                    <div class="col-12">
                                                        <input id="current-pwd" placeholder="Current Password"
                                                            type="password" name="current_password">
                                                        @error('current_password')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input id="new-pwd" placeholder="New Password"
                                                            type="password" name="new_password">
                                                        @error('new_password')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input id="confirm-pwd" placeholder="Confirm Password"
                                                            type="password" name="confirm_password">
                                                        @error('confirm_password')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>

                                                    <div class="col-12">
                                                        <button class="rbt-btn btn-gradient icon-hover"
                                                            type="submit">
                                                            <span class="btn-text">Save Changes</span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
                                                        </button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
</x-layouts.main_layout>

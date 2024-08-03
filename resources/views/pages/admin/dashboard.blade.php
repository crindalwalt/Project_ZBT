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
                            <x-utils.admin-sidebar />
                        </div>

                        <div class="col-lg-9">
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Dashboard</h4>
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
                                                                data-count="{{ count($courses) }}">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Total Courses</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div
                                                class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-secondary-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-secondary-opacity">
                                                        <i class="feather-monitor"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-secondary"><span
                                                                class="odometer"
                                                                data-count="{{ count($courses) }}">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">ACTIVE COURSES</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div
                                                class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-violet-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-violet-opacity">
                                                        <i class="feather-award"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-violet"><span
                                                                class="odometer"
                                                                data-count="{{ count($students) }}">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Total Students</span>
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
                                                                data-count="{{ count($products) }}">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Total Products</span>
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
                                                                data-count="{{ count($orders) }}">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Total Orders</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->



                                    </div>
                                </div>
                            </div>
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-title">
                                                <h4 class="rbt-title-style-3">My Courses</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gy-5">
                                        <div class="col-lg-12">
                                            <div class="rbt-dashboard-table table-responsive">
                                                <table class="rbt-table table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th>Course Name</th>
                                                            <th>Batches</th>
                                                            {{-- <th>Rating</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if ($courses->isNotEmpty())
                                                            @foreach ($courses as $item)
                                                                <tr>
                                                                    <th><a href="#">{{ $item->title }}</a></th>
                                                                    <td>{{ count($item->batches) }}</td>

                                                                </tr>
                                                            @endforeach
                                                        @endif


                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="load-more-btn text-center">
                                                <a class="rbt-btn-link" href="{{ route("admin.courses") }}">Browse All Course<i
                                                        class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-title">
                                                <h4 class="rbt-title-style-3">My Products</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gy-5">
                                        <div class="col-lg-12">
                                            <div class="rbt-dashboard-table table-responsive">
                                                <table class="rbt-table table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th>Product Name</th>
                                                            <th>orders</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if ($products->isNotEmpty())
                                                            @foreach ($products as $item)
                                                                <tr>
                                                                    <th><a href="#">{{ $item->title }}</a></th>
                                                                    <td>{{ count($item->orders) }}</td>
                                                                    <td>
                                                                        <a href="#" class="btn btn-md btn-primary rounded-pill">View order</a>
                                                                    </td>

                                                                </tr>
                                                            @endforeach
                                                        @endif


                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="load-more-btn text-center">
                                                <a class="rbt-btn-link" href="{{ route("admin.products.all") }}">Browse All Products<i
                                                        class="feather-arrow-right"></i></a>
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
    </div>
    <!-- End Card Style -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Footer aera -->
</x-layouts.main_layout>

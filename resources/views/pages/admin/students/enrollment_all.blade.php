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
                            <!-- Start Enrole Course  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">New Enrollments</h4>
                                    </div>

                                    <div class="table-responsive rbt-dashboard-table  mobile-table-750">
                                        <table class="rbt-table table table-borderless" id="ordersTable">
                                            <style>
                                                th{
                                                    padding: 0rem .5rem;
                                                }
                                            </style>
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Student</th>
                                                    <th>Course</th>
                                                    <th>Enrolled status</th>
                                                    {{-- <th>Joined</th> --}}
                                                    {{-- <th>Expiry</th> --}}
                                                    <th>Payment</th>
                                                    <th>Payment status</th>

                                                    <th>Actions</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if ($enrollments->isNotEmpty())
                                                    @foreach ($enrollments as $item)
                                                        <tr>
                                                            <th>#00{{ $item->id }}</th>
                                                            <td>{{ $item->enrolled_students->name }}</td>
                                                            <td>{{ $item->course->title }}</td>
                                                            <td>
                                                                <span
                                                                    class="rbt-badge-5
                                                                    @if($item->enrollment_status == "active")
                                                                    bg-color-success-opacity color-success
                                                                    @elseif ($item->enrollment_status == "pending")
                                                                    bg-color-danger-opacity color-danger
                                                                    @elseif ($item->enrollment_status == "expelled")
                                                                    bg-color-dark-opacity color-dark
                                                                    @endif


                                                                    ">{{ $item->enrollment_status }}</span>
                                                            </td>
                                                            {{-- <td>
                                                                {{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d H:i:s') }}
                                                            </td> --}}
                                                            {{-- <td>
                                                                {{ Carbon\Carbon::parse($item->expire_date)->format('Y-m-d H:i:s') }}
                                                            </td> --}}
                                                             <td>${{ $item->course->discount_price }}</td>
                                                        <td>
                                                            <span
                                                                class="rbt-badge-5
                                                                @if($item->payment_status == "success")
                                                                bg-color-success-opacity color-success
                                                                @elseif ($item->payment_status == "pending")
                                                                bg-color-danger-opacity color-danger
                                                                @elseif ($item->payment_status == "declined")
                                                                bg-color-dark-opacity color-dark
                                                                @endif

                                                                "
                                                                >
                                                                {{ $item->payment_status }}
                                                            </span>
                                                        </td>

                                                            <td>
                                                                <a href="{{ route('students.transform', $item->id) }}"
                                                                    class="me-2 btn btn-sm btn-primary rounded-pill px-2 ">View Student</a>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif

                                            </tbody>
                                        </table>
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

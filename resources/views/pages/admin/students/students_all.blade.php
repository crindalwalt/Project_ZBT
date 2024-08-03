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
                                        <h4 class="rbt-title-style-3">Total Visitors</h4>
                                    </div>

                                    <div class="rbt-dashboard-table table-responsive mobile-table-750">
                                        <table class="rbt-table table table-borderless" id="ordersTable">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Visitor</th>
                                                    <th>Enrolled</th>
                                                    <th>Email</th>
                                                    {{-- <th>Phone</th> --}}

                                                    {{-- <th>Payment</th>
                                                    <th>Delivery</th> --}}
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if ($students)
                                                    @foreach ($students as $item)
                                                        <tr>
                                                            <th>#00{{ $item->id }}</th>
                                                            <td>{{ $item->name }}</td>
                                                            <td>
                                                                @if ($item->enrollment->isNotEmpty())
                                                                    <span class="badge bg-success rounded-pill">Enrolled</span>
                                                                    @else
                                                                    <span class="badge bg-danger rounded-pill">Not Enrolled</span>
                                                                @endif
                                                            </td>
                                                            <td>{{ $item->email }}</td>
                                                            {{-- <td>{{ $item->phone }}</td> --}}

                                                            {{-- <td>
                                                                {{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d H:i:s') }}
                                                            </td> --}}
                                                            {{-- <td>${{ $item->email }}</td>
                                                        <td><span
                                                                class="rbt-badge-5 bg-color-success-opacity color-success">{{ $item->payment_status }}</span>
                                                        </td>
                                                        <td><span
                                                                class="rbt-badge-5 bg-color-success-opacity color-success">{{ $item->delivery_status }}</span>
                                                        </td> --}}
                                                            <td>
                                                                {{-- <a href="{{ route('students.transform', $item->id) }}"
                                                                    class="me-2 btn btn-sm btn-primary">Assign as Teacher</a> --}}
                                                                    <a href="" class="btn btn-md btn-primary rounded-pill">View Visitor</a>

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

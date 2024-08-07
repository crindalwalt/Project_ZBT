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
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box my-5">
                                <div class="content">
                                    <div class="section-title ">
                                        <h4 class="rbt-title-style-3">Student Details</h4>
                                    </div>
                                    <div class="section-content">
                                        <x-utils.student_profile :enrollment="$enrollment" />
                                    </div>
                                </div>
                            </div>
                            <!-- Start Enrole Course  -->
                            {{-- <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb-5">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">{{ $student->name }}</h4>
                                        <link rel="stylesheet"
                                            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
                                            integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA="
                                            crossorigin="anonymous" />

                                        <div class="container-xl px-1 mt-4">

                                            k
                                            <div class="row">
                                                <div class="col-lg-4 mb-4">
                                                    <!-- Billing card 1-->
                                                    <div class="card h-100 border-start-lg border-start-primary">
                                                        <div class="card-body">
                                                            <div class="small text-muted">Current monthly bill</div>
                                                            <div class="h3">$20.00</div>
                                                            <a class="text-arrow-icon small" href="#!">
                                                                Switch to yearly billing
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-arrow-right">
                                                                    <line x1="5" y1="12" x2="19"
                                                                        y2="12"></line>
                                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-4">
                                                    <!-- Billing card 2-->
                                                    <div class="card h-100 border-start-lg border-start-secondary">
                                                        <div class="card-body">
                                                            <div class="small text-muted">Next payment due</div>
                                                            <div class="h3">July 15</div>
                                                            <a class="text-arrow-icon small text-secondary"
                                                                href="#!">
                                                                View payment history
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-arrow-right">
                                                                    <line x1="5" y1="12" x2="19"
                                                                        y2="12"></line>
                                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-4">
                                                    <!-- Billing card 3-->
                                                    <div class="card h-100 border-start-lg border-start-success">
                                                        <div class="card-body">
                                                            <div class="small text-muted">Current plan</div>
                                                            <div class="h3 d-flex align-items-center">Freelancer</div>
                                                            <a class="text-arrow-icon small text-success"
                                                                href="#!">
                                                                Upgrade plan
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-arrow-right">
                                                                    <line x1="5" y1="12" x2="19"
                                                                        y2="12"></line>
                                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Payment methods card-->
                                            <div class="card card-header-actions mb-4">
                                                <div class="card-header">
                                                    Payment Methods
                                                    <button class="btn btn-sm btn-primary" type="button">Add Payment
                                                        Method</button>
                                                </div>
                                                <div class="card-body px-0">
                                                    <!-- Payment method 1-->
                                                    <div
                                                        class="d-flex align-items-center justify-content-between px-4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fab fa-cc-visa fa-2x cc-color-visa"></i>
                                                            <div class="ms-4">
                                                                <div class="small">Visa ending in 1234</div>
                                                                <div class="text-xs text-muted">Expires 04/2024</div>
                                                            </div>
                                                        </div>
                                                        <div class="ms-4 small">
                                                            <div class="badge bg-light text-dark me-3">Default</div>
                                                            <a href="#!">Edit</a>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <!-- Payment method 2-->
                                                    <div
                                                        class="d-flex align-items-center justify-content-between px-4">
                                                        <div class="d-flex align-items-center">
                                                            <i
                                                                class="fab fa-cc-mastercard fa-2x cc-color-mastercard"></i>
                                                            <div class="ms-4">
                                                                <div class="small">Mastercard ending in 5678</div>
                                                                <div class="text-xs text-muted">Expires 05/2022</div>
                                                            </div>
                                                        </div>
                                                        <div class="ms-4 small">
                                                            <a class="text-muted me-3" href="#!">Make Default</a>
                                                            <a href="#!">Edit</a>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <!-- Payment method 3-->
                                                    <div
                                                        class="d-flex align-items-center justify-content-between px-4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fab fa-cc-amex fa-2x cc-color-amex"></i>
                                                            <div class="ms-4">
                                                                <div class="small">American Express ending in 9012
                                                                </div>
                                                                <div class="text-xs text-muted">Expires 01/2026</div>
                                                            </div>
                                                        </div>
                                                        <div class="ms-4 small">
                                                            <a class="text-muted me-3" href="#!">Make Default</a>
                                                            <a href="#!">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Billing history card-->
                                            <div class="card mb-4">
                                                <div class="card-header">Billing History</div>
                                                <div class="card-body p-0">
                                                    <!-- Billing history table-->
                                                    <div class="table-responsive table-billing-history">
                                                        <table class="table mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th class="border-gray-200" scope="col">
                                                                        Transaction ID</th>
                                                                    <th class="border-gray-200" scope="col">Date
                                                                    </th>
                                                                    <th class="border-gray-200" scope="col">Amount
                                                                    </th>
                                                                    <th class="border-gray-200" scope="col">Status
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>#39201</td>
                                                                    <td>06/15/2021</td>
                                                                    <td>$29.99</td>
                                                                    <td><span
                                                                            class="badge bg-light text-dark">Pending</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#38594</td>
                                                                    <td>05/15/2021</td>
                                                                    <td>$29.99</td>
                                                                    <td><span class="badge bg-success">Paid</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#38223</td>
                                                                    <td>04/15/2021</td>
                                                                    <td>$29.99</td>
                                                                    <td><span class="badge bg-success">Paid</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#38125</td>
                                                                    <td>03/15/2021</td>
                                                                    <td>$29.99</td>
                                                                    <td><span class="badge bg-success">Paid</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div> --}}
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

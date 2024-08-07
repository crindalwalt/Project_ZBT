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

                        <div class="col-lg-9 mb-5">
                            <!-- Enrollment details  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Enrollment Detail</h4>
                                    </div>

                                    <div class="section-content">
                                        <div class="container">
                                            <div class="main-body">
                                                <div class="row gutters-sm">
                                                    <div class="col-md-4 mb-3">

                                                        <div class="card ">
                                                            <ul class="list-group list-group-flush">
                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                    <h6 class="mb-0"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-globe mr-2 icon-inline">
                                                                            <circle cx="12" cy="12"
                                                                                r="10"></circle>
                                                                            <line x1="2" y1="12"
                                                                                x2="22" y2="12"></line>
                                                                            <path
                                                                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                                            </path>
                                                                        </svg>Payment Detail</h6>

                                                                </li>
                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                    <span class="text-secondary">payment status</span>
                                                                    <h6 class="mb-0">
                                                                        @if ($enrollment->payment_status == 'success')
                                                                            <div
                                                                                class="badge rounded-pill bg-success px-3">
                                                                                {{ $enrollment->payment_status }}
                                                                            </div>
                                                                        @elseif($enrollment->payment_status == 'pending')
                                                                            <div
                                                                                class="badge rounded-pill bg-secondary px-3">
                                                                                {{ $enrollment->payment_status }}
                                                                            </div>
                                                                        @elseif($enrollment->payment_status == 'declined')
                                                                            <div
                                                                                class="badge rounded-pill bg-danger px-3">
                                                                                {{ $enrollment->payment_status }}
                                                                            </div>
                                                                        @endif

                                                                    </h6>

                                                                </li>
                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                    <span class="text-secondary">payment Amount</span>
                                                                    <h6 class="mb-0">
                                                                        <div
                                                                            class="badge rounded-pill bg-secondary text-white px-3">
                                                                            ${{ $enrollment->course->discount_price }}
                                                                        </div>
                                                                    </h6>

                                                                </li>
                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                    <span class="text-secondary">payment Date</span>
                                                                    <h6 class="mb-0">
                                                                        <div
                                                                            class="badge rounded-pill bg-secondary text-white px-3">
                                                                            {{ \Carbon\Carbon::parse($enrollment->updated_at)->format('d D M Y h:i A') }}
                                                                        </div>
                                                                    </h6>

                                                                </li>



                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                    <a href="https://dashboard.stripe.com/dashboard"
                                                                        class="mb-0 btn btn-lg btn-primary ">visit
                                                                        Stripe</a>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card mb-3">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <h6 class="mb-0">Course name</h6>
                                                                    </div>
                                                                    <div class="col-sm-9 text-secondary">
                                                                        {{ $enrollment->course->title }}
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <h6 class="mb-0">duration</h6>
                                                                    </div>
                                                                    <div class="col-sm-9 text-secondary">
                                                                        {{ $enrollment->course->duration }} Months
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <h6 class="mb-0">Purchased at</h6>
                                                                    </div>
                                                                    <div class="col-sm-9 text-secondary">
                                                                        {{ \Carbon\Carbon::parse($enrollment->created_at)->format('D d M Y h:i A') }}
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <h6 class="mb-0">Enrollment status</h6>
                                                                    </div>
                                                                    <div class="col-sm-9 text-secondary">
                                                                        @if ($enrollment->enrollment_status == 'active')
                                                                            <div
                                                                                class="badge rounded-pill bg-success text-white px-3">
                                                                                {{ $enrollment->enrollment_status }}
                                                                            </div>
                                                                        @elseif($enrollment->enrollment_status == 'pending')
                                                                            <div
                                                                                class="badge rounded-pill bg-secondary text-white px-3">
                                                                                {{ $enrollment->enrollment_status }}
                                                                            </div>
                                                                        @elseif($enrollment->enrollment_status == 'expelled')
                                                                            <div
                                                                                class="badge rounded-pill bg-danger text-white px-3">
                                                                                {{ $enrollment->enrollment_status }}
                                                                            </div>
                                                                        @endif


                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <h6 class="mb-0">Batches Available</h6>
                                                                    </div>
                                                                    <div class="col-sm-9 text-secondary">
                                                                        {{ count($enrollment->course->batches) }}
                                                                        Batches
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
                            {{-- Enrollment batch selecting form  --}}
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box my-5">
                                <div class="content">
                                    <div class="section-title ">
                                        <h4 class="rbt-title-style-3">Enroll Student</h4>
                                    </div>
                                    {{-- @dd($enrollment->enrolled_students) --}}
                                    @if ($batches->isNotEmpty())
                                        <div class="section-content">


                                            <form action="{{  route("badge.student.enroll",$student->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="enrollment_id" value="{{ $enrollment->id }}">

                                                <div class="mb-3">
                                                    <label for="students" class="form-label">Select Students</label>
                                                    <select class="form-select w-100" id="students" name="batch">
                                                        @foreach ($batches as $item)
                                                            <option value="{{ $item->id }}">
                                                                {{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('student_id')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>



                                                <div class="mb-3">
                                                    <button type="submit"
                                                        class="mt-4 btn btn-lg btn-primary px-5 py-3 w-100">Add
                                                        Badge</button>
                                                </div>
                                            </form>


                                        </div>
                                    @else
                                        <div class="section-content">


                                            <div class="d-flex justify-content-between align-items-center p-3">
                                                <div>
                                                    <h4>There is no Batches currently available for {{ $enrollment->course->title }}</h4>
                                                    <a href="{{ route("badges.all") }}" class="btn btn-lg py-3 btn-primary px-4">Create new Batch</a>
                                                </div>

                                                </div>


                                        </div>
                                    @endif
                                </div>
                            </div>
                            {{-- Student profile component --}}
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box my-5">
                                <div class="content">
                                    <div class="section-title ">
                                        <h4 class="rbt-title-style-3">Student Details</h4>
                                    </div>
                                    {{-- @dd($enrollment->enrolled_students) --}}
                                    <div class="section-content">
                                        <x-utils.student_profile :student="$student" />
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

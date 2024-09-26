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
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb-5">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Create a new badges</h4>
                                        <form action="{{ route('badge.store') }}" method="POST">
                                            @csrf
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="mb-3 w-100 mx-3">
                                                    <label for="badgeName" class="form-label">Badge Name</label>
                                                    <input type="text" class="form-control" id="badgeName"
                                                        name="name">
                                                    @error('name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3 w-100 mx-3">
                                                    <label for="class_time" class="form-label">Choose Class Time</label>
                                                    <input type="time" class="form-control" id="class_time"
                                                        name="class_time">
                                                    @error('class_time')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="mb-3 w-100 mx-3">
                                                    <label for="course_select" class="form-label">Select Course</label>
                                                    <select class="form-select w-100" id="course_select" name="course_id">
                                                        @foreach ($courses as $item)
                                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('course_id')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3 w-100 mx-3">
                                                    <label for="teacher_select" class="form-label">Select Teacher</label>
                                                    <select class="form-select w-100" id="teacher_select" name="teacher_id">
                                                        @foreach ($teachers as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('teacher_id')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="my-3 w-100 mx-3">
                                                <button type="submit"
                                                    class="btn btn-lg btn-primary px-5 py-4 w-100">Add
                                                    Badge</button>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>
                            <!-- End Enrole Course  -->

                            <!-- Start Enrole Course  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">

                                </div>
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">All Batches </h4>
                                    </div>

                                    {{-- <div class="rbt-dashboard-table table-responsive mobile-table-750">
                                        <table class="rbt-table table table-borderless" id="ordersTable">
                                            <thead>
                                                <tr>
                                                    <th>Badge ID</th>
                                                    <th>Name</th>
                                                    <th>course</th>
                                                    <th>students</th>
                                                    <th>Class Time</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if ($badges)
                                                    @foreach ($badges as $item)
                                                        <tr>
                                                            <th>#00{{ $item->id }}</th>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->course->title }}</td>
                                                            <td>{{ count($item->badgeStudents) }}</td>
                                                            <td>
                                                                {{ Carbon\Carbon::parse($item->class_time)->format('H:i:s') }}
                                                            </td>

                                                            <td>
                                                                <a href="{{ route('teacher.badge.view', $item->id) }}"
                                                                    class="me-2 btn btn-sm btn-primary rounded-4">View
                                                                    students</a>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif

                                            </tbody>
                                        </table>
                                    </div> --}}

                                </div>
                                <div class="content">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="home-4" role="tabpanel" aria-labelledby="home-tab-4">
                                            <div class="row g-5">
                                                @if ($badges)
                                                    @foreach ($badges as $item)
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <div class="rbt-card variation-01 rbt-hover">
                                                            <div class="rbt-card-img">
                                                                <a href="{{ route('badge.create', $item->id) }}">
                                                                    <img src="{{ asset($item->course->image) }}" alt="Card image">
                                                                </a>
                                                            </div>
                                                            <div class="rbt-card-body">

                                                                <h4 class="rbt-card-title"><a href="{{ route('badge.create', $item->id) }}">{{ $item->name}}</a>
                                                                </h4>
                                                                <ul class="rbt-meta">
                                                                    <li><i class="feather-book"></i>{{ $item->course->title}}</li>

                                                                </ul>
                                                                <ul class="rbt-meta">
                                                                    <li><i class="feather-user-check"></i>{{ $item->teacher->name}}</li>

                                                                </ul>

                                                                <ul class="rbt-meta">
                                                                    <li><i class="feather-clock"></i>{{ Carbon\Carbon::parse($item->class_time)->format(' h:i A') }}</li>
                                                                    <li><i class="feather-users"></i>{{ count($item->badgeStudents) }} Students</li>
                                                                </ul>

                                                                {{-- <div class="rbt-progress-style-1 mb--20 mt--10">
                                                                    <div class="single-progress">
                                                                        <h6 class="rbt-title-style-2 mb--10">Complete</h6>
                                                                        <div class="progress">
                                                                            <div class="progress-bar wow fadeInLeft bar-color-success" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                                            </div>
                                                                            <span class="rbt-title-style-2 progress-number">100%</span>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                                <div class="rbt-card-bottom">

                                                                    <a class="rbt-btn btn-sm bg-primary-opacity w-100 text-center" href="{{ route('badge.create', $item->id) }}">View Class</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        {{-- <tr>
                                                            <th>#00{{ $item->id }}</th>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->course->title }}</td>
                                                            <td>{{ count($item->badgeStudents) }}</td>
                                                            <td>
                                                                {{ Carbon\Carbon::parse($item->class_time)->format('H:i:s') }}
                                                            </td>

                                                            <td>
                                                                <a href="{{ route('teacher.badge.view', $item->id) }}"
                                                                    class="me-2 btn btn-sm btn-primary rounded-4">View
                                                                    students</a>

                                                            </td>
                                                        </tr> --}}
                                                    @endforeach
                                                @endif
                                                <!-- Start Single Course  -->

                                                <!-- End Single Course  -->

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

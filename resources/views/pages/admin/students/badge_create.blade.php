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
                                        <h4 class="rbt-title-style-3">Manage Students for {{ $badge->name}}</h4>
                                    </div>


                                </div>
                            </div>
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Create Badges</h4>
                                    </div>
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                    @endif

                                    <form action="{{ route("badge.store.students", $badge->id)}}" method="post">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="students" class="form-label">Select Students</label>
                                            <select class="form-select w-100" id="students" name="student_id[]"
                                                multiple>
                                                @foreach ($students as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @error("student_id")
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>



                                        <div class="mb-3">
                                            <button type="submit" class="mt-4 btn btn-lg btn-primary px-5 py-3 w-100">Add
                                                Badge</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mt-4">
                                <div class="content">

                                </div>
                                <div class="content ">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">All Badges</h4>
                                    </div>

                                    <div class="rbt-dashboard-table table-responsive mobile-table-750">
                                        <table class="rbt-table table table-borderless" id="ordersTable">
                                            <thead>
                                                <tr>
                                                    <th>Badge ID</th>
                                                    <th>Name</th>
                                                    <th>Enrolled at</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if ($badge)
                                                    @foreach ($badge->badgeStudents as $item)
                                                        <tr>
                                                            <th>#00{{ $item->id }}</th>
                                                            <td>{{ $item->user->name }}</td>
                                                            <td>
                                                                {{ Carbon\Carbon::parse($item->created_at)->format('M d Y H:i A') }}
                                                            </td>

                                                            <td>
                                                                <a href="{{ route('badge.students.expel', $item->id) }}"
                                                                    class="me-2 btn btn-md py-3 px-4 btn-danger rounded-4">Expel from Batch</a>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif

                                            </tbody>
                                        </table>
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

</x-layouts.main_layout>

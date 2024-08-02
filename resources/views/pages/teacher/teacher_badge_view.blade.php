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
                            <x-utils.teacher-sidebar />
                            <!-- End Dashboard Sidebar  -->
                        </div>

                        <div class="col-lg-9">
                            <!-- Start Enrole Course  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb-5">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-1">{{ $badge->name }}</h4>
                                    </div>


                                </div>
                            </div>
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb-5">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Conduct Class Now</h4>
                                    </div>
                                    <form action="{{ route('meeting.store', $badge->id) }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="meeting_link" class="form-label">Paste Meeting Link</label>
                                            <input type="text" class="form-control" id="meeting_link"
                                                name="meeting_link">
                                            @error('meeting_link')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="rbt-btn-wrapper d-none d-xl-block mb-3">
                                            <button type="submit"
                                                class="rbt-btn  btn-gradient btn-sm hover-transform-none">
                                                <span data-text="Join Now">Start Class</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            {{-- Student info --}}
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">

                                </div>
                                <div class="content">


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
                                                                {{ Carbon\Carbon::parse($item->created_at)->format('M d Y H:i:s') }}
                                                            </td>

                                                            <td>
                                                                <button title="Feature disabled by your Admin"
                                                                    class="me-2 btn btn-md py-3 px-4 btn-danger rounded-4" style="cursor: not-allowed;">Expel
                                                                    from Batch</button>

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

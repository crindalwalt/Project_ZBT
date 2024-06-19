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
                    <!-- Start Dashboard Top  -->
                    <div class="rbt-dashboard-content-wrapper">
                        <div class="tutor-bg-photo bg_image bg_image--22 height-350"></div>
                        <!-- Start Tutor Information  -->
                        <div class="rbt-tutor-information">
                            <div class="rbt-tutor-information-left">
                                <div class="thumbnail rbt-avatars size-lg">
                                    <img src="assets/images/team/avatar.jpg" alt="Instructor">
                                </div>
                                <div class="tutor-content">
                                    <h5 class="title">John Due</h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rbt-tutor-information-right">
                                <div class="tutor-btn">
                                    <a class="rbt-btn btn-md hover-icon-reverse" href="create-course.html">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Create a New Course</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Tutor Information  -->
                    </div>
                    <!-- End Dashboard Top  -->

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
                                        <!-- <a class="btn btn-lg btn-primary px-5 py-3" href="{{ route("badge.create")}}">Create Badge</a> -->
                                    </div>


                                </div>
                            </div>
                            <!-- End Enrole Course  -->
                            <!-- Start Enrole Course  -->
                            @livewire("add-badge")
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
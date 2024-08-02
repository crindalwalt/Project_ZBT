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
                        <x-utils.teacher-sidebar />
                    </div>
                    <div class="col-lg-9">
                        <!-- Start Instructor Profile  -->
                        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                            <div class="content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">My Profile</h4>
                                </div>
                                <!-- Start Profile Row  -->
                                <div class="rbt-profile-row row row--15">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="rbt-profile-content b2">Registration Date</div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="rbt-profile-coteacher.profilentent b2">{{ \Carbon\Carbon::parse($teacher->created_at)->format("D d M y d @ H:i A") }}</div>
                                    </div>
                                </div>
                                <!-- End Profile Row  -->



                                <!-- Start Profile Row  -->
                                <div class="rbt-profile-row row row--15 mt--15">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="rbt-profile-content b2">Full Name</div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="rbt-profile-content b2">{{ $teacher->name }}</div>
                                    </div>
                                </div>
                                <!-- End Profile Row  -->

                                <!-- Start Profile Row  -->
                                <div class="rbt-profile-row row row--15 mt--15">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="rbt-profile-content b2">Username</div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="rbt-profile-content b2">#instructor-{{ $teacher->name }}</div>
                                    </div>
                                </div>
                                <!-- End Profile Row  -->

                                <!-- Start Profile Row  -->
                                <div class="rbt-profile-row row row--15 mt--15">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="rbt-profile-content b2">Email</div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="rbt-profile-content b2">{{  $teacher->email }}</div>
                                    </div>
                                </div>
                                <!-- End Profile Row  -->

                                <!-- Start Profile Row  -->
                                <div class="rbt-profile-row row row--15 mt--15">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="rbt-profile-content b2">Phone Number</div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="rbt-profile-content b2">{{ $teacher->phone }}</div>
                                    </div>
                                </div>
                                <!-- End Profile Row  -->

                                <!-- Start Profile Row  -->
                                <div class="rbt-profile-row row row--15 mt--15">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="rbt-profile-content b2">Status</div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="rbt-profile-content b2">
                                            <div style="background-color: rgb(111, 190, 111);padding:.3rem 1rem; display:inline-block; border-radius: 1rem;color:white;">Active</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Profile Row  -->

                                <!-- Start Profile Row  -->
                                <div class="rbt-profile-row row row--15 mt--15">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="rbt-profile-content b2">Admin Contact</div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="rbt-profile-content b2">In Case of any problem Contact the admin at <span class="text-primary">shahzadfarooqdev@gmail.com</span> or make a phone a call at <a href="tel:0307082484"> +923070825484</a> </div>
                                    </div>
                                </div>
                                <!-- End Profile Row  -->
                            </div>
                        </div>
                        <!-- End Instructor Profile  -->

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

<x-layouts.main_layout>


    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">
            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top rbt-breadcrumb-style-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="content text-center">

                                <div
                                    class="d-flex align-items-center flex-wrap justify-content-center mb--15 rbt-course-details-feature">
                                    <div class="feature-sin best-seller-badge">
                                        <span class="rbt-badge-2">
                                                <span class="image"><img
                                                        src="{{ asset("assets/images/icons/card-icon-1.png") }}"
                                                        alt="Best Seller Icon"></span> Bestseller
                                        </span>
                                    </div>
                                    <div class="feature-sin rating">
                                        <a href="#">4.8</a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="feature-sin total-rating">
                                        <a class="rbt-badge-4" href="#">215,475 rating</a>
                                    </div>
                                    <div class="feature-sin total-student">
                                        <span>616,029 students</span>
                                    </div>
                                </div>
                                <h2 class="title theme-gradient">{{ $course->title }}</h2>

                                <div class="rbt-author-meta mb--20 justify-content-center">
                                    <div class="rbt-avater">
                                        <a href="#">
                                            <img src="{{ asset("logo.png") }}" alt="Zaid bin Thabith Institude">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                        By <a href="profile.html">Team ZBT </a> In <a
                                            href="#">{{ $course->category->name }}</a>
                                    </div>
                                </div>

                                <ul class="rbt-meta">
                                    <li><i class="feather-calendar"></i>Last
                                        updated {{ $course->updated_at->diffForHumans() }}</li>
                                    <li><i class="feather-globe"></i>{{$course->language}}</li>
                                    <li><i class="feather-award"></i>Certified Course</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
        </div>
    </div>

    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="inner">
            <div class="container">
                <div class="col-lg-12">
                    <!-- Start Viedo Wrapper  -->
                    <a class="video-popup-with-text video-popup-wrapper text-center popup-video mb--15"
                       href="{{ $course->video }}">
                        <div class="video-content">
                            <img class="w-100 rbt-radius" src="{{ asset("$course->image") }}" alt="Video Images">
                            <div class="position-to-top">
                                <span class="rbt-btn rounded-player-2 with-animation">
                                        <span class="play-icon"></span>
                                </span>
                            </div>
                            <span class="play-view-text d-block color-white"><i class="feather-eye"></i> Preview this course</span>
                        </div>
                    </a>
                    <!-- End Viedo Wrapper  -->

                    <div class="row row--30 gy-5 pt--60">

                        <div class="col-lg-4">
                            <div class="course-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                                <div class="inner">
                                    <div class="content-item-content">
                                        <div
                                            class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="rbt-price">
                                                <span class="current-price">{{"$".$course->discount_price}}</span>
                                                <span class="off-price">{{"$".$course->regular_price}}</span>
                                            </div>
                                            <div class="discount-time">
                                                <span class="rbt-badge color-danger bg-color-danger-opacity"><i
                                                        class="feather-clock"></i> 3 days left!</span>
                                            </div>
                                        </div>

                                        <div class="buy-now-btn mt--15">
                                            <a class="rbt-btn btn-gradient icon-hover w-100 d-block text-center" href="{{ route("course.enrollment.buy",$course->slug) }}">
                                                <span class="btn-text">Enroll Now</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            </a>
                                        </div>

                                        <span class="subtitle"><i class="feather-rotate-ccw"></i> 14-Day Money-Back
                                                Guarantee</span>


                                        <div class="rbt-widget-details has-show-more">
                                            <ul class="has-show-more-inner-content rbt-course-details-list-wrapper">
                                                <li><span>Start Date</span><span
                                                        class="rbt-feature-value rbt-badge-5">{{ $course->start_date }}</span>
                                                </li>
                                                <li><span>Enrolled</span><span
                                                        class="rbt-feature-value rbt-badge-5">{{ "200" }}</span></li>
                                                <li><span>Duration</span><span
                                                        class="rbt-feature-value rbt-badge-5">{{ $course->duration }}</span>
                                                </li>

                                                </li>
                                                <li><span>Language</span><span
                                                        class="rbt-feature-value rbt-badge-5">{{ $course->language }}</span>
                                                </li>
                                                <li><span>Certificate</span><span class="rbt-feature-value rbt-badge-5">Yes</span>
                                                </li>

                                            </ul>
                                            <div class="rbt-show-more-btn">Show More</div>
                                        </div>

                                        <div class="social-share-wrapper mt--30 text-center">
                                            <div
                                                class="rbt-post-share d-flex align-items-center justify-content-center">
                                                <ul class="social-icon social-default transparent-with-border justify-content-center">
                                                    <li><a href="https://www.facebook.com/">
                                                            <i class="feather-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="https://www.twitter.com">
                                                            <i class="feather-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="https://www.instagram.com/">
                                                            <i class="feather-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="https://www.linkdin.com/">
                                                            <i class="feather-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr class="mt--20">
                                            <div class="contact-with-us text-center">
                                                <p>For details about the course</p>
                                                <p class="rbt-badge-2 mt--10 justify-content-center w-100"><i
                                                        class="feather-phone mr--5"></i> Call Us: <a href="#"><strong>+444
                                                            555 666 777</strong></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <!-- Start Course Details  -->
                            <div class="course-details-content">
                                <div class="rbt-inner-onepage-navigation sticky-top">
                                    <nav class="mainmenu-nav onepagenav">
                                        <ul class="mainmenu">
                                            <li class="current">
                                                <a href="#overview">Overview</a>
                                            </li>


                                            <li>
                                                <a href="#intructor">Intructor</a>
                                            </li>
                                            {{--                                            <li>--}}
                                            {{--                                                <a href="#review">Review</a>--}}
                                            {{--                                            </li>--}}
                                        </ul>
                                    </nav>
                                </div>

                                <!-- Start Course Feature Box  -->
                                <div class="rbt-course-feature-box overview-wrapper rbt-shadow-box mt--30 has-show-more"
                                     id="overview">
                                    <div class="rbt-course-feature-inner has-show-more-inner-content">
                                        <div class="section-title">
                                            <h4 class="rbt-title-style-3">What you'll learn</h4>
                                        </div>
                                        <div>
                                            {!! $course->description !!}
                                        </div>
                                    </div>
                                    <div class="rbt-show-more-btn">Show More</div>
                                </div>
                                <!-- End Course Feature Box  -->


                                {{--                                <!-- Start Course Feature Box  -->--}}
                                {{--                                <div class="rbt-course-feature-box rbt-shadow-box details-wrapper mt--30" id="details">--}}
                                {{--                                    <div class="row g-5">--}}
                                {{--                                        <!-- Start Feture Box  -->--}}
                                {{--                                        <div class="col-lg-6">--}}
                                {{--                                            <div class="section-title">--}}
                                {{--                                                <h4 class="rbt-title-style-3 mb--20">Requirements</h4>--}}
                                {{--                                            </div>--}}
                                {{--                                            <ul class="rbt-list-style-1">--}}
                                {{--                                                <li><i class="feather-check"></i>Become an advanced, confident, and modern--}}
                                {{--                                                    JavaScript developer from scratch.</li>--}}
                                {{--                                                <li><i class="feather-check"></i>Have an intermediate skill level of Python--}}
                                {{--                                                    programming.</li>--}}
                                {{--                                                <li><i class="feather-check"></i>Have a portfolio of various data analysis--}}
                                {{--                                                    projects.</li>--}}
                                {{--                                                <li><i class="feather-check"></i>Use the numpy library to create and manipulate--}}
                                {{--                                                    arrays.</li>--}}
                                {{--                                            </ul>--}}
                                {{--                                        </div>--}}
                                {{--                                        <!-- End Feture Box  -->--}}

                                {{--                                        <!-- Start Feture Box  -->--}}
                                {{--                                        <div class="col-lg-6">--}}
                                {{--                                            <div class="section-title">--}}
                                {{--                                                <h4 class="rbt-title-style-3 mb--20">Description</h4>--}}
                                {{--                                            </div>--}}
                                {{--                                            <ul class="rbt-list-style-1">--}}
                                {{--                                                <li><i class="feather-check"></i>Use the Jupyter Notebook Environment.--}}
                                {{--                                                    JavaScript developer from scratch.</li>--}}
                                {{--                                                <li><i class="feather-check"></i>Use the pandas module with Python to create and--}}
                                {{--                                                    structure data.</li>--}}
                                {{--                                                <li><i class="feather-check"></i>Have a portfolio of various data analysis--}}
                                {{--                                                    projects.</li>--}}
                                {{--                                                <li><i class="feather-check"></i>Create data visualizations using matplotlib and--}}
                                {{--                                                    the seaborn.</li>--}}
                                {{--                                            </ul>--}}
                                {{--                                        </div>--}}
                                {{--                                        <!-- End Feture Box  -->--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <!-- End Course Feature Box  -->--}}

                                <!-- Start Intructor Area  -->
                                <div class="rbt-instructor rbt-shadow-box intructor-wrapper mt--30" id="intructor">
                                    <div class="about-author border-0 pb--0 pt--0">
                                        <div class="section-title mb--30">
                                            <h4 class="rbt-title-style-3">Instructor</h4>
                                        </div>
                                        <div class="media align-items-center">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img src="{{ asset("logo.png") }}" alt="logo" class="img-fluid"
                                                         style="width: 200px;height: 200px">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="author-info">
                                                    <h5 class="title">
                                                        <a class="hover-flip-item-wrapper" href="author.html">B.M.
                                                            Rafekul Islam</a>
                                                    </h5>
                                                    <span class="b3 subtitle">Advanced Educator</span>
                                                    <ul class="rbt-meta mb--20 mt--10">
                                                        <li><i class="fa fa-star color-warning"></i>75,237 Reviews <span
                                                                class="rbt-badge-5 ml--5">4.4 Rating</span></li>
                                                        <li><i class="feather-users"></i>912,970 Students</li>
                                                    </ul>
                                                </div>
                                                <div class="content">
                                                    <p class="description">Team Zaid bin Thabit Institude consist of
                                                        expert and dedicated indiduals that will provide quranic
                                                        education for you</p>

                                                    <ul class="social-icon social-default icon-naked justify-content-start">
                                                        <li><a href="https://www.facebook.com/">
                                                                <i class="feather-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="https://www.twitter.com">
                                                                <i class="feather-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="https://www.instagram.com/">
                                                                <i class="feather-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="https://www.linkdin.com/">
                                                                <i class="feather-linkedin"></i>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Intructor Area  -->

                                {{--                                <!-- Start Edu Review List  -->--}}
                                {{--                                <div class="rbt-review-wrapper rbt-shadow-box review-wrapper mt--30" id="review">--}}
                                {{--                                    <div class="course-content">--}}
                                {{--                                        <div class="section-title">--}}
                                {{--                                            <h4 class="rbt-title-style-3">Review</h4>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="row g-5 align-items-center">--}}
                                {{--                                            <div class="col-lg-3">--}}
                                {{--                                                <div class="rating-box">--}}
                                {{--                                                    <div class="rating-number">5.0</div>--}}
                                {{--                                                    <div class="rating">--}}
                                {{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                        </svg>--}}
                                {{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                        </svg>--}}
                                {{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                        </svg>--}}
                                {{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                        </svg>--}}
                                {{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                        </svg>--}}
                                {{--                                                    </div>--}}
                                {{--                                                    <span class="sub-title">Course Rating</span>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="col-lg-9">--}}
                                {{--                                                <div class="review-wrapper">--}}
                                {{--                                                    <div class="single-progress-bar">--}}
                                {{--                                                        <div class="rating-text">--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <div class="progress">--}}
                                {{--                                                            <div class="progress-bar" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <span class="value-text">63%</span>--}}
                                {{--                                                    </div>--}}

                                {{--                                                    <div class="single-progress-bar">--}}
                                {{--                                                        <div class="rating-text">--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <div class="progress">--}}
                                {{--                                                            <div class="progress-bar" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <span class="value-text">29%</span>--}}
                                {{--                                                    </div>--}}

                                {{--                                                    <div class="single-progress-bar">--}}
                                {{--                                                        <div class="rating-text">--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <div class="progress">--}}
                                {{--                                                            <div class="progress-bar" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <span class="value-text">6%</span>--}}
                                {{--                                                    </div>--}}

                                {{--                                                    <div class="single-progress-bar">--}}
                                {{--                                                        <div class="rating-text">--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <div class="progress">--}}
                                {{--                                                            <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <span class="value-text">1%</span>--}}
                                {{--                                                    </div>--}}

                                {{--                                                    <div class="single-progress-bar">--}}
                                {{--                                                        <div class="rating-text">--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
                                {{--                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                                {{--                                                            </svg>--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <div class="progress">--}}
                                {{--                                                            <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <span class="value-text">1%</span>--}}
                                {{--                                                    </div>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <!-- End Edu Review List  -->--}}

                            </div>
                            <!-- End Course Details  -->

                            {{--                            <!-- Start Related Course  -->--}}
                            {{--                            <div class="related-course mt--60">--}}
                            {{--                                <div class="row g-5 align-items-end mb--40">--}}
                            {{--                                    <div class="col-lg-8 col-md-8 col-12">--}}
                            {{--                                        <div class="section-title">--}}
                            {{--                                            <span class="subtitle bg-pink-opacity">Top Course</span>--}}
                            {{--                                            <h4 class="title">More Course By <strong class="color-primary">Angela</strong></h4>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="col-lg-4 col-md-4 col-12">--}}
                            {{--                                        <div class="read-more-btn text-start text-md-end">--}}
                            {{--                                            <a class="rbt-btn rbt-switch-btn btn-border btn-sm" href="#">--}}
                            {{--                                                <span data-text="View All Course">View All Course</span>--}}
                            {{--                                            </a>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="row g-5">--}}
                            {{--                                    <!-- Start Single Card  -->--}}
                            {{--                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">--}}
                            {{--                                        <div class="rbt-card variation-01 rbt-hover">--}}
                            {{--                                            <div class="rbt-card-img">--}}
                            {{--                                                <a href="course-details.html">--}}
                            {{--                                                    <img src="assets/images/course/course-online-01.jpg" alt="Card image">--}}
                            {{--                                                    <div class="rbt-badge-3 bg-white">--}}
                            {{--                                                        <span>-40%</span>--}}
                            {{--                                                        <span>Off</span>--}}
                            {{--                                                    </div>--}}
                            {{--                                                </a>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="rbt-card-body">--}}
                            {{--                                                <div class="rbt-card-top">--}}
                            {{--                                                    <div class="rbt-review">--}}
                            {{--                                                        <div class="rating">--}}
                            {{--                                                            <i class="fas fa-star"></i>--}}
                            {{--                                                            <i class="fas fa-star"></i>--}}
                            {{--                                                            <i class="fas fa-star"></i>--}}
                            {{--                                                            <i class="fas fa-star"></i>--}}
                            {{--                                                            <i class="fas fa-star"></i>--}}
                            {{--                                                        </div>--}}
                            {{--                                                        <span class="rating-count"> (15 Reviews)</span>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <div class="rbt-bookmark-btn">--}}
                            {{--                                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i--}}
                            {{--                                                                class="feather-bookmark"></i></a>--}}
                            {{--                                                    </div>--}}
                            {{--                                                </div>--}}

                            {{--                                                <h4 class="rbt-card-title"><a href="course-details.html">React Front To Back</a>--}}
                            {{--                                                </h4>--}}

                            {{--                                                <ul class="rbt-meta">--}}
                            {{--                                                    <li><i class="feather-book"></i>12 Lessons</li>--}}
                            {{--                                                    <li><i class="feather-users"></i>50 Students</li>--}}
                            {{--                                                </ul>--}}

                            {{--                                                <p class="rbt-card-text">It is a long established fact that a reader will be--}}
                            {{--                                                    distracted.</p>--}}
                            {{--                                                <div class="rbt-author-meta mb--10">--}}
                            {{--                                                    <div class="rbt-avater">--}}
                            {{--                                                        <a href="#">--}}
                            {{--                                                            <img src="assets/images/client/avatar-02.png" alt="Sophia Jaymes">--}}
                            {{--                                                        </a>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <div class="rbt-author-info">--}}
                            {{--                                                        By <a href="profile.html">Angela</a> In <a href="#">Development</a>--}}
                            {{--                                                    </div>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="rbt-card-bottom">--}}
                            {{--                                                    <div class="rbt-price">--}}
                            {{--                                                        <span class="current-price">$60</span>--}}
                            {{--                                                        <span class="off-price">$120</span>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <a class="rbt-btn-link" href="course-details.html">Learn--}}
                            {{--                                                        More<i class="feather-arrow-right"></i></a>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <!-- End Single Card  -->--}}

                            {{--                                    <!-- Start Single Card  -->--}}
                            {{--                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">--}}
                            {{--                                        <div class="rbt-card variation-01 rbt-hover">--}}
                            {{--                                            <div class="rbt-card-img">--}}
                            {{--                                                <a href="course-details.html">--}}
                            {{--                                                    <img src="assets/images/course/course-online-02.jpg" alt="Card image">--}}
                            {{--                                                </a>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="rbt-card-body">--}}
                            {{--                                                <div class="rbt-card-top">--}}
                            {{--                                                    <div class="rbt-review">--}}
                            {{--                                                        <div class="rating">--}}
                            {{--                                                            <i class="fas fa-star"></i>--}}
                            {{--                                                            <i class="fas fa-star"></i>--}}
                            {{--                                                            <i class="fas fa-star"></i>--}}
                            {{--                                                            <i class="fas fa-star"></i>--}}
                            {{--                                                            <i class="fas fa-star"></i>--}}
                            {{--                                                        </div>--}}
                            {{--                                                        <span class="rating-count"> (15 Reviews)</span>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <div class="rbt-bookmark-btn">--}}
                            {{--                                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i--}}
                            {{--                                                                class="feather-bookmark"></i></a>--}}
                            {{--                                                    </div>--}}
                            {{--                                                </div>--}}
                            {{--                                                <h4 class="rbt-card-title"><a href="course-details.html">PHP Beginner Advanced</a>--}}
                            {{--                                                </h4>--}}
                            {{--                                                <ul class="rbt-meta">--}}
                            {{--                                                    <li><i class="feather-book"></i>12 Lessons</li>--}}
                            {{--                                                    <li><i class="feather-users"></i>50 Students</li>--}}
                            {{--                                                </ul>--}}

                            {{--                                                <p class="rbt-card-text">It is a long established fact that a reader will be--}}
                            {{--                                                    distracted.</p>--}}
                            {{--                                                <div class="rbt-author-meta mb--10">--}}
                            {{--                                                    <div class="rbt-avater">--}}
                            {{--                                                        <a href="#">--}}
                            {{--                                                            <img src="assets/images/client/avatar-02.png" alt="Sophia Jaymes">--}}
                            {{--                                                        </a>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <div class="rbt-author-info">--}}
                            {{--                                                        By <a href="profile.html">Angela</a> In <a href="#">Development</a>--}}
                            {{--                                                    </div>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="rbt-card-bottom">--}}
                            {{--                                                    <div class="rbt-price">--}}
                            {{--                                                        <span class="current-price">$60</span>--}}
                            {{--                                                        <span class="off-price">$120</span>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <a class="rbt-btn-link left-icon" href="course-details.html"><i--}}
                            {{--                                                            class="feather-shopping-cart"></i> Add To Cart</a>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <!-- End Single Card  -->--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <!-- End Related Course  -->--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

    <div class="rbt-related-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="section-title mb--30">
                <span class="subtitle bg-primary-opacity">More Similar Courses</span>
                <h4 class="title">Related Courses</h4>
            </div>
            <div class="row g-5">
                @foreach($similar_courses as $item)
                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route("course.detail",$course->slug) }}">
                                    <img src="{{ asset($item->image) }}" alt="Card image">
{{--                                    <div class="rbt-badge-3 bg-white">--}}
{{--                                        <span>-10%</span>--}}
{{--                                        <span>Off</span>--}}
{{--                                    </div>--}}
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <div class="rbt-card-top">
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (5 Reviews)</span>
                                    </div>
                                    <div class="rbt-bookmark-btn">
{{--                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i--}}
{{--                                                class="feather-bookmark"></i></a>--}}
                                    </div>
                                </div>
                                <h4 class="rbt-card-title"><a href="{{ route("course.detail",$item->slug) }}">{{ $item->title }}</a>
                                </h4>
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>English</li>
                                    <li><i class="feather-clock"></i>Start at {{ $item->created_at->diffForHumans() }}</li>
                                </ul>
{{--                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by--}}
{{--                                    the readable.</p>--}}

                                <div class="rbt-author-meta mb--20">
                                    <div class="rbt-avater">
                                        <a href="#">
                                            <img src="{{ asset("logo.png") }}" alt="Sophia Jaymes">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                        By <a href="{{ route("about") }}">Team ZBT</a> In <a href="#">{{ $item->category->name }}</a>
                                    </div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">${{ $item->discount_price }}</span>
                                        <span class="off-price">${{ $item->regular_price }}</span>
                                    </div>
                                    <a class="rbt-btn-link" href="{{ route("course.detail",$item->slug) }}">Learn
                                        More<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                @endforeach


            </div>
        </div>
    </div>

    <!-- Start Course Action Bottom  -->
    <div class="rbt-course-action-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title text-center text-md-start">
                        <h5 class="title mb--0">{{ $course->title }}</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt_sm--15">
                    <div class="course-action-bottom-right rbt-single-group">
                        <div class="rbt-single-list rbt-price large-size justify-content-center">
                            <span class="current-price color-primary">{{"$". $course->discount_price }}</span>
                            <span class="off-price">{{"$". $course->regular_price }}</span>
                        </div>
                        <div class="rbt-single-list action-btn">
                            <a class="rbt-btn btn-gradient hover-icon-reverse btn-md" href="#">
                                <span class="icon-reverse-wrapper">
                                <span class="btn-text">Purchase Now</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Action Bottom  -->
</x-layouts.main_layout>

<x-layouts.main_layout>

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-1 variation-2 height-750">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div class="content">
                        <div class="inner">
                            <div class="rbt-new-badge rbt-new-badge-one">
                                <span class="rbt-new-badge-icon">🏆</span> The Leader in Online Quranic Learning
                            </div>
                            <h1 class="title">The Largest <span class="color-primary">Online Learning</span> Platform
                                for Drive Your Career.</h1>
                            <p class="description">This template includes all the necessary pages of the onlineLorem.
                                And you can be build a <strong>education template easily</strong>.
                            </p>
                            <div class="slider-btn">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{ route("courses") }}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">View Course</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="content">
                        <div class="banner-card pb--60 swiper rbt-dot-bottom-center banner-swiper-active">
                            <div class="swiper-wrapper">
                                @foreach($swiperCards as $item)
                                    <!-- Start Single Card  -->
                                    <div class="swiper-slide">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route("course.detail",$item->slug) }}">
                                                    <img src="{{ asset($item->image) }}" alt="Card image">

                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 {{$item->language}}</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a
                                                        href="{{ route("course.detail",$item->slug) }}">{{ $item->title }}</a>
                                                </h4>
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
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <span class="current-price">${{ $item->discount_price }}</span>
                                                        <span class="off-price">${{ $item->regular_price }}</span>
                                                    </div>
                                                    <a class="rbt-btn-link"
                                                       href="{{ route("course.detail",$item->slug) }}">Learn More<i
                                                            class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                                @endforeach
                                {{--                                <!-- Start Single Card  -->--}}
                                {{--                                <div class="swiper-slide">--}}
                                {{--                                    <div class="rbt-card variation-01 rbt-hover">--}}
                                {{--                                        <div class="rbt-card-img">--}}
                                {{--                                            <a href="course-details.html">--}}
                                {{--                                                <img src="assets/images/course/course-01.jpg" alt="Card image">--}}
                                {{--                                                <div class="rbt-badge-3 bg-white">--}}
                                {{--                                                    <span>-40%</span>--}}
                                {{--                                                    <span>Off</span>--}}
                                {{--                                                </div>--}}
                                {{--                                            </a>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="rbt-card-body">--}}
                                {{--                                            <ul class="rbt-meta">--}}
                                {{--                                                <li><i class="feather-book"></i>12 Lessons</li>--}}
                                {{--                                                <li><i class="feather-users"></i>50 Students</li>--}}
                                {{--                                            </ul>--}}
                                {{--                                            <h4 class="rbt-card-title"><a href="course-details.html">React</a>--}}
                                {{--                                            </h4>--}}
                                {{--                                            <p class="rbt-card-text">It is a long established fact that a reader--}}
                                {{--                                                will be distracted.</p>--}}
                                {{--                                            <div class="rbt-review">--}}
                                {{--                                                <div class="rating">--}}
                                {{--                                                    <i class="fas fa-star"></i>--}}
                                {{--                                                    <i class="fas fa-star"></i>--}}
                                {{--                                                    <i class="fas fa-star"></i>--}}
                                {{--                                                    <i class="fas fa-star"></i>--}}
                                {{--                                                    <i class="fas fa-star"></i>--}}
                                {{--                                                </div>--}}
                                {{--                                                <span class="rating-count"> (15 Reviews)</span>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="rbt-card-bottom">--}}
                                {{--                                                <div class="rbt-price">--}}
                                {{--                                                    <span class="current-price">$70</span>--}}
                                {{--                                                    <span class="off-price">$120</span>--}}
                                {{--                                                </div>--}}
                                {{--                                                <a class="rbt-btn-link" href="course-details.html">Learn More<i--}}
                                {{--                                                        class="feather-arrow-right"></i></a>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <!-- End Single Card  -->--}}

                                {{--                                <!-- Start Single Card  -->--}}
                                {{--                                <div class="swiper-slide">--}}
                                {{--                                    <div class="rbt-card variation-01 rbt-hover">--}}
                                {{--                                        <div class="rbt-card-img">--}}
                                {{--                                            <a href="course-details.html">--}}
                                {{--                                                <img src="assets/images/course/course-online-01.jpg" alt="Card image">--}}
                                {{--                                                <div class="rbt-badge-3 bg-white">--}}
                                {{--                                                    <span>-40%</span>--}}
                                {{--                                                    <span>Off</span>--}}
                                {{--                                                </div>--}}
                                {{--                                            </a>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="rbt-card-body">--}}
                                {{--                                            <ul class="rbt-meta">--}}
                                {{--                                                <li><i class="feather-book"></i>12 Lessons</li>--}}
                                {{--                                                <li><i class="feather-users"></i>50 Students</li>--}}
                                {{--                                            </ul>--}}
                                {{--                                            <h4 class="rbt-card-title"><a href="course-details.html">React</a>--}}
                                {{--                                            </h4>--}}
                                {{--                                            <p class="rbt-card-text">It is a long established fact that a reader--}}
                                {{--                                                will be distracted.</p>--}}
                                {{--                                            <div class="rbt-review">--}}
                                {{--                                                <div class="rating">--}}
                                {{--                                                    <i class="fas fa-star"></i>--}}
                                {{--                                                    <i class="fas fa-star"></i>--}}
                                {{--                                                    <i class="fas fa-star"></i>--}}
                                {{--                                                    <i class="fas fa-star"></i>--}}
                                {{--                                                    <i class="fas fa-star"></i>--}}
                                {{--                                                </div>--}}
                                {{--                                                <span class="rating-count"> (15 Reviews)</span>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="rbt-card-bottom">--}}
                                {{--                                                <div class="rbt-price">--}}
                                {{--                                                    <span class="current-price">$70</span>--}}
                                {{--                                                    <span class="off-price">$120</span>--}}
                                {{--                                                </div>--}}
                                {{--                                                <a class="rbt-btn-link" href="course-details.html">Learn More<i--}}
                                {{--                                                        class="feather-arrow-right"></i></a>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <!-- End Single Card  -->--}}
                            </div>
                            <div class="rbt-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->


    <!-- Start Service Area -->
    <div class="rbt-categories-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-start mb--30">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title">
                        <h4 class="title">Popular Categories.</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">

                </div>
            </div>
            <div class="row g-5">
                @foreach($categories as $item)
                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <a class="rbt-cat-box rbt-cat-box-1 list-style" href="{{ route("courses") }}">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="{{ asset($item->illustration) }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title">{{ $item->name }}</h5>
                                    <div class="read-more-btn">
                                        <span class="rbt-btn-link">15 Courses<i class="feather-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Category Box Layout  -->
                @endforeach
                {{--                <!-- Start Category Box Layout  -->--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-6 col-12">--}}
                {{--                    <a class="rbt-cat-box rbt-cat-box-1 list-style" href="course-filter-one-toggle.html">--}}
                {{--                        <div class="inner">--}}
                {{--                            <div class="thumbnail">--}}
                {{--                                <img src="assets/images/category/image/graphic-design.jpg" alt="Icons Images">--}}
                {{--                            </div>--}}
                {{--                            <div class="content">--}}
                {{--                                <h5 class="title">Graphic Design</h5>--}}
                {{--                                <div class="read-more-btn">--}}
                {{--                                    <span class="rbt-btn-link">25 Courses<i class="feather-arrow-right"></i></span>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
                {{--                <!-- End Category Box Layout  -->--}}

                {{--                <!-- Start Category Box Layout  -->--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-6 col-12">--}}
                {{--                    <div class="rbt-cat-box rbt-cat-box-1 list-style">--}}
                {{--                        <div class="inner">--}}
                {{--                            <div class="thumbnail">--}}
                {{--                                <img src="assets/images/category/image/personal-development.jpg" alt="Icons Images">--}}
                {{--                            </div>--}}
                {{--                            <div class="content">--}}
                {{--                                <h5 class="title">Personal Development</h5>--}}
                {{--                                <div class="read-more-btn">--}}
                {{--                                    <span class="rbt-btn-link">14 Courses<i class="feather-arrow-right"></i></span>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <!-- End Category Box Layout  -->--}}

                {{--                <!-- Start Category Box Layout  -->--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-6 col-12">--}}
                {{--                    <a class="rbt-cat-box rbt-cat-box-1 list-style" href="course-filter-one-toggle.html">--}}
                {{--                        <div class="inner">--}}
                {{--                            <div class="thumbnail">--}}
                {{--                                <img src="assets/images/category/image/software.jpg" alt="Icons Images">--}}
                {{--                            </div>--}}
                {{--                            <div class="content">--}}
                {{--                                <h5 class="title">IT and Software</h5>--}}
                {{--                                <div class="read-more-btn">--}}
                {{--                                    <span class="rbt-btn-link">12 Courses<i class="feather-arrow-right"></i></span>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
                {{--                <!-- End Category Box Layout  -->--}}

                {{--                <!-- Start Category Box Layout  -->--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-6 col-12">--}}
                {{--                    <a class="rbt-cat-box rbt-cat-box-1 list-style" href="course-filter-one-toggle.html">--}}
                {{--                        <div class="inner">--}}
                {{--                            <div class="thumbnail">--}}
                {{--                                <img src="assets/images/category/image/sales.jpg" alt="Icons Images">--}}
                {{--                            </div>--}}
                {{--                            <div class="content">--}}
                {{--                                <h5 class="title">Sales Marketing</h5>--}}
                {{--                                <div class="read-more-btn">--}}
                {{--                                    <span class="rbt-btn-link">30 Courses<i class="feather-arrow-right"></i></span>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
                {{--                <!-- End Category Box Layout  -->--}}

                {{--                <!-- Start Category Box Layout  -->--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-6 col-12">--}}
                {{--                    <a class="rbt-cat-box rbt-cat-box-1 list-style" href="course-filter-one-toggle.html">--}}
                {{--                        <div class="inner">--}}
                {{--                            <div class="thumbnail">--}}
                {{--                                <img src="assets/images/category/image/arts.jpg" alt="Icons Images">--}}
                {{--                            </div>--}}
                {{--                            <div class="content">--}}
                {{--                                <h5 class="title">Art & Humanities</h5>--}}
                {{--                                <div class="read-more-btn">--}}
                {{--                                    <span class="rbt-btn-link">15 Courses<i class="feather-arrow-right"></i></span>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
                {{--                <!-- End Category Box Layout  -->--}}


            </div>

        </div>
    </div>
    <!-- End Service Area -->

    <!-- Start Course Area -->
    <div class="rbt-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--55 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-pink-opacity">Top Popular Course</span>
                        <h2 class="title">Most Popular <span class="color-primary">Courses</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="load-more-btn text-start text-md-end">
                        <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="course.html">
                            <span data-text="View All Course">View All Course</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">
                @foreach($courses as $item)
                    <!-- Start Single Course  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up"
                         data-sal-duration="800">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route("course.detail",$item->slug) }}">
                                    <img src="{{ asset($item->image) }}" alt="Card image">

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
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-bookmark-btn">
                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                    </div>
                                </div>

                                <h4 class="rbt-card-title"><a href="{{ route("course.detail",$item->slug) }}">React
                                        Front To Back</a>
                                </h4>

                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>{{ $item->language }}</li>
                                    <li><i class="feather-users"></i>50 Students</li>
                                </ul>


                                <div class="rbt-author-meta mb--10">
                                    <div class="rbt-avater">
                                        <a href="#">
                                            <img src="{{ asset("logo.png") }}" alt="Sophia Jaymes">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                        By <a href="#">Team ZBT</a> In <a href="#">{{$item->category->name}}</a>
                                    </div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">${{$item->discount_price}}</span>
                                        <span class="off-price">${{$item->regular_price}}</span>
                                    </div>
                                    <a class="rbt-btn-link" href="{{ route("course.detail",$item->slug) }}">Learn
                                        More<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                @endforeach
                {{--                <!-- Start Single Course  -->--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">--}}
                {{--                    <div class="rbt-card variation-01 rbt-hover">--}}
                {{--                        <div class="rbt-card-img">--}}
                {{--                            <a href="course-details.html">--}}
                {{--                                <img src="assets/images/course/classic-lms-02.jpg" alt="Card image">--}}
                {{--                                <div class="rbt-badge-3 bg-white">--}}
                {{--                                    <span>-40%</span>--}}
                {{--                                    <span>Off</span>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                        <div class="rbt-card-body">--}}
                {{--                            <div class="rbt-card-top">--}}
                {{--                                <div class="rbt-review">--}}
                {{--                                    <div class="rating">--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <span class="rating-count"> (15 Reviews)</span>--}}
                {{--                                </div>--}}
                {{--                                <div class="rbt-bookmark-btn">--}}
                {{--                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i--}}
                {{--                                            class="feather-bookmark"></i></a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <h4 class="rbt-card-title"><a href="course-details.html">PHP Beginner Advanced</a>--}}
                {{--                            </h4>--}}
                {{--                            <ul class="rbt-meta">--}}
                {{--                                <li><i class="feather-book"></i>12 Lessons</li>--}}
                {{--                                <li><i class="feather-users"></i>50 Students</li>--}}
                {{--                            </ul>--}}

                {{--                            <p class="rbt-card-text">It is a long established fact that a reader will be--}}
                {{--                                distracted.</p>--}}
                {{--                            <div class="rbt-author-meta mb--10">--}}
                {{--                                <div class="rbt-avater">--}}
                {{--                                    <a href="#">--}}
                {{--                                        <img src="assets/images/client/avatar-02.png" alt="Sophia Jaymes">--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="rbt-author-info">--}}
                {{--                                    By <a href="profile.html">Angela</a> In <a href="#">Development</a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="rbt-card-bottom">--}}
                {{--                                <div class="rbt-price">--}}
                {{--                                    <span class="current-price">$60</span>--}}
                {{--                                    <span class="off-price">$120</span>--}}
                {{--                                </div>--}}
                {{--                                <a class="rbt-btn-link left-icon" href="course-details.html"><i--}}
                {{--                                        class="feather-shopping-cart"></i> Add To Cart</a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <!-- End Single Course  -->--}}

                {{--                <!-- Start Single Course  -->--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">--}}
                {{--                    <div class="rbt-card variation-01 rbt-hover">--}}
                {{--                        <div class="rbt-card-img">--}}
                {{--                            <a href="course-details.html">--}}
                {{--                                <img src="assets/images/course/classic-lms-03.jpg" alt="Card image">--}}
                {{--                                <div class="rbt-badge-3 bg-white">--}}
                {{--                                    <span>-40%</span>--}}
                {{--                                    <span>Off</span>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                        <div class="rbt-card-body">--}}
                {{--                            <div class="rbt-card-top">--}}
                {{--                                <div class="rbt-review">--}}
                {{--                                    <div class="rating">--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <span class="rating-count"> (5 Reviews)</span>--}}
                {{--                                </div>--}}
                {{--                                <div class="rbt-bookmark-btn">--}}
                {{--                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i--}}
                {{--                                            class="feather-bookmark"></i></a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <h4 class="rbt-card-title"><a href="course-details.html">Angular Zero to Mastery</a>--}}
                {{--                            </h4>--}}
                {{--                            <ul class="rbt-meta">--}}
                {{--                                <li><i class="feather-book"></i>8 Lessons</li>--}}
                {{--                                <li><i class="feather-users"></i>30 Students</li>--}}
                {{--                            </ul>--}}
                {{--                            <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by--}}
                {{--                                the readable.</p>--}}

                {{--                            <div class="rbt-author-meta mb--20">--}}
                {{--                                <div class="rbt-avater">--}}
                {{--                                    <a href="#">--}}
                {{--                                        <img src="assets/images/client/avatar-03.png" alt="Sophia Jaymes">--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="rbt-author-info">--}}
                {{--                                    By <a href="profile.html">Slaughter</a> In <a href="#">Languages</a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="rbt-card-bottom">--}}
                {{--                                <div class="rbt-price">--}}
                {{--                                    <span class="current-price">$80</span>--}}
                {{--                                    <span class="off-price">$100</span>--}}
                {{--                                </div>--}}
                {{--                                <a class="rbt-btn-link" href="course-details.html">Learn--}}
                {{--                                    More<i class="feather-arrow-right"></i></a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <!-- End Single Course  -->--}}

                {{--                <!-- Start Single Card  -->--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">--}}
                {{--                    <div class="rbt-card variation-01 rbt-hover">--}}
                {{--                        <div class="rbt-card-img">--}}
                {{--                            <a href="course-details.html">--}}
                {{--                                <img src="assets/images/course/classic-lms-04.jpg" alt="Card image">--}}
                {{--                                <div class="rbt-badge-3 bg-white">--}}
                {{--                                    <span>-40%</span>--}}
                {{--                                    <span>Off</span>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                        <div class="rbt-card-body">--}}
                {{--                            <div class="rbt-card-top">--}}
                {{--                                <div class="rbt-review">--}}
                {{--                                    <div class="rating">--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <span class="rating-count"> (15 Reviews)</span>--}}
                {{--                                </div>--}}
                {{--                                <div class="rbt-bookmark-btn">--}}
                {{--                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i--}}
                {{--                                            class="feather-bookmark"></i></a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}

                {{--                            <h4 class="rbt-card-title"><a href="course-details.html">Web Front To Back</a>--}}
                {{--                            </h4>--}}
                {{--                            <ul class="rbt-meta">--}}
                {{--                                <li><i class="feather-book"></i>20 Lessons</li>--}}
                {{--                                <li><i class="feather-users"></i>40 Students</li>--}}
                {{--                            </ul>--}}
                {{--                            <p class="rbt-card-text">Web Js long fact that a reader will be distracted by--}}
                {{--                                the readable.</p>--}}
                {{--                            <div class="rbt-author-meta mb--20">--}}
                {{--                                <div class="rbt-avater">--}}
                {{--                                    <a href="#">--}}
                {{--                                        <img src="assets/images/client/avater-01.png" alt="Sophia Jaymes">--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="rbt-author-info">--}}
                {{--                                    By <a href="profile.html">Patrick</a> In <a href="#">Languages</a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}

                {{--                            <div class="rbt-card-bottom">--}}
                {{--                                <div class="rbt-price">--}}
                {{--                                    <span class="current-price">$60</span>--}}
                {{--                                    <span class="off-price">$120</span>--}}
                {{--                                </div>--}}
                {{--                                <a class="rbt-btn-link" href="course-details.html">Learn--}}
                {{--                                    More<i class="feather-arrow-right"></i></a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <!-- End Single Card  -->--}}

                {{--                <!-- Start Single Card  -->--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">--}}
                {{--                    <div class="rbt-card variation-01 rbt-hover">--}}
                {{--                        <div class="rbt-card-img">--}}
                {{--                            <a href="course-details.html">--}}
                {{--                                <img src="assets/images/course/classic-lms-05.jpg" alt="Card image">--}}
                {{--                                <div class="rbt-badge-3 bg-white">--}}
                {{--                                    <span>-40%</span>--}}
                {{--                                    <span>Off</span>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                        <div class="rbt-card-body">--}}
                {{--                            <div class="rbt-card-top">--}}
                {{--                                <div class="rbt-review">--}}
                {{--                                    <div class="rating">--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <span class="rating-count"> (15 Reviews)</span>--}}
                {{--                                </div>--}}
                {{--                                <div class="rbt-bookmark-btn">--}}
                {{--                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i--}}
                {{--                                            class="feather-bookmark"></i></a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <h4 class="rbt-card-title"><a href="course-details.html">SQL Beginner Advanced</a>--}}
                {{--                            </h4>--}}
                {{--                            <ul class="rbt-meta">--}}
                {{--                                <li><i class="feather-book"></i>12 Lessons</li>--}}
                {{--                                <li><i class="feather-users"></i>50 Students</li>--}}
                {{--                            </ul>--}}
                {{--                            <p class="rbt-card-text">It is a long established fact that a reader will be--}}
                {{--                                distracted--}}
                {{--                                by the readable.</p>--}}
                {{--                            <div class="rbt-author-meta mb--20">--}}
                {{--                                <div class="rbt-avater">--}}
                {{--                                    <a href="#">--}}
                {{--                                        <img src="assets/images/client/avatar-02.png" alt="Sophia Jaymes">--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="rbt-author-info">--}}
                {{--                                    By <a href="profile.html">Angela</a> In <a href="#">Development</a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="rbt-card-bottom">--}}
                {{--                                <div class="rbt-price">--}}
                {{--                                    <span class="current-price">$60</span>--}}
                {{--                                    <span class="off-price">$120</span>--}}
                {{--                                </div>--}}
                {{--                                <a class="rbt-btn-link left-icon" href="course-details.html"><i--}}
                {{--                                        class="feather-shopping-cart"></i> Add To Cart</a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <!-- End Single Card  -->--}}

                {{--                <!-- Start Single Card  -->--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">--}}
                {{--                    <div class="rbt-card variation-01 rbt-hover">--}}
                {{--                        <div class="rbt-card-img">--}}
                {{--                            <a href="course-details.html">--}}
                {{--                                <img src="assets/images/course/classic-lms-06.jpg" alt="Card image">--}}
                {{--                                <div class="rbt-badge-3 bg-white">--}}
                {{--                                    <span>-40%</span>--}}
                {{--                                    <span>Off</span>--}}
                {{--                                </div>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                        <div class="rbt-card-body">--}}
                {{--                            <div class="rbt-card-top">--}}
                {{--                                <div class="rbt-review">--}}
                {{--                                    <div class="rating">--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                        <i class="fas fa-star"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <span class="rating-count"> (5 Reviews)</span>--}}
                {{--                                </div>--}}
                {{--                                <div class="rbt-bookmark-btn">--}}
                {{--                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i--}}
                {{--                                            class="feather-bookmark"></i></a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <h4 class="rbt-card-title"><a href="course-details.html">JS Zero to Mastery</a>--}}
                {{--                            </h4>--}}
                {{--                            <ul class="rbt-meta">--}}
                {{--                                <li><i class="feather-book"></i>8 Lessons</li>--}}
                {{--                                <li><i class="feather-users"></i>30 Students</li>--}}
                {{--                            </ul>--}}
                {{--                            <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by--}}
                {{--                                the readable.</p>--}}

                {{--                            <div class="rbt-author-meta mb--20">--}}
                {{--                                <div class="rbt-avater">--}}
                {{--                                    <a href="#">--}}
                {{--                                        <img src="assets/images/client/avatar-03.png" alt="Sophia Jaymes">--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                                <div class="rbt-author-info">--}}
                {{--                                    By <a href="profile.html">Slaughter</a> In <a href="#">Languages</a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="rbt-card-bottom">--}}
                {{--                                <div class="rbt-price">--}}
                {{--                                    <span class="current-price">$80</span>--}}
                {{--                                    <span class="off-price">$100</span>--}}
                {{--                                </div>--}}
                {{--                                <a class="rbt-btn-link" href="course-details.html">Learn--}}
                {{--                                    More<i class="feather-arrow-right"></i></a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <!-- End Single Card  -->--}}
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Course Area -->


    {{--    <div class="rbt-testimonial-area bg-color-extra2 rbt-section-gap">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12 mb--60">--}}
    {{--                    <div class="section-title text-center">--}}
    {{--                        <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>--}}
    {{--                        <h2 class="title">Student's <span class="color-primary">Feedback</span></h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row g-5">--}}
    {{--                <!-- Start Single Testimonial  -->--}}
    {{--                <div class="col-lg-4 col-md-6 col-12">--}}
    {{--                    <div class="rbt-testimonial-box">--}}
    {{--                        <div class="inner">--}}
    {{--                            <div class="clint-info-wrapper">--}}
    {{--                                <div class="thumb">--}}
    {{--                                    <img src="assets/images/testimonial/client-01.png" alt="Clint Images">--}}
    {{--                                </div>--}}
    {{--                                <div class="client-info">--}}
    {{--                                    <h5 class="title">Martha Maldonado</h5>--}}
    {{--                                    <span>Executive Chairman <i>@ Google</i></span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="description">--}}
    {{--                                <p class="subtitle-3">After the launch, vulputate at sapien sit amet,--}}
    {{--                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>--}}
    {{--                                <div class="rating mt--20">--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- End Single Testimonial  -->--}}

    {{--                <!-- Start Single Testimonial  -->--}}
    {{--                <div class="col-lg-4 col-md-6 col-12">--}}
    {{--                    <div class="rbt-testimonial-box">--}}
    {{--                        <div class="inner">--}}
    {{--                            <div class="clint-info-wrapper">--}}
    {{--                                <div class="thumb">--}}
    {{--                                    <img src="assets/images/testimonial/client-02.png" alt="Clint Images">--}}
    {{--                                </div>--}}
    {{--                                <div class="client-info">--}}
    {{--                                    <h5 class="title">Michael D. Lovelady</h5>--}}
    {{--                                    <span>CEO <i>@ Google</i></span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="description">--}}
    {{--                                <p class="subtitle-3">Histudy education, vulputate at sapien sit amet,--}}
    {{--                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>--}}
    {{--                                <div class="rating mt--20">--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- End Single Testimonial  -->--}}

    {{--                <!-- Start Single Testimonial  -->--}}
    {{--                <div class="col-lg-4 col-md-6 col-12">--}}
    {{--                    <div class="rbt-testimonial-box">--}}
    {{--                        <div class="inner">--}}
    {{--                            <div class="clint-info-wrapper">--}}
    {{--                                <div class="thumb">--}}
    {{--                                    <img src="assets/images/testimonial/client-03.png" alt="Clint Images">--}}
    {{--                                </div>--}}
    {{--                                <div class="client-info">--}}
    {{--                                    <h5 class="title">Valerie J. Creasman</h5>--}}
    {{--                                    <span>Executive Designer <i>@ Google</i></span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="description">--}}
    {{--                                <p class="subtitle-3">Our educational, vulputate at sapien sit amet,--}}
    {{--                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>--}}
    {{--                                <div class="rating mt--20">--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                    <a href="#"><i class="fa fa-star"></i></a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- End Single Testimonial  -->--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


    {{--    <!-- Start Blog Style -->--}}
    {{--    <div class="rbt-rbt-blog-area rbt-section-gapTop bg-color-white">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row mb--55 g-5 align-items-end">--}}
    {{--                <div class="col-lg-6 col-md-6 col-12">--}}
    {{--                    <div class="section-title text-start">--}}
    {{--                        <span class="subtitle bg-pink-opacity">Top News</span>--}}
    {{--                        <h2 class="title">Have a look on <span class="color-primary">our News</span></h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-6 col-md-6 col-12">--}}
    {{--                    <div class="load-more-btn text-start text-md-end">--}}
    {{--                        <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="blog.html">--}}
    {{--                            <span data-text="View All News">View All News</span>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!-- Start Card Area -->--}}
    {{--            <div class="row g-5">--}}
    {{--                <!-- Start Single Card  -->--}}
    {{--                <div class="col-lg-4 col-md-6 col-sm-12 col-12">--}}
    {{--                    <div class="rbt-card variation-02 rbt-hover">--}}
    {{--                        <div class="rbt-card-img">--}}
    {{--                            <a href="course-details.html">--}}
    {{--                                <img src="assets/images/blog/blog-grid-01.jpg" alt="Card image"> </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="rbt-card-body">--}}
    {{--                            <h5 class="rbt-card-title"><a href="course-details.html">Is lms The Most Trending--}}
    {{--                                    Thing Now?</a></h5>--}}
    {{--                            <p class="rbt-card-text">It is a long established fact that a reader.</p>--}}
    {{--                            <div class="rbt-card-bottom">--}}
    {{--                                <a class="transparent-button" href="course-details.html">Learn--}}
    {{--                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- End Single Card  -->--}}

    {{--                <!-- Start Single Card  -->--}}
    {{--                <div class="col-lg-4 col-md-6 col-sm-12 col-12">--}}
    {{--                    <div class="rbt-card variation-02 rbt-hover">--}}
    {{--                        <div class="rbt-card-img">--}}
    {{--                            <a href="course-details.html">--}}
    {{--                                <img src="assets/images/blog/blog-grid-02.jpg" alt="Card image"> </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="rbt-card-body">--}}
    {{--                            <h5 class="rbt-card-title"><a href="course-details.html">Learn How More Money With--}}
    {{--                                    lms.</a></h5>--}}
    {{--                            <p class="rbt-card-text">It is a long established fact that a reader.</p>--}}
    {{--                            <div class="rbt-card-bottom">--}}
    {{--                                <a class="transparent-button" href="course-details.html">Learn--}}
    {{--                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- End Single Card  -->--}}

    {{--                <!-- Start Single Card  -->--}}
    {{--                <div class="col-lg-4 col-md-6 col-sm-12 col-12">--}}
    {{--                    <div class="rbt-card variation-02 rbt-hover">--}}
    {{--                        <div class="rbt-card-img">--}}
    {{--                            <a href="course-details.html">--}}
    {{--                                <img src="assets/images/blog/blog-grid-03.jpg" alt="Card image"> </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="rbt-card-body">--}}
    {{--                            <h5 class="rbt-card-title"><a href="course-details.html">Understand The Background Of--}}
    {{--                                    lms.</a></h5>--}}
    {{--                            <p class="rbt-card-text">It is a long established fact that a reader.</p>--}}
    {{--                            <div class="rbt-card-bottom">--}}
    {{--                                <a class="transparent-button" href="course-details.html">Learn--}}
    {{--                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- End Single Card  -->--}}
    {{--            </div>--}}
    {{--            <!-- End Card Area -->--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!-- End Blog Style -->--}}

    <div class="rbt-instagram-area bg-color-white rbt-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb--60">
                    <div class="section-title text-center">
                        <span class="subtitle bg-secondary-opacity">Books</span>
                        <h2 class="title">Check out some of our best seller <span class="color-primary">products</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row g-3">
                @foreach($products as $item)
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="{{ route("product.detail",$item->slug) }}">
                                <img src="{{ asset($item->media[0]->image) }}" alt="Book Image">
                                <span class="user-info">
                        <span class="icon"><i class="icon-instagram"></i></span>
                            <span class="user-name">{{ $item->title }}</span>
                            </span>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</x-layouts.main_layout>

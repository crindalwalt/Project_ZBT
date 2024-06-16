<x-layouts.main_layout>

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">
            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">All Courses</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">All Courses</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> {{$total_courses}} Courses
                                </a>
                            </div>

                            <p class="description">Courses that help beginner designers become true unicorns. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
            <!-- Start Course Top  -->
            <div class="rbt-course-top-wrapper mt--40">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                                <div class="rbt-short-item">
                                    <span class="course-index">Showing {{$total_courses}} results</span>
                                </div>
                            </div>
                        </div>

{{--                        <div class="col-lg-7 col-md-12">--}}
{{--                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">--}}
{{--                                <div class="rbt-short-item">--}}
{{--                                    <form action="#" class="rbt-search-style me-0">--}}
{{--                                        <input type="text" placeholder="Search Your Course..">--}}
{{--                                        <button type="submit" class="rbt-search-btn rbt-round-btn">--}}
{{--                                            <i class="feather-search"></i>--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}

{{--                                <div class="rbt-short-item">--}}
{{--                                    <div class="view-more-btn text-start text-sm-end">--}}
{{--                                        <button class="discover-filter-button discover-filter-activation rbt-btn btn-white btn-md radius-round">Filter<i class="feather-filter"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                    <!-- Start Filter Toggle  -->
{{--                    <div class="default-exp-wrapper default-exp-expand">--}}
{{--                        <div class="filter-inner">--}}
{{--                            <div class="filter-select-option">--}}
{{--                                <div class="filter-select rbt-modern-select">--}}
{{--                                    <span class="select-label d-block">Short By</span>--}}
{{--                                    <select>--}}
{{--                                        <option>Default</option>--}}
{{--                                        <option>Latest</option>--}}
{{--                                        <option>Popularity</option>--}}
{{--                                        <option>Trending</option>--}}
{{--                                        <option>Price: low to high</option>--}}
{{--                                        <option>Price: high to low</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="filter-select-option">--}}
{{--                                <div class="filter-select rbt-modern-select">--}}
{{--                                    <span class="select-label d-block">Short By Author</span>--}}
{{--                                    <select data-live-search="true" title="Select Author" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2">--}}
{{--                                        <option data-subtext="Experts">Janin Afsana</option>--}}
{{--                                        <option data-subtext="Experts">Joe Biden</option>--}}
{{--                                        <option data-subtext="Experts">Fatima Asrafy</option>--}}
{{--                                        <option data-subtext="Experts">Aysha Baby</option>--}}
{{--                                        <option data-subtext="Experts">Mohamad Ali</option>--}}
{{--                                        <option data-subtext="Experts">Jone Li</option>--}}
{{--                                        <option data-subtext="Experts">Alberd Roce</option>--}}
{{--                                        <option data-subtext="Experts">Zeliski Noor</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="filter-select-option">--}}
{{--                                <div class="filter-select rbt-modern-select">--}}
{{--                                    <span class="select-label d-block">Short By Offer</span>--}}
{{--                                    <select>--}}
{{--                                        <option>Free</option>--}}
{{--                                        <option>Paid</option>--}}
{{--                                        <option>Premium</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="filter-select-option">--}}
{{--                                <div class="filter-select rbt-modern-select">--}}
{{--                                    <span class="select-label d-block">Short By Category</span>--}}
{{--                                    <select data-live-search="true">--}}
{{--                                        <option>Web Design</option>--}}
{{--                                        <option>Graphic</option>--}}
{{--                                        <option>App Development</option>--}}
{{--                                        <option>Figma Design</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="filter-select-option">--}}
{{--                                <div class="filter-select">--}}
{{--                                    <span class="select-label d-block">Price Range</span>--}}

{{--                                    <div class="price_filter s-filter clear">--}}
{{--                                        <form action="#" method="GET">--}}
{{--                                            <div id="slider-range"></div>--}}
{{--                                            <div class="slider__range--output">--}}
{{--                                                <div class="price__output--wrap">--}}
{{--                                                    <div class="price--output">--}}
{{--                                                        <span>Price :</span><input type="text" id="amount">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="price--filter">--}}
{{--                                                        <a class="rbt-btn btn-gradient btn-sm" href="#">Filter</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- End Filter Toggle  -->
                </div>
            </div>
            <!-- End Course Top  -->
        </div>
    </div>

    <!-- Start Card Style -->
    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <!-- Start Card Area -->
            <div class="row g-5">
                @foreach($courses as $item)
                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="{{ route("course.detail",$item->slug) }}">
                                <img src="{{ $item->image }}" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover">
                                    <span class="btn-text">Read More</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route("course.detail",$item->slug) }}">{{ $item->title }}</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route("course.detail",$item->slug) }}"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
                @endforeach


            </div>
            <!-- End Card Area -->
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 mt--60">--}}
{{--                    <nav>--}}
{{--                        <ul class="rbt-pagination">--}}
{{--                            <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>--}}
{{--                            <li><a href="#">1</a></li>--}}
{{--                            <li class="active"><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <!-- End Card Style -->


</x-layouts.main_layout>

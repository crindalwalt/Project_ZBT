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
                                        <span class="btn-text">View Courses</span>
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
                                                <a href="{{ route("course.detail", $item->slug) }}">
                                                    <img src="{{ asset($item->image) }}" alt="Card image">

                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 {{$item->language}}</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a
                                                        href="{{ route("course.detail", $item->slug) }}">{{ $item->title }}</a>
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
                                                        href="{{ route("course.detail", $item->slug) }}">Learn More<i
                                                            class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                                @endforeach

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
                        <a class="rbt-cat-box rbt-cat-box-1 list-style"
                            href="{{ route("courses", ["catId" => $item->id]) }}">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="{{ asset($item->illustration) }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title">{{ $item->name }}</h5>
                                    <div class="read-more-btn">
                                        <span class="rbt-btn-link">{{ count($item->course)}} Courses<i
                                                class="feather-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Category Box Layout  -->
                @endforeach



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
                        <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="{{ route("courses")}}">
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
                                <a href="{{ route("course.detail", $item->slug) }}">
                                    <img src="{{ asset($item->image) }}" alt="Card image">

                                </a>
                            </div>
                            <div class="rbt-card-body">


                                <h4 class="rbt-card-title"><a href="{{ route("course.detail", $item->slug) }}">
                                    {{ $item->title }}
                                </a>
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
                                    <a class="rbt-btn-link" href="{{ route("course.detail", $item->slug) }}">Learn
                                        More<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                @endforeach

            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Course Area -->


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
                            <a href="{{ route("product.detail", $item->slug) }}">
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

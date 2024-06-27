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
                                <li class="rbt-breadcrumb-item active">All Products</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">All Products</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div>
                                    {{$total_products}} Products
                                </a>
                            </div>

                            <p class="description">Products that help beginner designers become true unicorns. </p>
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
                                    <span class="course-index">Showing {{$total_products}} results</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- End Course Top  -->
        </div>
    </div>

    <div class="rbt-shop-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                @foreach($products as $item)
                <!-- Start Single Product  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="rbt-default-card style-three rbt-hover">
                        <div class="inner">
                            <div class="content pt--0 pb--10">
                                <h2 class="title"><a href="{{ route("product.detail",$item->slug) }}">{{ $item->title }}</a></h2>

                                <span class="team-form">
                                    <span class="location">By Zaid bin Thabit Institude</span>
                                </span>
                            </div>
                            <div class="thumbnail"><a href="{{ route("product.detail",$item->slug) }}">
                                    <img src="{{ asset($item->media[0]->image ?? "no-image") }}"
                                                                                      alt="Book Image"></a>
                            </div>
                            <div class="content">

                           
                                <div class="rbt-price justify-content-center mt--10">
                                    <span class="current-price theme-gradient">${{$item->discount_price}}</span>
                                    <span class="off-price">${{ $item->regular_price }}</span>
                                </div>
                                <div class="addto-cart-btn mt--20">
                                    <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{ route("product.detail",$item->slug) }}">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Buy Now</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Product  -->
                @endforeach

            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>


</x-layouts.main_layout>

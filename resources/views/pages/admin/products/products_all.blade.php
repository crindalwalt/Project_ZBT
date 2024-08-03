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
                            <x-utils.admin-sidebar />
                        </div>

                        <div class="col-lg-9">
                            <!-- Start Enrole Course  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">

                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">My Products
                                        </h4>
                                    </div>

                                    <div class="advance-tab-button mb--30">
                                        <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="myTab-4" role="tablist">
                                            <li role="presentation">
                                                <a href="#" class="tab-button active" id="publish-tab-4" data-bs-toggle="tab" data-bs-target="#publish-4" role="tab" aria-controls="publish-4" aria-selected="true">
                                                    <span class="title">Published</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="publish-4" role="tabpanel" aria-labelledby="publish-tab-4">
                                            <div class="row g-5">
                                                @foreach($products as $item)
{{--                                                    @dd($item->media[0])--}}
                                                    <!-- Start Single Course  -->
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <div class="rbt-card variation-01 rbt-hover">
                                                            <div class="rbt-card-img">
                                                                <a href="{{ route("product.detail",$item->slug) }}">
                                                                    <img src="{{ asset($item->media[0]->image ??"dumm") }}" alt="Card image">
                                                                </a>
                                                            </div>
                                                            <div class="rbt-card-body">
                                                                <div class="rbt-card-top">
                                                                    <div class="rbt-review">

                                                                        <li class="rating-count"><i class="feather-anchor"></i><span class="ms-2">
                                                                                {{$item->quantity}} Stock available
                                                                            </span></li>
                                                                    </div>
                                                                    <div class="rbt-bookmark-btn">
                                                                        <a class="rbt-round-btn" title="view this course" href="{{ route("product.detail",$item->slug) }}"><i class="feather-eye"></i></a>
                                                                    </div>
                                                                </div>
                                                                <h4 class="rbt-card-title"><a href="{{ route("product.detail",$item->slug) }}">{{ $item->title }}</a>
                                                                </h4>
                                                                {{--  TODO: update student info--}}
                                                                <ul class="rbt-meta">
{{--                                                                    <li><i class="feather-calendar"></i>{{ $item->duration }} Months</li>--}}
                                                                    <li><i class="feather-users"></i>40 Orders</li>
                                                                </ul>

                                                                <div class="rbt-card-bottom d-flex flex-column justify-content-start">
                                                                    <div class="rbt-price">
                                                                        <span class="current-price">{{"$" .  $item->discount_price }}</span>
                                                                        <span class="off-price">{{"$" .  $item->regular_price  }}</span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                                        <a class="rbt-btn-link left-icon" href="{{ route("admin.product.edit",$item->slug) }}"><i class="feather-edit"></i> Edit</a>
                                                                        <a class="rbt-btn-link left-icon ms-2" href="{{ route("admin.product.destroy",$item->slug) }}"><i class="feather-delete"></i> Delete</a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Course  -->
                                                @endforeach

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

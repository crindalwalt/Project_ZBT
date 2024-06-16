<x-layouts.main_layout>


    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">{{ $product->title }}</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">{{ $product->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-single-product-area rbt-single-product rbt-section-gap">
        <div class="container">
            <div class="row g-5 row--30 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail">
                        <img class="w-100 radius-10" src="{{ asset($product->media[0]->image) }}"
                             alt="Product Images">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <div class="rbt-review justify-content-start">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-count">(75) - 100% Positive Reviews</span>
                        </div>

                        <h2 class="title mt--10 mb--10">{{ $product->title }}</h2>
                        <span class="rbt-label-style description">By: Zaid Bin Thabith Institude</span>

                        <div class="rbt-price justify-content-start mt--10">
                            <span class="current-price theme-gradient">${{ $product->discount_price }}</span>
                            <span class="off-price">${{ $product->regular_price }}</span>
                        </div>

                        <p class="mt--20">
                            {!! $product->description !!}
                        </p>

                        <div class="product-action mb--20">
{{--                            <div class="pro-qty"><input type="text" value="1"></div>--}}
                            <div class="addto-cart-btn">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="cart.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Order Now</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                                <a class=" ms-3 rbt-btn btn-gradient hover-icon-reverse" href="{{ route("addtocart",$product->slug) }}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Add to Cart</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <ul class="product-feature">
                            <li><span>Shipping Time:</span> Umer-u-aiyar Express</li>
                            <li><span>Note: </span> <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aut beatae consectetur ea esse facere fuga illum iste itaque maiores maxime minima perspiciatis quas, quis quisquam, repellat tempore totam veritatis?</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="rbt-product-description rbt-section-gapBottom bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <ul class="nav nav-tabs tab-button-style-2" id="myTab" role="tablist">

                        <li class="nav-item" role="presentation">
                            <a href="#" class="tab-button active" id="profile-tab-4" data-bs-toggle="tab"
                               data-bs-target="#profile-4" role="tab" aria-controls="profile-tab-4"
                               aria-selected="true">
                                <span class="title">Reviews</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">


                        <div class="product-description-content tab-pane fade active show" id="profile-4"
                             role="tabpanel"
                             aria-labelledby="profile-tab-4">

                            {{-- DONE: product reviews looping--}}
                            <ul class="comment-list">
                                @foreach($product->reviews as $item)
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="single-comment">
                                                <div class="comment-img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                         fill="currentColor" class="bi bi-person-check"
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                                        <path
                                                            d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                                                    </svg>
                                                </div>
                                                <div class="comment-inner">
                                                    <h6 class="commenter">
                                                        <a href="#">{{ $item->user->name }}</a>
                                                    </h6>
                                                    <div class="comment-meta">
                                                        <div
                                                            class="time-spent">{{ $item->created_at->diffForHumans() }}</div>
                                                    </div>
                                                    <div class="notification-text d-flex align-items-center mb--30">
                                                        <h6 class="mb--0 fontWeight600 title"> Rated</h6>
                                                        <div class="rbt-review justify-content-start">
                                                            <div class="rating">
{{--                                                                @dd($item)--}}
                                                                @for($index = 0; $index < $item->rating; $index++)
                                                                <i class="fas fa-star"></i>
                                                                @endfor
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
{{--                                                                <i class="fas fa-star"></i>--}}
                                                            </div>
                                                        </div>
                                                    </div>
{{--                                                    <div class="rbt-review justify-content-start mb--20">--}}
{{--                                                        @if($item->liked == "true")--}}
{{--                                                            <div--}}
{{--                                                                style="width: 40px;height: 40px;border-radius: 50%;border: 1px solid black;display: flex;align-items: center;justify-content: center;color: green"--}}
{{--                                                                class="circle-for-thumbsup d-flex justify-items-center align-items-center">--}}
{{--                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"--}}
{{--                                                                     height="24" fill="currentColor"--}}
{{--                                                                     class="bi bi-hand-thumbs-up-fill"--}}
{{--                                                                     viewBox="0 0 16 16">--}}
{{--                                                                    <path--}}
{{--                                                                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>--}}
{{--                                                                </svg>--}}
{{--                                                            </div>--}}
{{--                                                        @else--}}
{{--                                                            <div--}}
{{--                                                                style="width: 40px;height: 40px;border-radius: 50%;border: 1px solid black;display: flex;align-items: center;justify-content: center;color: red"--}}
{{--                                                                class="circle-for-thumbsup d-flex justify-items-center align-items-center">--}}
{{--                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"--}}
{{--                                                                     height="24" fill="currentColor"--}}
{{--                                                                     class="bi bi-hand-thumbs-down-fill"--}}
{{--                                                                     viewBox="0 0 16 16">--}}
{{--                                                                    <path--}}
{{--                                                                        d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.38 1.38 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51q.205.03.443.051c.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.9 1.9 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2 2 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.2 3.2 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.8 4.8 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591"/>--}}
{{--                                                                </svg>--}}
{{--                                                            </div>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}
                                                    <div class="comment-text">
                                                        <p class="b2">
                                                            {{ $item->review }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>

                            <!-- Start Product Comment Form  -->
                            <div class="rbt-comment-form mt--50 rbt-shadow-box">
                                <div class="comment-form-inner">
                                    <h3 class="title">Add Review</h3>

                                </div>
                                <form class="comment-form-style-1 position-relative" action="{{ route("user.product.review",$product->id) }}" method="POST">
                                    @csrf
                                    <p class="comment-note mb--20">Your Valueable Feedback might help someone with their
                                        decision</p>
                                    <h6 class="mb--0 fontWeight600 title">Your Rating</h6>

                                    <div class="notification-text d-flex align-items-center mb--30">
                                        <style>
                                            .rating {
                                                unicode-bidi: bidi-override;
                                                direction: rtl;
                                                text-align: center;
                                            }

                                            .rating input {
                                                display: none;
                                            }

                                            .rating label {
                                                font-size: 40px;
                                                color: #ccc;
                                                cursor: pointer;
                                            }

                                            .rating input:checked ~ label {
                                                color: #f90;
                                            }

                                        </style>

                                        <div class="rating">
                                            <input type="radio" id="star5" name="rating" value="5"/>
                                            <label for="star5" title="5 stars">&#9733;</label>
                                            <input type="radio" id="star4" name="rating" value="4"/>
                                            <label for="star4" title="4 stars">&#9733;</label>
                                            <input type="radio" id="star3" name="rating" value="3"/>
                                            <label for="star3" title="3 stars">&#9733;</label>
                                            <input type="radio" id="star2" name="rating" value="2"/>
                                            <label for="star2" title="2 stars">&#9733;</label>
                                            <input type="radio" id="star1" name="rating" value="1"/>
                                            <label for="star1" title="1 star">&#9733;</label>
                                        </div>

                                        <script defer>
                                            const stars = document.querySelectorAll('.rating input');

                                            stars.forEach(star => {
                                                // star.style.display = "none";
                                                star.addEventListener('click', function() {
                                                    const rating = this.value;
                                                    console.log('Selected rating:', rating);
                                                });
                                            });

                                        </script>

                                    </div>

                                    <div class="row row--10">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                @if(auth()->check())
                                                <label for="name">Reviewing as @ <b> {{ auth()->user()->name }}</b></label>
                                                @else
                                                    <label for="name">Login to Review ( <a href="/login">Login</a>)</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-12 my-2">
                                            <div class="form-group">
                                                <label for="message">Leave a Reply</label>
                                                <textarea id="message" name="review"></textarea>
                                                @error("review")
                                                <small class="d-block mt_dec--5"><i
                                                        class="feather-info"></i> {{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="comment-form-cookies-consent mb--30">
                                                <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                                       type="checkbox" value="yes">
                                                <label for="wp-comment-cookies-consent">Save my name, email, and
                                                    website in this browser for the next time I comment.</label>
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="rbt-btn btn-gradient hover-icon-reverse">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Post Reviews</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>

                                </form>


                            </div>
                            <!-- End Product Comment Form  -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--TODO: similar 3 books grid --}}
    <div class="rbt-related-product rbt-section-gapBottom bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--50">
                        <span class="subtitle bg-secondary-opacity">Related Book</span>
                        <h2 class="title">Similar Books.</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @foreach($randomProducts as $item)
                    <!-- Start Single Product  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-default-card style-three rbt-hover">
                            <div class="inner">
                                <div class="content pt--0 pb--10">
                                    <h2 class="title"><a
                                            href="{{ route("product.detail",$item->slug) }}">{{ $item->title }}</a></h2>

                                    <span class="team-form">
                                    <span class="location">By ZBT institude</span>
                                </span>
                                </div>
                                <div class="thumbnail">
                                    <a href="single-product.html"><img
                                            src="{{ asset($item->media[0]->image) }}"
                                            alt="Histudy Book Image"></a>
                                </div>
                                <div class="content">

                                    <div class="rbt-review justify-content-center">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count">(15) - 100% Positive Reviews</span>
                                    </div>
                                    <div class="rbt-price justify-content-center mt--10">
                                        <span class="current-price theme-gradient">${{ $item->discount_price }}</span>
                                        <span class="off-price">${{ $item->regular_price }}</span>
                                    </div>
                                    <div class="addto-cart-btn mt--20">
                                        <a class="rbt-btn btn-gradient hover-icon-reverse"
                                           href="{{ route("product.detail",$item->slug) }}">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">View Details</span>
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

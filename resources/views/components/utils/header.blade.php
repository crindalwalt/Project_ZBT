<div>
    <header class="rbt-header rbt-header-9">
        <div class="rbt-sticky-placeholder"></div>


        <!-- Start Header Top -->
        <div class="rbt-header-middle position-relative rbt-header-mid-1  bg-color-white rbt-border-bottom">
            <div class="container">
                <div class="rbt-header-sec align-items-center ">

                    <div class="rbt-header-sec-col rbt-header-left">
                        <div class="rbt-header-content">
                            <!-- Start Header Information List  -->
                            <div class="header-info">
                                <ul class="rbt-dropdown-menu switcher-language">
                                    <li class="has-child-menu">
                                        <a href="#">
                                            <img class="left-image" src="{{ asset("assets/images/icons/en-us.png") }}"
                                                alt="Language Images">
                                            <span class="menu-item">English</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Header Information List  -->

                            <!-- Start Header Information List  -->
                            <div class="header-info">
                                <ul class="rbt-dropdown-menu currency-menu">
                                    <li class="has-child-menu">
                                        <a href="#">
                                            <span class="menu-item">USD</span>
                                            <i class="right-icon feather-chevron-down"></i>
                                        </a>
                                        <ul class="sub-menu hover-reverse">
                                            <li>
                                                <a href="#">
                                                    <span class="menu-item">USD</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Header Information List  -->
                        </div>
                    </div>

                    <div class="rbt-header-sec-col rbt-header-center d-none d-md-block">
                        <div class="rbt-header-content">
                            <div class="header-info">
                                <div class="rbt-search-field">
                                    <div class="search-field">
                                        <input type="text" placeholder="Search Course">
                                        <button class="rbt-round-btn serach-btn" type="submit"><i
                                                class="feather-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rbt-header-sec-col rbt-header-right">
                        <div class="rbt-header-content">
                            <div class="header-info">
                                <ul class="quick-access">
                                    <li>
                                        <a class="d-none d-xl-block rbt-cart-sidenav-activation" href="#"><i
                                                class="feather-shopping-cart"></i>Cart</a>
                                        <a class="d-block d-xl-none rbt-cart-sidenav-activation" href="#"><i
                                                class="feather-shopping-cart"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="header-info">
                                <ul class="quick-access">
                                    @if(auth()->check())
                                        <li class="account-access rbt-user-wrapper right-align-dropdown d-none d-xl-block">
                                            <a href="#"><i class="feather-user"></i>

                                                {{auth()->user()->name}}

                                            </a>
                                            <div class="rbt-user-menu-list-wrapper">
                                                <div class="inner">
                                                    <div class="rbt-admin-profile">
                                                        <div class="admin-thumbnail">
                                                            <img src="{{ asset("assets/images/team/avatar.jpg") }}"
                                                                alt="User Images">
                                                        </div>
                                                        <div class="admin-info">
                                                            <span class="name">{{ auth()->user()->name }}</span>
                                                            <a class="rbt-btn-link color-primary" href="profile.html">View
                                                                Profile</a>
                                                        </div>
                                                    </div>
                                                    <ul class="user-list-wrapper">
                                                        <li>
                                                            <a href="instructor-dashboard.html">
                                                                <i class="feather-home"></i>
                                                                <span>My Dashboard</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="feather-bookmark"></i>
                                                                <span>Bookmark</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="instructor-enrolled-courses.html">
                                                                <i class="feather-shopping-bag"></i>
                                                                <span>Enrolled Courses</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="instructor-wishlist.html">
                                                                <i class="feather-heart"></i>
                                                                <span>Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="instructor-reviews.html">
                                                                <i class="feather-star"></i>
                                                                <span>Reviews</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="instructor-my-quiz-attempts.html">
                                                                <i class="feather-list"></i>
                                                                <span>My Quiz Attempts</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="instructor-order-history.html">
                                                                <i class="feather-clock"></i>
                                                                <span>Order History</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="instructor-quiz-attempts.html">
                                                                <i class="feather-message-square"></i>
                                                                <span>Question & Answer</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <hr class="mt--10 mb--10">
                                                    <ul class="user-list-wrapper">
                                                        <li>
                                                            <a href="#">
                                                                <i class="feather-book-open"></i>
                                                                <span>Getting Started</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <hr class="mt--10 mb--10">
                                                    <ul class="user-list-wrapper">
                                                        <li>
                                                            <a href="instructor-settings.html">
                                                                <i class="feather-settings"></i>
                                                                <span>Settings</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html">
                                                                <i class="feather-log-out"></i>
                                                                <span>Logout</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                    @else
                                        <li class="account-access rbt-user-wrapper right-align-dropdown d-none d-xl-block">
                                            <a href="{{ route("login") }}"><i class="feather-user"></i>

                                                Login / Register

                                            </a>
                                        </li>

                                    @endif

                                    @if(auth()->check())
                                        <li class="access-icon rbt-user-wrapper right-align-dropdown d-block d-xl-none">
                                            <a class="rbt-round-btn" href="#"><i class="feather-user"></i></a>
                                            <div class="rbt-user-menu-list-wrapper">
                                                <div class="inner">
                                                    <div class="rbt-admin-profile">
                                                        <div class="admin-thumbnail">
                                                            <img src="{{ asset("assets/images/team/avatar.jpg") }}"
                                                                alt="User Images">
                                                        </div>
                                                        <div class="admin-info">
                                                            <span class="name">{{ auth()->user()->name }}</span>
                                                            <a class="rbt-btn-link color-primary" href="profile.html">View
                                                                Profile</a>
                                                        </div>
                                                    </div>
                                                    <ul class="user-list-wrapper">
                                                        <li>
                                                            <a href="instructor-dashboard.html">
                                                                <i class="feather-home"></i>
                                                                <span>My Dashboard</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="feather-bookmark"></i>
                                                                <span>Bookmark</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="instructor-enrolled-courses.html">
                                                                <i class="feather-shopping-bag"></i>
                                                                <span>Enrolled Courses</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="instructor-wishlist.html">
                                                                <i class="feather-heart"></i>
                                                                <span>Wishlist</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="instructor-reviews.html">
                                                                <i class="feather-star"></i>
                                                                <span>Reviews</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="instructor-my-quiz-attempts.html">
                                                                <i class="feather-list"></i>
                                                                <span>My Quiz Attempts</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="instructor-order-history.html">
                                                                <i class="feather-clock"></i>
                                                                <span>Order History</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="instructor-quiz-attempts.html">
                                                                <i class="feather-message-square"></i>
                                                                <span>Question & Answer</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <hr class="mt--10 mb--10">
                                                    <ul class="user-list-wrapper">
                                                        <li>
                                                            <a href="#">
                                                                <i class="feather-book-open"></i>
                                                                <span>Getting Started</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <hr class="mt--10 mb--10">
                                                    <ul class="user-list-wrapper">
                                                        <li>
                                                            <a href="instructor-settings.html">
                                                                <i class="feather-settings"></i>
                                                                <span>Settings</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html">
                                                                <i class="feather-log-out"></i>
                                                                <span>Logout</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                    @else
                                        <li class="access-icon rbt-user-wrapper right-align-dropdown d-block d-xl-none">
                                            <a class="rbt-round-btn" href="{{ route("login") }}"><i
                                                    class="feather-user"></i></a>

                                        </li>

                                    @endif


                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <div class="rbt-header-wrapper  header-not-transparent header-sticky">
            <div class="container">
                <div class="mainbar-row rbt-navigation-end align-items-center">
                    <div class="header-left rbt-header-content">
                        <div class="header-info">
                            <div class="logo">
                                <a href="{{ route("home") }}">
                                    <img src="{{ asset("assets/long-logo.png") }}" alt="Education Logo Images">
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="rbt-main-navigation d-none d-xl-block">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="{{ route("home") }}">Home</a>
                                </li>

                                <li class="with-megamenu has-menu-child-item">
                                    <a href="{{ route("courses") }}">Courses</a>
                                </li>

                                <li class="with-megamenu has-menu-child-item">
                                    <a href="{{ route("products") }}">Products</a>
                                </li>

                                <li class="with-megamenu has-menu-child-item">
                                    <a href="{{ route("about") }}">About Us </a>
                                </li>

                                <li class="with-megamenu has-menu-child-item">
                                    <a href="{{ route("contact") }}">Contact Us</a>
                                </li>


                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        @if(auth()->check())
                            <div class="rbt-btn-wrapper d-none d-xl-block">
                                <a class="rbt-btn  btn-gradient btn-sm hover-transform-none" href="{{ route("account") }}">
                                    <span data-text="Join Now">My Account</span>
                                </a>
                            </div>
                        @else
                            <div class="rbt-btn-wrapper d-none d-xl-block">
                                <a class="rbt-btn   btn-gradient btn-sm hover-transform-none" href="{{ route("login") }}">
                                    <span data-text="Join Now">Login / Signup</span>
                                </a>
                            </div>
                        @endif
                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button rbt-round-btn">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->
                    </div>
                </div>
            </div>
        </div>


        <a class="rbt-close_side_menu" href="javascript:void(0);"></a>
    </header>


    <!-- Mobile Menu Section -->
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <a href="{{ route("home") }}">
                            <img src="{{ asset("assets/images/logo/logo.png") }}" alt="Education Logo Images">
                        </a>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                <p class="description">Histudy is a education website template. You can customize all.</p>
                <ul class="navbar-top-left rbt-information-list justify-content-start">
                    <li>
                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                    </li>
                    <li>
                        <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                    </li>
                </ul>
            </div>

            <nav class="mainmenu-nav">
                <ul class="mainmenu">

                    <li class="with-megamenu  position-static">
                        <a href="{{ route("home") }}">Home</a>
                    </li>

                    <li class="with-megamenu ">
                        <a href="{{ route("courses") }}">Courses</a>
                    </li>

                    <li class="with-megamenu ">
                        <a href="{{ route("products") }}">Products</a>
                    </li>

                    <li class="with-megamenu ">
                        <a href="{{ route("courses") }}">About Us </a>
                    </li>

                    <li class="with-megamenu ">
                        <a href="{{ route("courses") }}">Contact Us</a>
                    </li>


                </ul>
            </nav>

            <div class="mobile-menu-bottom">

                @if(auth()->check())
                    @if(auth()->user()->role == 0)
                        <div class="rbt-btn-wrapper mb--20">
                            <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center"
                                href="{{ route("admin_dashboard") }}">
                                <span>My Account</span>
                            </a>
                        </div>
                    @endif
                    <div class="rbt-btn-wrapper mb--20">
                        <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center"
                            href="{{ route("account") }}">
                            <span>My Account</span>
                        </a>
                    </div>
                @else
                    <div class="rbt-btn-wrapper mb--20">
                        <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center"
                            href="{{ route("login") }}">
                            <span>Login / Signup</span>
                        </a>
                    </div>
                @endif
                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Find With Us</span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
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
    {{-- <x-utils.cart />--}}
    @livewire('cart-box')

</div>
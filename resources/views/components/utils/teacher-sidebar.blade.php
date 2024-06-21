<!-- Start Dashboard Sidebar  -->
<div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
    <div class="inner">
        <div class="content-item-content">

            <div class="rbt-default-sidebar-wrapper">

                {{-- teacher --}}



                <div class="section-title mt--40 mb--20">
                    <h6 class="rbt-title-style-2">Instructor</h6>
                </div>
                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="instructor-dashboard.html"><i class="feather-home"></i><span>Dashboard</span></a>
                        </li>
                        <li><a href="instructor-profile.html"><i class="feather-user"></i><span>My
                                    Profile</span></a>
                        </li>
                        <li><a href="{{ route("teacher.badges") }}"><i
                                    class="feather-book-open"></i><span>Badge</span></a>
                        </li>
                        {{-- <li><a href="{{ route("teacher.students") }}"><i
                                    class="feather-book-open"></i><span>Students</span></a>
                        </li> --}}
                        {{-- <li><a href="instructor-wishlist.html"><i
                                        class="feather-bookmark"></i><span>Wishlist</span></a>
                            </li>
                            <li><a href="instructor-reviews.html"><i class="feather-star"></i><span>Reviews</span></a>
                            </li>
                            <li><a href="instructor-my-quiz-attempts.html"><i class="feather-help-circle"></i><span>My
                                        Quiz
                                        Attempts</span></a>
                            </li>
                            <li><a href="{{ route('order.index') }}"><i class="feather-shopping-bag"></i><span>Order
                                        History</span></a>
                            </li> --}}
                        {{--
                            <li><a href="{{ route('all_students') }}"><i class="feather-shopping-bag"></i><span>All
                                        Students</span></a>
                            </li> --}}
                    </ul>
                </nav>


                <div class="section-title mt--40 mb--20">
                    <h6 class="rbt-title-style-2">User</h6>
                </div>

                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="instructor-settings.html"><i class="feather-settings"></i><span>Settings</span></a>
                        </li>
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <a class="log" :href="route('logout')"
                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                <i class="feather-log-out"></i>
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
<!-- End Dashboard Sidebar  -->

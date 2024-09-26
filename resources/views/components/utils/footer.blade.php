<!-- Start Footer aera -->
<footer class="rbt-footer footer-style-1 bg-color-white overflow-hidden">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <div class="logo">
                            <a href="{{ route("home") }}">
                                <img src="{{ asset("assets/long-logo.png") }}" alt="Edu-cause">
                            </a>
                        </div>

                        <p class="description mt--20">Zaid Bin Thabit Institute: A Worldwide Beacon of Knowledge, connecting every heart to the Divine Message. Discover the Quran’s wisdom and master the Arabic language
                        </p>

                        <ul class="social-icon social-default justify-content-start">
                            <li><a href="https://www.facebook.com/profile.php?id=61551851218514&mibextid=ZbWKwL">
                                    <i class="feather-facebook"></i>
                                </a>
                            </li>
                            {{-- <li><a href="https://www.twitter.com">
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
                            </li> --}}
                        </ul>

                        <div class="contact-btn mt--30">
                            <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="{{ route("contact") }}">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Contact With Us</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Categories</h5>
                        <ul class="ft-link">

                            <li>
                                <a href="{{ route("courses", ["catId" => 1]) }}">Understanding Quran</a>
                            </li>

                            <li>
                                <a href="{{ route("courses", ["catId" => 2]) }}">Arabic (Spoken)</a>
                            </li>


                            <li>
                                <a href="{{ route("courses", ["catId" => 3]) }}">Arabic (Grammer)</a>
                            </li>
                            <li>
                                <a href="{{ route("courses", ["catId" => 4]) }}">Tajweed</a>
                            </li>
                            <li>
                                <a href="{{ route("courses", ["catId" => 5]) }}">Quranic Recitation</a>
                            </li>
                            <li>
                                <a href="{{ route("courses", ["catId" => 6]) }}">Understanding Quran English</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Important Links</h5>
                        <ul class="ft-link">
                            <li>
                                <a href="{{ route("contact") }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{ route("contact") }}">Become Teacher</a>
                            </li>
                            <li>
                                <a href="{{ route("about") }}">About us</a>
                            </li>

                            <li>
                                <a href="{{ route("products") }}">Products</a>
                            </li>
                            <li>
                                <a href="{{ route("courses") }}">Course</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Get Contact</h5>
                        <ul class="ft-link">
                            <li><span>Phone:</span> <a href="#">(+92)322 676 7409</a></li>
                            <li><span>E-mail:</span> <a href="mailto:info@zbti.net">info@zbti.net</a></li>
                        </ul>


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
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-style-1 ptb--20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <p class="rbt-link-hover text-center text-lg-start">Copyright © 2023 <a href="https://shahzadfarooq.com">Shahzad Farooq.</a> All Rights Reserved for ZBT Institude</p>
                </div>
                {{-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <ul class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="privacy-policy.html">Privacy policy</a></li>
                        <li><a href="subscription.html">Subscription</a></li>
                        <li><a href="login.html">Login & Register</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>
<!-- End Footer aera -->
<div class="rbt-progress-parent">
    <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

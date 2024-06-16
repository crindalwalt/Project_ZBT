<x-layouts.main_layout>

    <main class="rbt-main-wrapper">

        <div class="rbt-create-course-area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-8">
                        <form action="{{ route("admin.product.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="rbt-accordion-style rbt-accordion-01 rbt-accordion-06 accordion">
                                <div class="accordion" id="tutionaccordionExamplea1">
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="accOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#accCollapseOne" aria-expanded="true"
                                                    aria-controls="accCollapseOne">Product Info
                                            </button>
                                        </h2>
                                        <div id="accCollapseOne" class="accordion-collapse collapse show"
                                             aria-labelledby="accOne" data-bs-parent="#tutionaccordionExamplea1">
                                            <div class="accordion-body card-body">
                                                <!-- Start Course Field Wrapper  -->
                                                <div class="rbt-course-field-wrapper rbt-default-form">
                                                    {{-- course info--}}
                                                    <div class="course-field mb--15">
                                                        <label for="field-1">Product Name</label>
                                                        <input id="field-1" type="text" placeholder="New Course"
                                                               name="title">
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Title
                                                            should be 30 charecter.</small>
                                                        @error("title")
                                                        <small class="d-block mt_dec--5 text-danger"><i
                                                                class="feather-info"></i>{{ $message }}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="course-field mb--15">
                                                        <label for="aboutCourse">Product Description</label>
                                                        <textarea id="editor" rows="50" name="description"></textarea>
                                                        <small class="d-block  mt-3"><i class="feather-info"></i> HTML
                                                            or plain text allowed, no emoji This field is used for search,
                                                            so please be descriptive!</small>
                                                        @error("description")
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> {{$message}}</small>
                                                        @enderror
                                                    </div>



                                                    {{-- course price--}}
                                                    <div class="course-field mb--15 edu-bg-gray">
                                                        <h6>Course Price</h6>
                                                        <div class="rbt-course-settings-content">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="advance-tab-button advance-tab-button-1">
                                                                        <ul class="rbt-default-tab-button nav nav-tabs"
                                                                            id="coursePrice" role="tablist">
                                                                            <li class="nav-item w-100" role="presentation">
                                                                                <a href="#" class="active" id="paid-tab"
                                                                                   data-bs-toggle="tab"
                                                                                   data-bs-target="#paid" role="tab"
                                                                                   aria-controls="paid"
                                                                                   aria-selected="true">
                                                                                    <span>Paid</span>
                                                                                </a>
                                                                            </li>
                                                                            {{--                                                                                <li class="nav-item w-100" role="presentation">--}}
                                                                            {{--                                                                                    <a href="#" id="free-tab"--}}
                                                                            {{--                                                                                       data-bs-toggle="tab"--}}
                                                                            {{--                                                                                       data-bs-target="#free" role="tab"--}}
                                                                            {{--                                                                                       aria-controls="free"--}}
                                                                            {{--                                                                                       aria-selected="false">--}}
                                                                            {{--                                                                                        <span>Free</span>--}}
                                                                            {{--                                                                                    </a>--}}
                                                                            {{--                                                                                </li>--}}
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <div class="tab-content">

                                                                        <div
                                                                            class="tab-pane fade advance-tab-content-1 active show"
                                                                            id="paid" role="tabpanel"
                                                                            aria-labelledby="paid-tab">

                                                                            <div class="course-field mb--15">
                                                                                <label for="regularPrice-1">Regular Price
                                                                                    ($)</label>
                                                                                <input id="regularPrice-1" type="number"
                                                                                       placeholder="$ Regular Price" name="regular_price">
                                                                                <small class="d-block mt_dec--5"><i
                                                                                        class="feather-info"></i> The Product
                                                                                    Price Includes Your Author Fee.</small>
                                                                                @error("regular_price")
                                                                                <small class="d-block mt_dec--5"><i
                                                                                        class="feather-info"></i> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="course-field mb--15">
                                                                                <label for="regularPrice-1">Discount Price
                                                                                    ($)</label>
                                                                                <input id="regularPrice-1" type="number"
                                                                                       placeholder="$ Regular Price" name="discount_price">
                                                                                <small class="d-block mt_dec--5"><i
                                                                                        class="feather-info"></i> The Product
                                                                                    Price Includes Your Author Fee.</small>
                                                                                @error("discount_price")
                                                                                <small class="d-block mt_dec--5"><i
                                                                                        class="feather-info"></i> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>



                                                                        </div>


                                                                        <div class="tab-pane fade advance-tab-content-1"
                                                                             id="free" role="tabpanel"
                                                                             aria-labelledby="free-tab">
                                                                            <div class="course-field">
                                                                                <p class="b3">This Course is free for
                                                                                    everyone.</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course-field mb--15">
                                                        <label for="field-1">Product Quantity</label>
                                                        <input id="field-1" type="text" placeholder="e.g 50"
                                                               name="quantity">
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Title
                                                            should be 30 charecter.</small>
                                                        @error("quantity")
                                                        <small class="d-block mt_dec--5 text-danger"><i
                                                                class="feather-info"></i>{{ $message }}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="course-field mb--20">
                                                        <h6>Choose Categories</h6>
                                                        <div
                                                            class="rbt-modern-select bg-transparent height-45 w-100 mb--10">
                                                            <select class="w-100" data-live-search="true"
                                                                    title="Search Course Category."
                                                                    multiple data-size="7" data-actions-box="true"
                                                                    data-selected-text-format="count > 2">
                                                                @foreach($categories as $item)
                                                                    <option value="{{ $item }}">
                                                                        {{ $item }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="course-field mb--20">
                                                        <h6>Product Images</h6>
                                                        <div class="rbt-create-course-thumbnail upload-area">
                                                            <div class="upload-area">
                                                                <div class="brows-file-wrapper" data-black-overlay="9">
                                                                    <!-- actual upload which is hidden -->
                                                                    <input name="image[]" id="createinputfile"
                                                                           type="file" class="inputfile" multiple />
                                                                    <img id="createfileImage"
                                                                         src="{{ asset("assets/images/others/thumbnail-placeholder.svg") }}"
                                                                         alt="file image">
                                                                    <!-- our custom upload button -->
                                                                    <label class="d-flex" for="createinputfile"
                                                                           title="No File Choosen">
                                                                        <i class="feather-upload"></i>
                                                                        <span class="text-center">Choose a File</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <small><i class="feather-info"></i> <b>Size:</b> 700x430 pixels, <b>File
                                                                Support:</b> JPG, JPEG, PNG, GIF, WEBP</small>
                                                        @error("image")
                                                        <small><i class="feather-info"></i>{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="course-field mb--15">
                                                        <label for="field-1">Product Status</label>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked name="status" value="active">
                                                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked for Active</label>
                                                        </div>

                                                        @error("title")
                                                        <small class="d-block mt_dec--5 text-danger"><i
                                                                class="feather-info"></i>{{ $message }}</small>
                                                        @enderror
                                                    </div>



                                                </div>
                                                <!-- End Course Field Wrapper  -->
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>

                            <div class="mt--10 row g-5">

                                <div class="col-lg-12">
                                    <button class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center" type="submit">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Add Product</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="col-lg-4">
                        <div
                            class="rbt-create-course-sidebar course-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                            <div class="inner">
                                <div class="section-title mb--30">
                                    <h4 class="title">Course Upload Tips</h4>
                                </div>
                                <div class="rbt-course-upload-tips">
                                    <ul class="rbt-list-style-1">
                                        <li><i class="feather-check"></i> Set the Course Price option or make it free.
                                        </li>
                                        <li><i class="feather-check"></i> Standard size for the course thumbnail is
                                            700x430.
                                        </li>
                                        <li><i class="feather-check"></i> Video section controls the course overview
                                            video.
                                        </li>
                                        <li><i class="feather-check"></i> Course Builder is where you create & organize
                                            a course.
                                        </li>
                                        <li><i class="feather-check"></i> Add Topics in the Course Builder section to
                                            create lessons, quizzes, and assignments.
                                        </li>
                                        <li><i class="feather-check"></i> Prerequisites refers to the fundamental
                                            courses to complete before taking this particular course.
                                        </li>
                                        <li><i class="feather-check"></i> Information from the Additional Data section
                                            shows up on the course single page.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Start Modal Area  -->
        <div class="rbt-default-modal modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="inner rbt-default-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="modal-title mb--20" id="exampleModalLabel">Add Topic</h5>
                                    <div class="course-field mb--20">
                                        <label for="modal-field-1">Topic Name</label>
                                        <input id="modal-field-1" type="text">
                                        <small><i class="feather-info"></i> Topic titles are displayed publicly wherever
                                            required. Each topic may contain one or more lessons, quiz and assignments.</small>
                                    </div>
                                    <div class="course-field mb--20">
                                        <label for="modal-field-2">Topic Summary</label>
                                        <textarea id="modal-field-2"></textarea>
                                        <small><i class="feather-info"></i> Add a summary of short text to prepare
                                            students for the activities for the topic. The text is shown on the course
                                            page beside the tooltip beside the topic name.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-circle-shape"></div>
                    <div class="modal-footer pt--30">
                        <button type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Area  -->


        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <div class="footer-style-2 ptb--60 bg-color-white">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-12">
                        <div class="inner text-center">

                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo.png" alt="Logo images">
                                </a>
                            </div>
                            <!-- Social icone Area -->
                            <ul class="social-icon social-default">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <!-- End -->
                            <div class="text mt--20">
                                <p>© 2023 <a target="_blank" href="https://themeforest.net/user/rbt-themes/portfolio">Rainbow-Themes</a>.
                                    All
                                    Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

</x-layouts.main_layout>

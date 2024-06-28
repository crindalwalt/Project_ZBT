<x-layouts.main_layout>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Class: {{ $badge->name }}</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('account') }}">Home</a></li>
                             <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">
                                <a href="{{ route("account") }}">Account</a>
                            </li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">{{ $badge->name }}</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .r-card {
            background-color: rgba(245, 245, 245, 0.877);
            padding: 1rem;
            border: 1px transparent rgb(44, 41, 41);
            border-radius: 1.7rem;
            color: #333333;
        }
    </style>
    <!-- End Breadcrumb Area -->
    <div class="my-account-section bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row g-5">
                        {{-- Class Content Goes Here --}}
                        <div class="col-md-6">
                            <img class="img-fluid" style="width: 50rem; height: 30rem; border-radius: 1rem;"
                            src="{{ asset($badge->course->image) }}"
                            alt="course image">
                        </div>
                        <div class="col-md-6">
                            <div class="content">
                                <h2>{{ $badge->course->title }}</h2>
                                <hr>
                                <div class="r-card my-4 ">
                                    <div class="d-flex justify-content-start align-items-center flex-wrap">
                                        <div class="p-3 d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-clipboard-check-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                                <path
                                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                            </svg>
                                            <div class="ms-2">
                                                Badge:
                                            </div>
                                        </div>
                                        <div class="ms-3 p-3">
                                            {{ $badge->name }}
                                        </div>
                                    </div>
                                </div>
                                <div class="r-card my-4 ">
                                    <div class="d-flex justify-content-start align-items-center flex-wrap">
                                        <div class="p-3 d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0" />
                                            </svg>
                                            <div class="ms-2">
                                                Teacher:
                                            </div>
                                        </div>
                                        <div class="ms-3 p-3">
                                            {{ $badge->teacher->name }}
                                        </div>
                                    </div>
                                </div>
                                <div class="r-card my-4 ">
                                    <div class="d-flex justify-content-start align-items-center flex-wrap">
                                        <div class="p-3 d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5m2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.04 8.04 0 0 0 .86 5.387M11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.04 8.04 0 0 0-3.527-3.527" />
                                            </svg>
                                            <div class="ms-2">
                                                Class Time:
                                            </div>
                                        </div>
                                        <div class="ms-3 p-3">
                                            {{ Carbon\Carbon::parse($badge->class_time)->format('h:i A') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12">
                    <!-- Start Enrole Course  -->
                    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                        <div class="content">

                        </div>
                        <div class="content">
                            <div class="section-title">
                                <h4 class="rbt-title-style-3">Previous Classes Held</h4>
                            </div>

                            <div class="rbt-dashboard-table table-responsive mobile-table-750">
                                <table class="rbt-table table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Started at</th>
                                            <th>Class link</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if ($badge->meetings)
                                            @foreach ($badge->meetings as $item)
                                                <tr>
                                                    <th>#00{{ $item->id }}</th>
                                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('M d Y H:i:A') }}
                                                    </td>
                                                    <td>
                                                        <div class="rbt-btn-wrapper d-none d-xl-block">
                                                            <a class="rbt-btn  btn-gradient btn-sm hover-transform-none"
                                                                href="{{ $item->link }}" target="_blank">
                                                                <span data-text="Join Now">Click to Join</span>
                                                            </a>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- End Enrole Course  -->
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
</x-layouts.main_layout>

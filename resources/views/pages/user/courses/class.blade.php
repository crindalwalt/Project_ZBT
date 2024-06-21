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
                            <li class="rbt-breadcrumb-item active">{{ $badge->name }}</li>
                        </ul>
                        <div class="rbt-btn-wrapper d-none d-xl-block">
                            <a class="rbt-btn  btn-gradient btn-sm hover-transform-none" href="#"
                                target="_blank">
                                <span data-text="Join Now">Click to Join</span>
                            </a>
                        </div>
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
                                src="data:image/jpeg;base64,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"
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

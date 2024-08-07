<div class="">
    <div class="main-body">


        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4> {{ $student->name }}</h4>
                                <p class="text-secondary mb-1">Student since
                                    {{ \Carbon\Carbon::parse($student->created_at)->format('Y') }}
                                </p>



                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $student->name }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $student->email }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $student->phone }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Account created</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ \Carbon\Carbon::parse($student->created_at)->format('D d M,Y h:i A') }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                @if ($student->address->isNotEmpty())
                                    {{ $student->address->first->country . '/' . $student->address->first->country }}
                                @else
                                    Not Provided
                                @endif
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>

                <div class="row gutters-sm">
                    <div class="col-12">
                        <div class="card mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-globe mr-2 icon-inline">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12"></line>
                                            <path
                                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>
                                        </svg>Other Course purchased</h6>
                                    <span class="text-secondary"></span>
                                </li>
                                @if ($student->enrollment->isNotEmpty())
                                    @foreach ($student->enrollment as $item)
                                        <a href="{{ route('enrollment_single', $item->id) }}">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><svg style="margin-right:.3rem;"
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-circle-fill"
                                                        viewBox="0 0 16 16">
                                                        <circle cx="8" cy="8" r="8" />
                                                    </svg>{{ $item->course->title }}</h6>
                                                <a href="{{ route('enrollment_single', $item->id) }}"
                                                    class="btn btn-md btn-outline-primary"> View Enrollment </a>
                                            </li>
                                        </a>
                                    @endforeach
                                @else
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">No Enrollment yet</h6>
                                        {{-- <span class="text-secondary"></span> --}}
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row gutters-sm">
                    <div class="col-12">
                        <div class="card mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-globe mr-2 icon-inline">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12">
                                            </line>
                                            <path
                                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>
                                        </svg>Orders</h6>
                                    <span class="text-secondary"></span>
                                </li>
                                @if ($student->order->isNotEmpty())
                                    @foreach ($student->order as $item)
                                        <a href="{{ route('order.detail', $item->id) }}">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0"><svg style="margin-right:.3rem;"
                                                        xmlns="http://www.w3.org/2000/svg" width="18"
                                                        height="18" fill="currentColor" class="bi bi-gift-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A3 3 0 0 1 3 2.506zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43zM9 3h2.932l.023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9z" />
                                                    </svg>{{ '#ORD-' . $item->id }} -
                                                    {{ \Carbon\Carbon::parse($item->created_at)->format('D d M,Y h:i A') }}
                                                </h6>
                                                <a href="{{ route('order.detail', $item->id) }}"
                                                    class="btn btn-md btn-outline-primary"> View Order </a>
                                            </li>
                                        </a>
                                    @endforeach
                                @else
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">No Orders yet</h6>
                                        {{-- <span class="text-secondary"></span> --}}
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>

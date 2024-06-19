<div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">All Badges</h4>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Badge Name</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            name="name">
                                        @error("name")
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="course_select" class="form-label">Select Course </label>

                                        <select class="form-select w-100" aria-label="Default select example"
                                            name="course_id" wire:model="courseSelect">
                                            <option selected>Open this select menu</option>
                                            @foreach ($courses as $item)
                                                <option value="{{ $item->id}}">{{ $item->title}}</option>
                                            @endforeach


                                        </select>
                                        @error("course_id")
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="teacher_select" class="form-label">Select Teacher </label>

                                        <select class="form-select w-100" aria-label="Default select example"
                                            name="teacher_id">
                                            <option selected>Open this select menu</option>
                                            @foreach ($teachers as $item)
                                                <option value="{{ $item->id}}">{{ $item->name}}</option>
                                            @endforeach


                                        </select>
                                        @error("teacher_id")
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="student_select" class="form-label">Select Students </label>

                                        <select class="form-select w-100" aria-label="Default select example"
                                            name="student_id">
                                            <option selected>Open this select menu</option>
                                            @foreach ($teachers as $item)
                                                <option value="{{ $item->id}}">{{ $item->name}}</option>
                                            @endforeach


                                        </select>
                                        @error("student_id")
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    

                                </div>
                            </div>
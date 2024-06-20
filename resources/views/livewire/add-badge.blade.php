<div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
    <div class="content">
        <div class="section-title">
            <h4 class="rbt-title-style-3">Create Badges</h4>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="submit">
            <div class="mb-3">
                <label for="badgeName" class="form-label">Badge Name</label>
                <input type="text" class="form-control" id="badgeName" wire:model="badgeName">
                @error("badgeName")
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="course_select" class="form-label">Select Course</label>
                <select class="form-select w-100" id="course_select" wire:model="courseId">
                    <option value="" selected>Open this select menu</option>
                    @foreach ($courses as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>
                @error("courseId")
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="teacher_select" class="form-label">Select Teacher</label>
                <select class="form-select w-100" id="teacher_select">
                    <option value="" selected>Open this select menu</option>
                    @foreach ($teachers as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                @error("teacher_id")
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            

            <div class="mb-3">
                <button type="submit" class="btn btn-lg btn-primary px-5 py-3 w-100">Add Badge</button>
            </div>
        </form>
    </div>
</div>

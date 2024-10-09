<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-bordered card-striper">
                <div class="card-header">
                    <h4>Add Student <a href="/" class="btn btn-danger float-end"> <i class="fa fa-trash me-2"></i>
                            BACK</a></h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <lable>Student Name</lable>
                            <input name='name' type="text" class="form-control" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable>Email</lable>
                            <input name='email' type="emai" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable>Phone</lable>
                            <input name='phone' type="text" class="form-control" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <lable>Course</lable>
                            <input name='course' type="text" class="form-control" value="{{ old('course') }}">
                            @error('course')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3"><input type="submit" name='submit' value="Add Student"
                                class="btn btn-primary"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3 pe-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Student <a href="/create" class="btn btn-success float-end">Add Student</a></h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Course</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $id => $student)
                            <tr>
                                <th>{{ $id + 1 }}</th>
                                <th>{{ $student->name }}</th>
                                <th>{{ $student->email }}</th>
                                <th>{{ $student->phone }}</th>
                                <th>{{ $student->course }}</th>
                                <th class="d-flex">
                                    <a href="{{ route('student.edit', $student->id) }}"
                                        class="btn btn-warning me-3">Edit</a>
                                    {{-- <form action="{{ route('student.destroy', $student->id) }}" method="POST"
                                        id="deleteForm"
                                        onsubmit="return confirm('Are you sure you want to delete this student?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                    </form> --}}
                                    <input type="submit" name="delete" class="btn btn-danger" value="Delete"
                                        onclick="showConfirmationForm({{ $student->id }})">
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>

@extends("layouts.app")
@section("content")
    <div class="card">
        <div class="card-header">Enrollment Page</div>
        <div class="card-bady">
            <form action="{{url('enrollments')}}" method="post">
                {!! csrf_field() !!}
                <label for="">Enroll No.</label>
                <input type="text" name="enroll_no" id="enroll_no" class="form-control"><br>
                <label for="">Batch ID</label>

                <select name="batch_id" id="batch_id" class="form-control">
                    @foreach ($batches as $id=>$name)
                        <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                </select>



                <label for="">Student ID</label>

                <select name="student_id" id="student_id" class="form-control">
                    @foreach ($students as $id=>$name)
                        <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                </select>

                <label for="">Join Date</label>
                <input type="text" name="join_date" id="join_date" class="form-control"><br>
                <label for="">Fee</label>
                <input type="text" name="fee" id="fee" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@endsection

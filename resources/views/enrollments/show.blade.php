@extends("layouts.app")
@section('content')
    <div class="card">
        <div class="card-header">Enrollment Show Page</div>
        <div class="card-body">
            <h5 class="card-title"><b>Enroll No. :</b>{{$enrollments->enroll_no}}</h5><br>
            <h5 class="card-text"><b>Batch ID :</b>{{$enrollments->batch_id}}</h5><br>
            <h5 class="card-text"><b>Student ID :</b>{{$enrollments->student_id}}</h5>
            <h5 class="card-text"><b>Join Date :</b>{{$enrollments->join_date}}</h5>
            <h5 class="card-text"><b>Fee :</b>{{$enrollments->fee}}</h5>
        </div>
    </div>
@endsection

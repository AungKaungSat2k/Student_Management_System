@extends("layouts.app")
@section('content')
    <div class="card">
        <div class="card-header">Batch Show Page</div>
        <div class="card-body">
            <h5 class="card-title"><b>Name :</b>{{$batches->name}}</h5><br>
            <h5 class="card-text"><b>Course_id :</b>{{$batches->course->name}}</h5><br>
            <h5 class="card-text"><b>Start_date :</b>{{$batches->start_date}}</h5>
        </div>
    </div>
@endsection

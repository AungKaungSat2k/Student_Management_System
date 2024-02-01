@extends("layouts.app")
@section('content')
    <div class="card">
        <div class="card-header">Course Show Page</div>
        <div class="card-body">
            <h5 class="card-title"><b>Name :</b>{{$courses->name}}</h5><br>
            <h5 class="card-text"><b>Syllabus :</b>{{$courses->syllabus}}</h5><br>
            <h5 class="card-text"><b>Duration :</b>{{$courses->duration()}}</h5>
        </div>
    </div>
@endsection

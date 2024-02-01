@extends("layouts.app")
@section('content')
    <div class="card">
        <div class="card-header">Student Show Page</div>
        <div class="card-body">
            <h5 class="card-title"><b>Name :</b>{{$students->name}}</h5><br>
            <h5 class="card-text"><b>address :</b>{{$students->address}}</h5><br>
            <h5 class="card-text"><b>mobile :</b>{{$students->mobile}}</h5>
        </div>
    </div>
@endsection

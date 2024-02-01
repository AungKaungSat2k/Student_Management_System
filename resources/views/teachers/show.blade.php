@extends("layouts.app")
@section('content')
    <div class="card">
        <div class="card-header">Teacher Show Page</div>
        <div class="card-body">
            <h5 class="card-title"><b>Name :</b>{{$teachers->name}}</h5><br>
            <h5 class="card-text"><b>address :</b>{{$teachers->address}}</h5><br>
            <h5 class="card-text"><b>mobile :</b>{{$teachers->mobile}}</h5>
        </div>
    </div>
@endsection

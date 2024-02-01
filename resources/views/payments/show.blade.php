@extends("layouts.app")
@section('content')
    <div class="card">
        <div class="card-header">Batch Show Page</div>
        <div class="card-body">
            <h5 class="card-title"><b>Enroment No. :</b>{{$payments->enrollment->enroll_no}}</h5><br>
            <h5 class="card-text"><b>Paid_Date :</b>{{$payments->paid_date}}</h5><br>
            <h5 class="card-text"><b>Amount :</b>{{$payments->amount}}</h5>
        </div>
    </div>
@endsection

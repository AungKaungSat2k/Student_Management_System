@extends("layouts.app")
@section('content')
    <div class="card">
        <div class="card-header">Batch Edit Page</div>
        <div class="card-body">
            <form action="{{url('payments/'. $payments->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id">
            <label>Enrollment No.</label><br>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                @foreach ($enrollments as $id=>$enroll_no)
                    <option value="{{$id}}">{{$enroll_no}}</option>
                @endforeach
            </select>
            <label>Paid_Date</label><br>
            <input type="text" name="paid_date" id="paid_date" value="{{$payments->course_id}}" class="form-control"><br>
            <label>amount</label><br>
            <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-primary"><br>
            </form>
        </div>
    </div>
@endsection

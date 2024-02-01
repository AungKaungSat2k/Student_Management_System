@extends("layouts.app")
@section("content")
    <div class="card">
        <div class="card-header">Payment Page</div>
        <div class="card-bady">
            <form action="{{url('payments')}}" method="post">
                {!! csrf_field() !!}
                <label for="">Enrollment No</label><br>
                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach ($enrollments as $id=>$enroll_no)
                        <option value="{{$id}}">{{$enroll_no}}</option>
                    @endforeach
                </select>
                <label for="">Paid Date</label><br>
                <input type="text" name="paid_date" id="paid_date" class="form-control"><br>
                <label for="">Amount</label><br>
                <input type="text" name="amount" id="amount" class="form-control">
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@endsection

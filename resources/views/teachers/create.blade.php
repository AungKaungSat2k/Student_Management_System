@extends("layouts.app")
@section("content")
    <div class="card">
        <div class="card-header">Teacher Page</div>
        <div class="card-bady">
            <form action="{{url('teachers')}}" method="post">
                {!! csrf_field() !!}
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label for="">Address</label>
                <input type="text" name="address" id="address" class="form-control"><br>
                <label for="">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@endsection
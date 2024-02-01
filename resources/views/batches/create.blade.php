@extends("layouts.app")
@section("content")
    <div class="card">
        <div class="card-header">Batch Page</div>
        <div class="card-bady">
            <form action="{{url('batches')}}" method="post">
                {!! csrf_field() !!}
                <label for="">Batch Name</label>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label for="">Course Name</label>
                {{-- <input type="text" name="course_id" id="course_id" class="form-control"><br> --}}
                <select name="course_id" id="course_id" class="form-control">
                    @foreach ($courses as $id=>$name)
                        <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                </select>
                <label for="">Start Date</label>
                <input type="text" name="start_date" id="start_date" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@endsection

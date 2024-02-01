@extends("layouts.app")
@section("content")
    <div class="card">
        <div class="card-header">Course Page</div>
        <div class="card-bady">
            <form action="{{url('courses')}}" method="post">
                {!! csrf_field() !!}
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label for="">Syllabus</label>
                <input type="text" name="syllabus" id="syllabus" class="form-control"><br>
                <label for="">Duration</label>
                <input type="text" name="duration" id="duration" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@endsection

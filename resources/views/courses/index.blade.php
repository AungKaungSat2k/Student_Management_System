@extends("layouts.app")
@section("content")
    <div class="card">
        <div class="card-header">
            <h2>Course Application</h2>
        </div>
        <div class="card-body">
            <a href="{{url('/courses/create')}}" class="btn btn-success btn-sm" title="Add new course">
            <i class="fa fa-plus" aria-hidden="true">Add New</i>
            </a>
            <br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NAME</th>
                            <th>SYLLABUS</th>
                            <th>DURATION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $item)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->syllabus}}</td>
                                <td>{{ $item->duration()}}</td>
                                <td>
                                    <a href="{{url('/courses/'. $item->id)}}" title="View course"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View
                                    </button></a>
                                    <a href="{{url('/courses/'. $item->id . '/edit')}}" title="Edit course"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
                                    </button></a>

                                    <form method="post" action="{{url('/courses'. '/'. $item->id)}}" accept-charset="UTF-8" style="display: inline">
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete course" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-0" aria-hidden="true"></i>Delete</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

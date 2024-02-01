@extends("layouts.app")
@section("content")
    <div class="card">
        <div class="card-header">
            <h2>Teacher Application</h2>
        </div>
        <div class="card-body">
            <a href="{{url('/teachers/create')}}" class="btn btn-success btn-sm" title="Add new teacher">
            <i class="fa fa-plus" aria-hidden="true">Add New</i>
            </a>
            <br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NAME</th>
                            <th>ADDRESS</th>
                            <th>MOBILE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $item)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->address}}</td>
                                <td>{{ $item->mobile}}</td>
                                <td>
                                    <a href="{{url('/teachers/'. $item->id)}}" title="View teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View
                                    </button></a>
                                    <a href="{{url('/teachers/'. $item->id . '/edit')}}" title="Edit teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
                                    </button></a>

                                    <form method="post" action="{{url('/teachers'. '/'. $item->id)}}" accept-charset="UTF-8" style="display: inline">
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete teacher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-0" aria-hidden="true"></i>Delete</button>

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

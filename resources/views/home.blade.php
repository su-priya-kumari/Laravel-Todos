@extends('base')
@section('content')
<div class="conatiner mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            @foreach ($items as $item)
                <div class="card mt-3">
                    <div class="card-body mx-auto">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Location</th>
                                <th>Time</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->decription}}</td>
                                <td>{{$item->location}}</td>
                                <td>{{$item->time}}</td>
                                <td>{{$item->start_time}}</td>
                                <td>{{$item->end_time}}</td>
                                <td><form action="{{route('todo.destroy',['todo'=>$item->id])}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                  </form>
                                  <a href="{{route('todo.edit',['todo'=>$item->id])}}" class="btn btn-info">Edit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
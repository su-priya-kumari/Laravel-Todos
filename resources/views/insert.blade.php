@extends('base')
@section('content')
<div class="conatiner mt-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <form action="{{route('todo.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea row="9" name="decription" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Location</label>
                    <input type="text" name="location" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Time</label>
                    <input type="text" name="time" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Start Time</label>
                    <input type="text" name="start_time" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">End Time</label>
                    <input type="text" name="end_time" class="form-control">
                </div>
                <div class="form-group d-grid gap-2">
                    <input type="submit" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-info text-white">
        <i class="bi bi-pencil-square me-2"></i> Edit Page
    </div>
    <div class="card-body">
        <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" />
            <div class="mb-3">
                <label for="enroll_no" class="form-label">Enroll No</label>
                <input type="text" name="enroll_no" id="enroll_no" class="form-control" value="{{$enrollments->enroll_no}}">
            </div>
            <div class="mb-3">
                <label for="batch_id" class="form-label">Batch</label>
                <input type="text" name="batch_id" id="batch_id" class="form-control" value="{{$enrollments->batch_id}}">
            </div>
            <div class="mb-3">
                <label for="student_id" class="form-label">Student</label>
                <input type="text" name="student_id" id="student_id" class="form-control" value="{{$enrollments->student_id}}">
            </div>
            <div class="mb-3">
                <label for="join_date" class="form-label">Join Date</label>
                <input type="text" name="join_date" id="join_date" class="form-control" value="{{$enrollments->join_date}}">
            </div>
            <div class="mb-3">
                <label for="fee" class="form-label">Fee</label>
                <input type="text" name="fee" id="fee" class="form-control" value="{{$enrollments->fee}}">
            </div>
            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
</div>
@stop
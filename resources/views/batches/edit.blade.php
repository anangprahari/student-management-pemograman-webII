<!-- Batches/edit.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-danger text-white">
        <i class="bi bi-pencil-square me-2"></i> Edit Page
    </div>
    <div class="card-body">
        <form action="{{ url('batches/' .$batches->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" />
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="course_id" class="form-label">Course</label>
                <input type="text" name="course_id" id="syllabus" value="{{$batches->course->name}}" class="form-control" readonly>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="text" name="start_date" id="duration" value="{{$batches->start_date}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-danger">Update</button>
        </form>
    </div>
</div>
@stop
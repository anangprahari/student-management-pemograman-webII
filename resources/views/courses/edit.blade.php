<!-- Courses/edit.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-warning text-white">
        <i class="bi bi-pencil-square me-2"></i> Edit Page
    </div>
    <div class="card-body">
        <form action="{{ url('courses/' .$courses->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" value="{{$courses->name}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="syllabus" class="form-label">Syllabus</label>
                <input type="text" name="syllabus" id="syllabus" value="{{$courses->syllabus}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" name="duration" id="duration" value="{{$courses->duration}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
</div>
@stop
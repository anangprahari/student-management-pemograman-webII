<!-- Courses/create.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-warning text-white">
        <i class="bi bi-book-plus me-2"></i> Course Page
    </div>
    <div class="card-body">
        <form action="{{ url('courses') }}" method="post">
            {!! csrf_field() !!}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="syllabus" class="form-label">Syllabus</label>
                <input type="text" name="syllabus" id="syllabus" class="form-control">
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" name="duration" id="duration" class="form-control">
            </div>
            <button type="submit" class="btn btn-warning">Save</button>
        </form>
    </div>
</div>
@stop
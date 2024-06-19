@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-warning text-white">
        <i class="bi bi-journal-bookmark-fill me-2"></i> Courses Page
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label fw-bold">Name</label>
            <p class="form-control-plaintext">{{ $courses->name }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Syllabus</label>
            <p class="form-control-plaintext">{{ $courses->syllabus }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Duration</label>
            <p class="form-control-plaintext">{{ $courses->duration() }}</p>
        </div>
    </div>
</div>
@endsection
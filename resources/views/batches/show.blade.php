@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-danger text-white">
        <i class="bi bi-calendar-event-fill me-2"></i> Batches
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label fw-bold">Name</label>
            <p class="form-control-plaintext">{{ $batches->name }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Course</label>
            <p class="form-control-plaintext">{{ $batches->course->name }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Start Date</label>
            <p class="form-control-plaintext">{{ $batches->start_date }}</p>
        </div>
    </div>
</div>
@endsection
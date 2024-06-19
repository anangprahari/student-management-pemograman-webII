@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-info text-white">
        <i class="bi bi-clipboard-data-fill me-2"></i> Enrollments Page
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label fw-bold">Enrollment Number</label>
            <p class="form-control-plaintext">{{ $enrollments->enroll_no }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Batch</label>
            <p class="form-control-plaintext">{{ $enrollments->batch_id }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Student</label>
            <p class="form-control-plaintext">{{ $enrollments->student_id }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Join Date</label>
            <p class="form-control-plaintext">{{ $enrollments->join_date }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Fee</label>
            <p class="form-control-plaintext">{{ $enrollments->fee }}</p>
        </div>
    </div>
</div>
@endsection
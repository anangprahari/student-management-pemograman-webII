@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <i class="bi bi-person-fill me-2"></i> Students Page
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label fw-bold">Name</label>
            <p class="form-control-plaintext">{{ $students->name }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Address</label>
            <p class="form-control-plaintext">{{ $students->address }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Mobile</label>
            <p class="form-control-plaintext">{{ $students->mobile }}</p>
        </div>
    </div>
</div>
@endsection
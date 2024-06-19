@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        <i class="bi bi-person-fill me-2"></i> Teachers Page
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label fw-bold">Name</label>
            <p class="form-control-plaintext">{{ $teachers->name }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Address</label>
            <p class="form-control-plaintext">{{ $teachers->address }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Mobile</label>
            <p class="form-control-plaintext">{{ $teachers->mobile }}</p>
        </div>
    </div>
</div>
@endsection
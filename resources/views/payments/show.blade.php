@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-secondary text-white">
        <i class="bi bi-cash-stack me-2"></i> Payments
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label fw-bold">Enrollment No</label>
            <p class="form-control-plaintext">{{ $payment->enrollment ? $payment->enrollment->enroll_no : 'N/A' }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Paid Date</label>
            <p class="form-control-plaintext">{{ $payment->paid_date }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Amount</label>
            <p class="form-control-plaintext">{{ $payment->amount }}</p>
        </div>
    </div>
</div>
@endsection
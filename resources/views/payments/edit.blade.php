<!-- Payments/edit.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-secondary text-white">
        <i class="bi bi-pencil-square me-2"></i> Edit Page
    </div>
    <div class="card-body">
        <form action="{{ url('payments/' .$payment->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $payment->id }}" />
            <div class="mb-3">
                <label for="enrollment_id" class="form-label">Enrollment No</label>
                <select name="enrollment_id" id="enrollment_id" class="form-select">
                    @foreach($enrollments as $id => $enrollno)
                        <option value="{{ $id }}" {{ $id == $payment->enrollment_id ? 'selected' : '' }}>{{ $enrollno }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="paid_date" class="form-label">Paid Date</label>
                <input type="text" name="paid_date" id="paid_date" value="{{ $payment->paid_date }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="text" name="amount" id="amount" value="{{ $payment->amount }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-secondary">Update</button>
        </form>
    </div>
</div>
@stop
<!-- Payments/create.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-secondary text-white">
        <i class="bi bi-cash me-2"></i> Payments
    </div>
    <div class="card-body">
        <form action="{{ url('payments') }}" method="post">
            {!! csrf_field() !!}
            <div class="mb-3">
                <label for="enrollment_id" class="form-label">Enrollment No</label>
                <select name="enrollment_id" id="enrollment_id" class="form-select">
                    @foreach($enrollments as $id => $enroll_no)
                        <option value="{{ $id }}">{{ $enroll_no }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="paid_date" class="form-label">Paid Date</label>
                <input type="text" name="paid_date" id="paid_date" class="form-control">
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="text" name="amount" id="amount" class="form-control">
            </div>
            <button type="submit" class="btn btn-secondary">Save</button>
        </form>
    </div>
</div>
@stop
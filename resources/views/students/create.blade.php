<!-- Students/create.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <i class="bi bi-person-plus me-2"></i> Students Page
    </div>
    <div class="card-body">
        <form action="{{ url('students') }}" method="post">
            {!! csrf_field() !!}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@stop
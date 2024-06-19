<!-- Batches/create.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-danger text-white">
        <i class="bi bi-collection me-2"></i> Batches
    </div>
    <div class="card-body">
        <form action="{{ url('batches') }}" method="post">
            {!! csrf_field() !!}
            <div class="mb-3">
                <label for="name" class="form-label">Batch Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="course_id" class="form-label">Course</label>
                <select name="course_id" id="course_id" class="form-select">
                    @foreach($courses as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="text" name="start_date" id="start_date" class="form-control">
            </div>
            <button type="submit" class="btn btn-danger">Save</button>
        </form>
    </div>
</div>
@stop
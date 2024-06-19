<!-- Enrollments/create.blade.php -->
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header bg-info text-white">
    <i class="bi bi-person-plus me-2"></i> Enrollment Page
  </div>
  <div class="card-body">
    <form action="{{ url('enrollments') }}" method="post">
      {!! csrf_field() !!}
      <div class="mb-3">
        <label for="enroll_no" class="form-label">Enroll No</label>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control">
      </div>
      <div class="mb-3">
        <label for="batch_id" class="form-label">Batch</label>
        <select name="batch_id" id="batch_id" class="form-select">
          @foreach($batches as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="student_id" class="form-label">Student</label>
        <select name="student_id" id="student_id" class="form-select">
          @foreach($students as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="join_date" class="form-label">Join Date</label>
        <input type="text" name="join_date" id="join_date" class="form-control">
      </div>
      <div class="mb-3">
        <label for="fee" class="form-label">Fee</label>
        <input type="text" name="fee" id="fee" class="form-control">
      </div>
      <button type="submit" class="btn btn-info">Save</button>
    </form>
  </div>
</div>
@stop
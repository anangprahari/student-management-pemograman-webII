<!-- Enrollments/index.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-info text-white">
        <i class="bi bi-clipboard-data me-2"></i> Enrollment Application
    </div>
    <div class="card-body">
        <a href="{{ url('/enrollments/create') }}" class="btn btn-info btn-sm mb-3" title="Add New Enrollment">
            <i class="bi bi-plus me-2"></i> Add New
        </a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enroll no</th>
                        <th>Batch</th>
                        <th>Student</th>
                        <th>Join Date</th>
                        <th>Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enrollments as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->enroll_no }}</td>
                        <td>{{ $item->batch_id }}</td>
                        <td>{{ $item->student_id }}</td>
                        <td>{{ $item->join_date }}</td>
                        <td>{{ $item->fee }}</td>
                        <td>
                            <a href="{{ url('/enrollments/' . $item->id) }}" title="Lihat Enrollment" class="btn btn-info btn-sm">
                                <i class="bi bi-eye me-2"></i> Lihat
                            </a>
                            <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Edit Enrollment" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil me-2"></i> Edit
                            </a>
                            <form method="POST" action="{{ url('/enrollments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline" class="d-inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Enrollment" onclick="return confirmDelete()">
                                    <i class="bi bi-trash me-2"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function confirmDelete() {
        return confirm("Konfirmasi hapus?");
    }
</script>
@endsection
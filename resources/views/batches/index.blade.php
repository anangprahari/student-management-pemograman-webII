<!-- Batches/index.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-danger text-white">
        <i class="bi bi-calendar-week me-2"></i> Batches
    </div>
    <div class="card-body">
        <a href="{{ url('/batches/create') }}" class="btn btn-danger btn-sm mb-3" title="Add New Batch">
            <i class="bi bi-plus me-2"></i> Add New
        </a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Course</th>
                        <th>Start Date</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($batches as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->course ? $item->course->name : 'N/A' }}</td>
                        <td>{{ $item->start_date }}</td>
                        <td>
                            <a href="{{ url('/batches/' . $item->id) }}" title="Lihat Batch" class="btn btn-info btn-sm">
                                <i class="bi bi-eye me-2"></i> Lihat
                            </a>
                            <a href="{{ url('/batches/' . $item->id . '/edit') }}" title="Edit Batch" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil me-2"></i> Edit
                            </a>
                            <form method="POST" action="{{ url('/batches' . '/' . $item->id) }}" accept-charset="UTF<!-- Batches/index.blade.php (lanjutan) -->
-8" style="display:inline" class="d-inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Batch" onclick="return confirmDelete()">
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
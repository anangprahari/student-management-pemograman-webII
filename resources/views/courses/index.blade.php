<!-- Courses/index.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-warning text-white">
        <i class="bi bi-book me-2"></i> Courses Application
    </div>
    <div class="card-body">
        <a href="{{ url('/courses/create') }}" class="btn btn-warning btn-sm mb-3" title="Add New Course">
            <i class="bi bi-plus me-2"></i> Add New
        </a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Syllabus</th>
                        <th>Duration</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->syllabus }}</td>
                        <td>{{ $item->duration() }}</td>
                        <td>
                            <a href="{{ url('/courses/' . $item->id) }}" title="Lihat Course" class="btn btn-info btn-sm">
                                <i class="bi bi-eye me-2"></i> Lihat
                            </a>
                            <a href="{{ url('/courses/' . $item->id . '/edit') }}" title="Edit Course" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil me-2"></i> Edit
                            </a>
                            <form method="POST" action="{{ url('/courses' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline" class="d-inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Course" onclick="return confirmDelete()">
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
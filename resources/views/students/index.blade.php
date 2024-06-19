<!-- Students/index.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <i class="bi bi-people me-2"></i> Student Application
    </div>
    <div class="card-body">
        <a href="{{ url('/students/create') }}" class="btn btn-primary btn-sm mb-3" title="Add New Student">
            <i class="bi bi-plus me-2"></i> Add New
        </a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>
                            <a href="{{ url('/students/' . $item->id) }}" title="Lihat Siswa" class="btn btn-info btn-sm">
                                <i class="bi bi-eye me-2"></i> Lihat
                            </a>
                            <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit Siswa" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil me-2"></i> Edit
                            </a>
                            <form method="POST" action="{{ url('/students' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline" class="d-inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Siswa" onclick="return confirmDelete()">
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
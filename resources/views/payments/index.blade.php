<!-- Payments/index.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-secondary text-white">
        <i class="bi bi-cash me-2"></i> Payments
    </div>
    <div class="card-body">
        <a href="{{ url('/payments/create') }}" class="btn btn-secondary btn-sm mb-3" title="Add New Payment">
            <i class="bi bi-plus me-2"></i> Add New
        </a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enrollment No</th>
                        <th>Paid Date</th>
                        <th>Amount</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->enrollment ? $item->enrollment->enroll_no : 'N/A' }}</td>
                        <td>{{ $item->paid_date }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>
                            <a href="{{ url('/payments/' . $item->id) }}" title="Lihat Payment" class="btn btn-info btn-sm">
                                <i class="bi bi-eye me-2"></i> Lihat
                            </a>
                            <a href="{{ url('/payments/' . $item->id . '/edit') }}" title="Edit Payment" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil me-2"></i> Edit
                            </a>
                            <form method="POST" action="{{ url('/payments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline" class="d-inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Payment" onclick="return confirmDelete()">
                                    <i class="bi bi-trash me-2"></i> Hapus
                                </button>
                            </form>
                            <a href="{{ url('/report/report1/' . $item->id ) }}" title="Print Payment" class="btn btn-success btn-sm">
                                <i class="bi bi-printer me-2"></i> Print
                            </a>
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
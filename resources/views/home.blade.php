@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">Student</div>
                <div class="card-body">
                    <p class="card-text">Modul ini memungkinkan Anda untuk menambahkan, mengedit, melihat, dan menghapus data siswa. Anda juga dapat melihat daftar siswa yang terdaftar di sistem.</p>
                    <a href="{{ url('/students') }}" class="btn btn-primary">Lihat Student</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-success text-white">Teacher</div>
                <div class="card-body">
                    <p class="card-text">Modul ini memungkinkan Anda untuk menambahkan, mengedit, melihat, dan menghapus data guru. Anda juga dapat melihat daftar guru yang terdaftar di sistem.</p>
                    <a href="{{ url('/teachers') }}" class="btn btn-success">Lihat Teacher</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-warning text-white">Courses</div>
                <div class="card-body">
                    <p class="card-text">Modul ini memungkinkan Anda untuk mengelola data kursus yang tersedia. Anda dapat menambahkan, mengedit, melihat, dan menghapus kursus.</p>
                    <a href="{{ url('/courses') }}" class="btn btn-warning">Lihat Courses</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-danger text-white">Batches</div>
                <div class="card-body">
                    <p class="card-text">Modul ini memungkinkan Anda untuk mengelola data batch. Anda dapat menambahkan, mengedit, melihat, dan menghapus batch.</p>
                    <a href="{{ url('/batches') }}" class="btn btn-danger">Lihat Batches</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-info text-white">Enrollments</div>
                <div class="card-body">
                    <p class="card-text">Modul ini memungkinkan Anda untuk mengelola data pendaftaran siswa ke kursus tertentu. Anda dapat menambahkan, mengedit, melihat, dan menghapus data pendaftaran.</p>
                    <a href="{{ url('/enrollments') }}" class="btn btn-info">Lihat Enrollments</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-secondary text-white">Payments</div>
                <div class="card-body">
                    <p class="card-text">Modul ini memungkinkan Anda untuk mengelola pembayaran. Anda dapat menambahkan, mengedit, melihat, dan menghapus data pembayaran.</p>
                    <a href="{{ url('/payments') }}" class="btn btn-secondary">Lihat Payments</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

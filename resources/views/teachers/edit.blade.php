<!-- Teachers/edit.blade.php -->
@extends('layout')
@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        <i class="bi bi-pencil-square me-2"></i> Edit Page
    </div>
    <div class="card-body">
        <form action="{{ url('teachers/' .$teachers->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" value="{{$teachers->name}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" value="{{$teachers->address}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" id="mobile" value="{{$teachers->mobile}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
@stop
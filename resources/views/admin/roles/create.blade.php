@extends('admin.layouts.app')
@section('title', 'Create Roles')
@section('content')
    <h3>Create Roles</h3>
    <div>
        <form action="{{ route('roles.store') }}" method="post">
            @csrf
            <div class="input-group input-group-static mb-4">
                <label>Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="input-group input-group-static mb-4">
                <label>DisPlay Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="input-group input-group-static mb-4">
                <label>Group</label>
                <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-submit btn-primary">Submit</button>
        </form>
    </div>
@endsection
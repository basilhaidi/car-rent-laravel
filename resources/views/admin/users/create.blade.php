@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">Add User</div>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="is_admin">User Type</label>
                <select name="is_admin" id="is_admin" class="form-control">
                    <option value="1">Admin</option>
                    <option value="0">User</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection

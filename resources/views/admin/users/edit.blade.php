@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">Edit user</div>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.users.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name)}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email )}}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="{{ old('password', $user->password )}}">
            </div>
            <div class="form-group">
                <label for="is_admin">User Type</label>
                <select name="is_admin" id="is_admin" class="form-control"  value="{{ old('is_admin', $user->is_admin )}}">
                    <option {{ $user->is_admin == 1 ? 'selected' : null }} value="1">Admin</option>
                    <option {{ $user->is_admin == 0 ? 'selected' : null }} value="0">User</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection

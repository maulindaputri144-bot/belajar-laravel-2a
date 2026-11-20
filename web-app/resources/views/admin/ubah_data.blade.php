@extends('dashboard')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Ubah Data Admin</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="/admin/{{ $admin->id_admin }}" method="POST">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="id_admin">ID Admin</label>
                    <input type="text" class="form-control" id="id_admin" name="id_admin" value="{{ $admin->id_admin }}" readonly>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $admin->username }}">
                </div>

                <div class="form-group">
                    <label for="password">Password Baru</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti password.</small>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="/admin" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection

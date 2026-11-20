@extends('dashboard')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Tambah Admin</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="/admin/store" method="POST">
                @csrf

                <div class="form-group">
                    <label for="id_admin">ID Admin</label>
                    <input type="text" class="form-control" id="id_admin" name="id_admin">
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/admin" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection

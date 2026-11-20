@extends('dashboard')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Data Admin</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>ID Admin</th>
                            <th>Username</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td>{{ $admin->id_admin }}</td>
                                <td>{{ $admin->username }}</td>
                                <td>
                                    <a href="/admin/{{ $admin->id_admin }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="/admin/{{ $admin->id_admin }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus Admin ini?')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

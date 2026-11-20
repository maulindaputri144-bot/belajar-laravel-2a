@extends('dashboard')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Data Karyawan</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <a class="btn btn-success mb-3" href="/employe/create">Tambah Data Karyawan</a>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Gender</th>
                            <th>Gaji</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employes as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->gender }}</td>
                                <td>{{ $row->gaji }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/employe/edit/{{ $row->id }}">Edit</a>
                                    <form action="/employe/{{ $row->id }}" method="POST" class="d-inline">
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

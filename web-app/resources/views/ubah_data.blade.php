@extends('dashboard')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Ubah Data Karyawan</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="/employe/{{ $employe->id }}" method="POST">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ $employe->id }}">
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $employe->nama }}">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat">{{ $employe->alamat }}</textarea>
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="L" {{ $employe->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $employe->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="gaji">Gaji</label>
                    <input type="number" class="form-control" id="gaji" name="gaji" value="{{ $employe->gaji }}">
                </div>

                <button type="submit" class="btn btn-primary">UPDATE</button>
            </form>
        </div>
    </div>
@endsection

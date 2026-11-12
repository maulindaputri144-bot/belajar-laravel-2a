<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="bg-light">
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <section class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2 mb-4">
                            <h1 class="h2 mb-0 fw-bold text-primary">DAFTAR MAHASISWA</h1>
                            <span class="badge rounded-pill text-bg-primary">
                                {{ count($mahasiswa) }} mahasiswa
                            </span>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kota</th>
                                        <th scope="col">Jenis Kelamin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mahasiswa as $data)
                                        <tr>
                                            <td>{{ $data['nama'] }}</td>
                                            <td>{{ $data['kota'] }}</td>
                                            <td>{{ $data['jenis_kelamin'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <p class="text-secondary small mt-3 mb-0">
                            Jumlah Mahasiswa: {{ count($mahasiswa) }}
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </main>
</body>
</html>

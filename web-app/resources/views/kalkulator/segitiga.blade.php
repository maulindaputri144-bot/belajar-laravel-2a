<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Luas Segitiga</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="bg-light">
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <section class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <h1 class="h2 text-center fw-bold text-primary mb-4">
                            KALKULATOR LUAS SEGITIGA
                        </h1>

                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <p class="fw-semibold mb-2">Periksa kembali input Anda:</p>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('kalkulator.segitiga.hitung') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="alas" class="form-label fw-semibold">Alas</label>
                                <input
                                    type="number"
                                    class="form-control @error('alas') is-invalid @enderror"
                                    id="alas"
                                    name="alas"
                                    value="{{ old('alas', $alas ?? '') }}"
                                    min="0"
                                    step="any"
                                    required
                                    aria-describedby="alas-error"
                                >
                                @error('alas')
                                    <div class="invalid-feedback" id="alas-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="tinggi" class="form-label fw-semibold">Tinggi</label>
                                <input
                                    type="number"
                                    class="form-control @error('tinggi') is-invalid @enderror"
                                    id="tinggi"
                                    name="tinggi"
                                    value="{{ old('tinggi', $tinggi ?? '') }}"
                                    min="0"
                                    step="any"
                                    required
                                    aria-describedby="tinggi-error"
                                >
                                @error('tinggi')
                                    <div class="invalid-feedback" id="tinggi-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                Hitung Luas
                            </button>
                        </form>

                        @isset($luas)
                            <div class="alert alert-success mt-4 mb-0" role="status" aria-live="polite">
                                <h2 class="h5 alert-heading">Hasil Perhitungan</h2>
                                <p class="mb-1">Alas: {{ $alas }}</p>
                                <p class="mb-1">Tinggi: {{ $tinggi }}</p>
                                <p class="mb-0 fw-bold">Luas segitiga: {{ $luas }}</p>
                            </div>
                        @endisset
                    </div>
                </section>
            </div>
        </div>
    </main>
</body>
</html>

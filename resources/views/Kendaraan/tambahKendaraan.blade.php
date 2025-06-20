@include('layout.header')

<div class="app-wrapper">
    @include('layout.navbar')
    @include('layout.sidebar')

    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Tambah Kendaraan</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('kendaraan.index') }}">Kendaraan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline mb-4">
                            <div class="card-header">
                                <div class="card-title">Form Tambah Kendaraan</div>
                            </div>
                            <form class="needs-validation" action="{{ route('kendaraan.store') }}" method="POST" novalidate>
                                @csrf
                                <div class="card-body row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">No Pol</label>
                                        <input type="text" class="form-control" name="no_pol" required />
                                        <div class="invalid-feedback">Wajib diisi</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Tahun Kendaraan</label>
                                        <input type="text" class="form-control" name="tahun_kendaraan" required />
                                        <div class="invalid-feedback">Wajib diisi</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">No Mesin</label>
                                        <input type="text" class="form-control" name="no_mesin" required />
                                        <div class="invalid-feedback">Wajib diisi</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">No Rangka</label>
                                        <input type="text" class="form-control" name="no_rangka" required />
                                        <div class="invalid-feedback">Wajib diisi</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Kapasitas Mesin (CC)</label>
                                        <select class="form-select" name="kapasitas_mesin" required>
                                            <option selected disabled value="">Pilih Kapasitas</option>
                                            @foreach([50,110,125,150,200,250,300,400,500,600,750,1000,1200,1300,1500,1800,2000,2400,2500,3000,3500,4000,5000,7000,10000] as $cc)
                                                <option>{{ $cc }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">Wajib dipilih</div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="row mb-3 w-100">
                                            <legend class="col-form-label col-sm-3 pt-0">Transmisi</legend>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="transmisi" id="manual" value="Manual" required>
                                                    <label class="form-check-label" for="manual">Manual</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="transmisi" id="otomatis" value="Otomatis" required>
                                                    <label class="form-check-label" for="otomatis">Otomatis</label>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">Wajib dipilih</div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layout.bebas')
</div>

@include('layout.footer')

<script>
(() => {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();
</script>

@include('layout.header')

<!--begin::App Wrapper-->
<div class="app-wrapper">
    @include('layout.navbar')
    @include('layout.sidebar')

    <main class="app-main">
        <!-- Header -->
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Edit Jenis Kendaraan</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('jnsKendaraan.index') }}">Jenis Kendaraan</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="app-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline mb-4">
                            <div class="card-header">
                                <div class="card-title">Masukkan data untuk diperbarui</div>
                            </div>

                            <!-- Form Edit -->
                            <form class="needs-validation" action="{{ route('jnsKendaraan.update', $data->id_jns_kendaraan) }}" method="post" novalidate>
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Nama Jenis Kendaraan</label>
                                            <input type="text" class="form-control" name="nm_jns_kendaraan"
                                                   value="{{ $data->nm_jns_kendaraan }}"
                                                   placeholder="Masukkan Nama Jenis Kendaraan" required>
                                            <div class="invalid-feedback">Nama jenis kendaraan harus diisi.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    <a href="{{ route('jnsKendaraan.index') }}" class="btn btn-secondary">Kembali</a>
                                </div>
                            </form>

                            <!-- Script Validasi -->
                            <script>
                                (() => {
                                    'use strict';
                                    const forms = document.querySelectorAll('.needs-validation');
                                    Array.from(forms).forEach((form) => {
                                        form.addEventListener('submit', (event) => {
                                            if (!form.checkValidity()) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                        }, false);
                                    });
                                })();
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layout.bebas')
</div>

@include('layout.footer')

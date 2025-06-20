@include('layout.header')
<!--begin::App Wrapper-->
<div class="app-wrapper">
    <!--begin::Header-->
    @include('layout.navbar')
    <!--end::Header-->
    <!--begin::Sidebar-->
    @include('layout.sidebar')
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Kendaraan</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('kendaraan.index')}}">Kendaraan</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline mb-4">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">Edit Data Kendaraan</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            @foreach($data as $row)
                            <form class="needs-validation" action="{{ route('kendaraan.update', $id) }}" method="POST" novalidate>
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">No Pol</label>
                                            <input type="text" class="form-control" name="no_pol" value="{{ $row->no_pol }}" required />
                                            <div class="invalid-feedback">Tabel Tidak Boleh Kosong!</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Tahun Kendaraan</label>
                                            <input type="text" class="form-control" name="tahun_kendaraan" value="{{ $row->tahun_kendaraan }}" required />
                                            <div class="invalid-feedback">Tabel Tidak Boleh Kosong!</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">No Mesin</label>
                                            <input type="text" class="form-control" name="no_mesin" value="{{ $row->no_mesin }}" required />
                                            <div class="invalid-feedback">Tabel Tidak Boleh Kosong!</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">No Rangka</label>
                                            <input type="text" class="form-control" name="no_rangka" value="{{ $row->no_rangka }}" required />
                                            <div class="invalid-feedback">Tabel Tidak Boleh Kosong!</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="pilihCC" class="form-label">Kapasitas Mesin</label>
                                            <select class="form-select" id="pilihCC" name="kapasitas_mesin" required>
                                                <option disabled value="" {{ old('kapasitas_mesin', $row->kapasitas_mesin) == '' ? 'selected' : '' }}>Pilih Kapasitas Mesin</option>
                                                @foreach([50, 110, 125, 150, 200, 250, 300, 400, 500, 600, 750, 1000, 1200, 1300, 1500, 1800, 2000, 2400, 2500, 3000, 3500, 4000, 5000, 7000, 10000] as $cc)
                                                    <option value="{{ $cc }}" {{ old('kapasitas_mesin', $row->kapasitas_mesin) == $cc ? 'selected' : '' }}>{{ $cc }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">Tabel Tidak Boleh Kosong!</div>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="row mb-3 w-100">
                                                <legend class="col-form-label col-sm-3 pt-0">Transmisi</legend>
                                                <div class="col-sm-10 d-flex align-items-center mt-2">
                                                    <div class="form-check me-3">
                                                        <input class="form-check-input" type="radio" name="transmisi" id="manual" value="Manual" {{ old('transmisi', $row->transmisi) == 'Manual' ? 'checked' : '' }} required />
                                                        <label class="form-check-label" for="manual">Manual</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="transmisi" id="otomatis" value="Otomatis" {{ old('transmisi', $row->transmisi) == 'Otomatis' ? 'checked' : '' }} required />
                                                        <label class="form-check-label" for="otomatis">Otomatis</label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </form>
                            @endforeach
                            <!--end::Form-->
                            <!--begin::JavaScript-->
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
                            <!--end::JavaScript-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    @include('layout.bebas')
    <!--end::Footer-->
</div>
@include('layout.footer')

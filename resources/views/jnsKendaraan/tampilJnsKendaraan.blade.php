@include('layout.header')

<!--begin::App Wrapper-->
<div class="app-wrapper">
    @include('layout.navbar')
    @include('layout.sidebar')

    <!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Jenis Kendaraan</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jenis Kendaraan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--end::App Content Header-->

        <!--begin::App Content-->
        <div class="app-content">
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="card-title m-0">Data Keseluruhan Jenis Kendaraan</h3>
                                <a href="{{ route('jnsKendaraan.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped text-center mb-0">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Jenis Kendaraan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach($data as $row)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $row->nm_jns_kendaraan }}</td>
                                                    <td>
                                                        <a href="{{ route('jnsKendaraan.edit', $row->id_jns_kendaraan ?? $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="{{ route('jnsKendaraan.delete', $row->id_jns_kendaraan ?? $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @if($data->isEmpty())
                                                <tr>
                                                    <td colspan="3">Data tidak ditemukan.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::App Content-->
    </main>
    <!--end::App Main-->

    @include('layout.footers')
</div>

@include('layout.script')

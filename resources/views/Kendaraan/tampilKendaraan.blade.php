@include('layout.header')

<div class="app-wrapper">
    @include('layout.navbar')
    @include('layout.sidebar')

    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Data Kendaraan</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kendaraan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="card-title mt-1">Daftar Kendaraan</h3>
                                <a href="{{ route('kendaraan.create') }}" class="btn btn-success btn-sm">Tambah</a>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Pol</th>
                                            <th>Tahun</th>
                                            <th>No Mesin</th>
                                            <th>No Rangka</th>
                                            <th>CC</th>
                                            <th>Transmisi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($data as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->no_pol }}</td>
                                                <td>{{ $row->tahun_kendaraan }}</td>
                                                <td>{{ $row->no_mesin }}</td>
                                                <td>{{ $row->no_rangka }}</td>
                                                <td>{{ $row->kapasitas_mesin }}</td>
                                                <td>{{ $row->transmisi }}</td>
                                                <td>
                                                    <a href="{{ route('kendaraan.edit', $row->id_kendaraan) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('kendaraan.delete', $row->id_kendaraan) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">Data kendaraan tidak tersedia</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            @if(method_exists($data, 'links'))
                                <div class="card-footer">
                                    {{ $data->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layout.bebas')
</div>

@include('layout.footer')

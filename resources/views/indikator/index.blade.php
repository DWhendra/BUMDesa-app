<x-app>
    <x-slot:sidebar>
        <x-sidebar></x-sidebar>

    </x-slot:sidebar>
    <x-slot:topmenu>
        <x-topmenu></x-topmenu>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Data Indikator</h6>
                                <div class="d-flex justify-content-between">
                                    <form action="/indikator" method="GET">
                                        <div class="input-group ">
                                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                            <input name="search" type="search" class="form-control" placeholder="Cari Tahun Indikator">
                                        </div>
                                    </form>
                                    <a href="{{route('indikator.create')}}">
                                        <button class="btn btn-success btn-md float-end"><i class="fas fa-plus me-3 "></i>Tambah Data Indikator</button>
                                    </a>
                                </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table w-100 align-items-center mb-0">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID INDIKATOR</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                INDIKATOR</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                NAMA BUM Desa</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NAMA KECAMATAN</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NAMA DESA</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NAMA PENILAI</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                TAHUN</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                TOTAL NILAI</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NILAI PERSENTASE</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($indikator as $data)
                                        <tr class="text-center w-100">
                                            <td scope="row">{{ $data->id }}</td>
                                            <td>{{Str::upper( $data->kategori )}}</td>
                                            <td>{{Str::upper( $data->nama_bumdes )}}</td>
                                            <td>{{ $data->nama_kecamatan }}</td>
                                            <td>{{ $data->nama_desa }}</td>
                                            <td>{{Str::upper( $data->nama )}}</td>
                                            <td>{{ $data->tahun }}</td>
                                            <td>{{ $data->total_nilai }}</td>
                                            <td>{{ $data->nilai_persentase }}</td>
                                            <td>
                                                <div class="text-center ">
                                                    <a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('indikator.detail', ['id_bumdesa'=>$data->id_bumdesa, 'indikator'=>$data->kategori, 'tahun'=>$data->tahun]) }}"><i class="fas fa-clipboard-list me-2"></i>Detail</a>
                                                    <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('indikator.edit', $data->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                                    <form action="{{ route('indikator.destroy', $data->id) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data Tersebut?')" class="btn btn-link text-danger text-gradient px-3 mb-0" type="submit" value="Delete"><i class="far fa-trash-alt me-2"></i>Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    {{ $indikator->links() }}

                </div>
            </div>

            @include('sweetalert::alert')

    </x-slot:topmenu>
</x-app>

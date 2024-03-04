<x-app>
    <x-slot:sidebar>
        <x-sidebar></x-sidebar>

    </x-slot:sidebar>
    <x-slot:topmenu>
        <x-topmenu></x-topmenu>

        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">INDIKATOR PEMBINAAN DAN PEMBERDAYAAN SERTA EVALUASI BADAN USAHA MILIK DESA KABUPATEN BADUNG </h6>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-bars text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Indikator</h6>
                                            <span class="text-xs">250 in stock, <span class="font-weight-bold">346+ sold</span></span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                    <a href="{{ route('indikator.index') }}"><button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-pie-chart text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Kategori Aspek</h6>
                                            <span class="text-xs">123 closed, <span class="font-weight-bold">15 open</span></span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                    <a href="{{ route('kategori_aspek.index') }}"><button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-sliders text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Aspek</h6>
                                            <span class="text-xs">1 is active, <span class="font-weight-bold">40 closed</span></span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                    <a href="{{ route('subkategori_aspek.index') }}"><button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-tachometer text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Poin</h6>
                                            <span class="text-xs font-weight-bold">+ 430</span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                    <a href="{{ route('poin_aspek.index') }}"><button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-lg-0 mb-4">
                    <div class="card ">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-2">INDIKATOR</h6>
                            </div>
                            <div class="col-12 text-end pb-3">
                                <a class="btn bg-gradient-primary mb-0" href="{{route('indikator.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Indikator</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="display compact" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID Indikator</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama bumdes</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Desa</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kecamatan</th>
                                        <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Hasil</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Keterangan</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tahun</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            User</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Dibuat</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Diedit</th> -->
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($indikators as $data)
                                    <tr class="text-center w-100">
                                        <td scope="row">{{ $data->id }}</td>
                                        <td>{{ $data->nama_bumdes }}</td>
                                        <td>{{ $data->desa }}</td>
                                        <td>{{ $data->kecamatan }}</td>
                                        <!-- <td>{{ $data->keterangan }}</td>
                                        <td>{{ $data->tahun }}</td>
                                        <td>{{ $data->id_user }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td>{{ $data->updated_at }}</td> -->
                                        <td>
                                            <div class="text-center ">
                                                <a class="btn btn-link text-dark px-3 mb-0" href="{{route('indikator.edit', $data->id)}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                                <form action="{{route('indikator.destroy', $data->id)}}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button onclick="return confirm ('Apakah Anda Ingin Menghapus Data Tersebut?')" class="btn btn-link text-danger text-gradient px-3 mb-0" type="submit" value="Delete"><i class="far fa-trash-alt me-2"></i>Hapus</button>
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

            </div>

        </div>
        </div>
        @php
        //{{ $users->links() }}
        @endphp
        </div>
        </div>

        @include('sweetalert::alert')

    </x-slot:topmenu>
</x-app>
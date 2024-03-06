<x-app>
    <x-slot:sidebar>
        <x-sidebar></x-sidebar>

    </x-slot:sidebar>
    <x-slot:topmenu>
        <x-topmenu></x-topmenu>

        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <div class="card ">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-2">INDIKATOR</h6>
                            </div>
                            <div class="col-12 text-end pb-3">
                                <a class="btn bg-gradient-primary mb-0" href="{{route('indikator.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Indikator</a>
                                <a class="btn bg-gradient-danger mb-0" href="{{ route('evaluasi.index') }}"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Kembali</a>
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
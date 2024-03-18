<x-app>
    <x-slot:sidebar>
        <x-sidebar></x-sidebar>
    </x-slot:sidebar>
    <x-slot:topmenu>
        <x-topmenu></x-topmenu>

        @can('desa')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Data Badan Usaha Milik Desa {{ Str::upper(auth()->user()->nama) }}</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table w-100 align-items-center mb-0">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID BUM Desa</th>
                                            <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Username</th> -->
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                NAMA BUM Desa</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NAMA KECAMATAN</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NAMA DESA</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bumdesa as $data2)
                                        <tr class="text-center w-100">
                                            <td scope="row">{{ $data2->id }}</td>

                                            <td>{{ $data2->nama_bumdes }}</td>
                                            <td>{{ $data2->nama_kecamatan }}</td>
                                            <td>{{ $data2->nama_desa }}</td>

                                            <td>

                                                <div class="text-center ">
                                                    <a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('bumdesa.detail', $data2->id) }}"><i class="fas fa-clipboard-list me-2"></i>Detail</a>
                                                    <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('bumdesa.edit', $data2->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                                    <form action="{{ route('bumdesa.destroy', $data2->id) }}" method="post">
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
        @endcan

        @can('admin')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Data Badan Usaha Milik Desa</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table w-100 align-items-center mb-0">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID BUM Desa</th>
                                            <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Username</th> -->
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                NAMA BUM Desa</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NAMA KECAMATAN</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NAMA DESA</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bumdesa as $data)
                                        <tr class="text-center w-100">
                                            <td scope="row">{{ $data->id }}</td>

                                            <td>{{ $data->nama_bumdes }}</td>
                                            <td>{{ $data->nama_kecamatan }}</td>
                                            <td>{{ $data->nama_desa }}</td>
                                            <td>
                                                <div class="text-center ">
                                                    <a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('bumdesa.detail', $data->id) }}"><i class="fas fa-clipboard-list me-2"></i>Detail</a>
                                                    <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('bumdesa.edit', $data->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                                    <form action="{{ route('bumdesa.destroy', $data->id) }}" method="post">
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
        @endcan
        @can('pegawai')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Data Badan Usaha Milik Desa</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table w-100 align-items-center mb-0">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID BUM Desa</th>
                                            <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Username</th> -->
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                NAMA BUM Desa</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NAMA KECAMATAN</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NAMA DESA</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bumdesa as $data)
                                        <tr class="text-center w-100">
                                            <td scope="row">{{ $data->id }}</td>

                                            <td>{{ $data->nama_bumdes }}</td>
                                            <td>{{ $data->nama_kecamatan }}</td>
                                            <td>{{ $data->nama_desa }}</td>

                                            <td>

                                                <div class="text-center ">
                                                    <a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('bumdesa.detail', $data->id) }}"><i class="fas fa-clipboard-list me-2"></i>Detail</a>
                                                    <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('bumdesa.edit', $data->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                                    <form action="{{ route('bumdesa.destroy', $data->id) }}" method="post">
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
        @endcan
        <div class="container-fluid py-1 ">
            <div class="card mb-4 p-2">
                <div class="card-header pb-0">
                    <h6>Cari Desa Yang Belum Upload Berdasarkan Tahun Laporan</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('bumdesa.search') }}" class="" method="GET">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-8 w-flex">
                                <input type="text" maxlength="4" name="search" class="form-control" placeholder="Masukkan Tahun Laporan" required>
                            </div>
                            <div class="col-4 w-flex">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-sm m-0">Cari</button>
                                    <a href="{{route('bumdesa.index')}}"><button type="button" class="btn btn-warning btn-sm m-0 ">Reset</button></a>
                                </div>
                            </div>
                        </div>
                    </form><br>
                    
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if ($isSearching)
            <div class="card my-3 p-3 shadow">
                <p>Desa Yang Belum Upload Laporan Tahun <span class="text-dark">{{$dtpencarian}}</span> Jumlah :<span class="badge bg-danger fs-6 ms-2">{{$desaNotUploadCount = 0 ? 'tidak ada' : $desaNotUploadCount}} Desa</span></p>
                <ul class="list-group">
                    @foreach ($desaNotUploads as $desaNotUpload)
                    @if ($desaNotUpload->role == 'admin'||$desaNotUpload->role == 'pegawai')
                    {{ '' }}

                    {{-- <li class="list-group-item list-group-item-danger"></li> --}}
                    @else
                    <li class="list-group-item list-group-item-danger">
                        {{ Str::Upper($desaNotUpload->nama) }} <a class=" float-end" href="{{ route('pengumuman.create', $desaNotUpload->id) }}"><button class="btn btn-success btn-sm m-0" type="button">Buatkan Pengumuman</button></a>
                    </li>

                    @endif
                    @endforeach
                </ul>
                {{-- <table id="" class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($desaNotUploads as $desaNotUpload)
                                        <tr>
                                            <th scope="row" class="bg-danger text-white">
                                                {{ Str::Upper($desaNotUpload->name) }}</th>
                </tr>
                @endforeach
                </tbody>
                </table> --}}
            </div>
            @endif
        </div>
        </div>
        @include('sweetalert::alert')
    </x-slot:topmenu>
</x-app>
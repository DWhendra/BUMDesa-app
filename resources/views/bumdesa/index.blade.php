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
                            <h6>Data Badan Usaha Milik Desa</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID BUM Desa</th>
                                            <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Username</th> -->
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                NAMA BUM Desa</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                UNIT USAHA UTAMA</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NAMA KECAMATAN</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NAMA DESA</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                AKSI</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bumdesa as $data)
                                        <tr>
                                            <th scope="row">{{ $data->id }}</th>

                                            <td>{{ $data->nama_bumdes }}</td>
                                            <td>{{ $data->unit_usaha }}</td>
                                            <td>{{ $data->nama_kecamatan }}</td>
                                            <td>{{ $data->nama_desa }}</td>

                                            <td>

                                                <div class="ms-auto text-end">
                                                    <a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('bumdesa.detail', $data->id) }}"><i class="fas fa-clipboard-list me-2"></i>Detail</a>
                                                    <a class="btn btn-link text-dark px-3 mb-0" href=""><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href=""><i class="far fa-trash-alt me-2"></i>Delete</a>
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

            @include('sweetalert::alert')
    </x-slot:topmenu>
</x-app>
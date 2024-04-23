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
                            <h6>Data Pengumuman</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table id="example" class="display compact" style="width:100%">
                                    <thead class="text-center">
                                        <tr>
                                        <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID Pengumuman</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Tujuan Pengumuman</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Judul Pengumuman</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Pengumuman</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Tanggal</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Status</th>
                                                @canany(['admin', 'pegawai'])


                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                AKSI</th>
                                                @endcanany
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengumuman as $data)
                                            <tr class="text-center w-100">
                                                <td scope="row">{{ $data->id }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->judul }}</td>
                                                <td>{{ $data->deskripsi }}</td>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>{{ $data->status }}</td>



                                                <td>
                                                    <div class="text-center ">
                                                        <a class="btn btn-link text-dark px-3 mb-0"
                                                            href="{{ route('pengumuman.edit', $data->id) }}"><i
                                                                class="fas fa-pencil-alt text-dark me-2"
                                                                aria-hidden="true"></i>Edit</a>
                                                    @canany(['admin', 'pegawai'])
                                                        <form action="{{ route('pengumuman.destroy', $data->id) }}"
                                                            method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button
                                                                onclick="return confirm ('Apakah Anda Ingin Menghapus Data Tersebut?')"
                                                                class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                                type="submit" value="Delete"><i
                                                                    class="far fa-trash-alt me-2"></i>Hapus</button>
                                                        </form>
                                                        @endcanany
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

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

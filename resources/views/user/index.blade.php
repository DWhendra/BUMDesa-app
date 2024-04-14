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
                            <h6>Data Pengguna</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            @canany(['admin', 'pegawai'])
                            <div class="d-flex align-items-center">
                                <div class="card-header">
                                    <form action="/user" method="GET">
                                        <div class="input-group">
                                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                            <input name="search" type="search" class="form-control" placeholder="Cari Nama Pengguna">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @endcanany
                            <div class="table-responsive p-0">
                                <table id="example" class="display compact" style="width:100%">
                                    <thead class="text-center">
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                User ID</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Role</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $data)
                                            <tr class="text-center w-100">
                                                <td scope="row">{{ $data->id }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->role }}</td>

                                                <td>
                                                    <div class="text-center ">

                                                        <a class="btn btn-link text-dark px-3 mb-0"
                                                            href="{{ route('user.edit', $data->id) }}"><i
                                                                class="fas fa-pencil-alt text-dark me-2"
                                                                aria-hidden="true"></i>Edit</a>
                                                        @canany(['admin'])
                                                        <form action="{{ route('user.destroy', $data->id) }}"
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
                    @canany(['admin', 'pegawai'])
                    {{ $users->links() }}
                    @endcanany
                </div>
            </div>

            @include('sweetalert::alert')

    </x-slot:topmenu>
</x-app>

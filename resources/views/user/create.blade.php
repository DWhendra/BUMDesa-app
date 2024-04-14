<x-app>
    <x-slot:sidebar>
        <x-sidebar></x-sidebar>

    </x-slot:sidebar>
    <x-slot:topmenu>
        <x-topmenu></x-topmenu>
        @canany(['admin', 'pegawai'])

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">Tambah Data Pengguna</h6>
                                    <a class="btn-sm ms-auto" href="{{ route('user.index')}}"><button class="btn btn-primary btn-sm ms-auto">Kembali</button></a>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input name="nama" type="text" class="form-control" id="floatingInput" placeholder="nama" required value="{{old('nama')}}">
                                            <label for="floatingInput">Nama</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input name="username" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                            <label for="floatingInput">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input name="password" type="password" class="form-control" id="floatingInput" placeholder="nama" required>
                                            <label for="floatingInput">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-floating">
                                        <select class="form-select @error('role')is-invalid @enderror" name="role" id="">
                                            <option value="">Pilih Role</option>
                                            @can('admin')
                                            <option value="admin">ADMIN</option>
                                            @endcan
                                            <option value="desa">DESA</option>
                                            <option value="pegawai">PEGAWAI</option>
                                        </select>
                                        <label for="name">Role</label>
                                        <br>
                                    </div>
                                </div>

                                <br><button type="submit" class="btn btn-success btn-lg w-100" type="submit">SIMPAN</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
            
        </div>
        </div>
        @include('sweetalert::alert')
        @endcanany
    </x-slot:topmenu>
</x-app>

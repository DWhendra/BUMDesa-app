<x-app>
    <x-slot:sidebar>
        <x-sidebar></x-sidebar>

    </x-slot:sidebar>
    <x-slot:topmenu>
        <x-topmenu></x-topmenu>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0">Edit Data Pengguna</p>
                                    <a class="btn-sm ms-auto" href="{{ route('user.index')}}"><button class="btn btn-primary btn-sm ms-auto">Kembali</button></a>
                                </div>
                            </div>
                        </div>
                        @foreach ($edit as $dt)
                        <form action="{{ route('user.update', $dt->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{$dt->nama}}" name="nama" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                            <label for="floatingInput">Nama</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input disabled value="{{$dt->username}}" name=" username" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                            <label for="floatingInput">Username</label>
                                        </div>
                                        <input hidden value="{{$dt->username}}" name=" username" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{$dt->password}}" name="password" type="password" class="form-control" id="floatingInput" placeholder="nama" required>
                                            <label for="floatingInput">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <div class="form-floating">
                                                <div class="form-floating">
                                                    <select class="form-select input" name="role" id="" aria-label="Floating label select example">
                                                        <option @if($dt->role =='admin' ) selected @endif value="admin">Admin</option>
                                                        <option @if($dt->role =='desa' ) selected @endif value="desa">Desa</option>
                                                        <option @if($dt->role =='pegawai' ) selected @endif value="pegawai">Pegawai</option>
                                                    </select>
                                                    <label for="floatingSelect">Role</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br><button type="submit" class="btn btn-success btn-lg w-100" type="submit">SIMPAN</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>

            </div>
            <footer class="footer pt-3  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        </div>
        @include('sweetalert::alert')
    </x-slot:topmenu>
</x-app>
<x-app>
    <x-slot:sidebar>
        <x-sidebar></x-sidebar>

    </x-slot:sidebar>
    <x-slot:topmenu>
        @canany(['admin', 'pegawai'])
        <x-topmenu></x-topmenu>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">Tambah Data Pengumuman</h6>
                                    <a class="btn-sm ms-auto" href="{{ route('pengumuman.index')}}"><button class="btn btn-primary btn-sm ms-auto">Kembali</button></a>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('pengumuman.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            {{-- <input hidden name="id_user" type="text" value="{{Str::upper(auth()->user()->id )}}"> --}}
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <div class="form-floating">
                                                    <select class="form-select input" name="id_user" id="" aria-label="Floating label select example" required>
                                                        <option>Pilih Pengguna</option>
                                                        @foreach ($user as $data)
                                                        <option value="<?php echo $data->id ?>"><?php echo $data['nama'] ?></option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelect">Tujuan Pengumuman</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <input name="judul" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                                <label for="floatingInput">Judul</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <textarea name="deskripsi" id="floatingInput" style="height: 100px" class="form-control"></textarea>
                                                <label for="floatingInput">Deskripsi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <input name="tanggal" type="date" class="form-control" id="floatingInput" placeholder="date" required>
                                                <label for="floatingInput">Tanggal Pengumuman</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <select class="form-select input" name="status" id="" aria-label="Floating label select example">
                                                    <option value="AKTIF">AKTIF</option>
                                                    <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                                                </select>
                                                <label for="floatingInput">Status Pengumuman</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg w-100" type="submit">SIMPAN</button>
                                </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#desa').append('<option value="">Pilih Kecamatan Terlebih Dahulu</option>');
                $('#kecamatan').on('change', function() {
                    var id = $(this).val();
                    //console.log(id_opsi);
                    if (id) {
                        $.ajax({
                            url: '/create/' + id,

                            type: 'GET',
                            data: {
                                '_token': '{{ csrf_token() }}'
                            },

                            dataType: 'json',
                            success: function(data) {
                                //console.log(data);
                                if (data) {
                                    $('#desa').empty();
                                    $('#desa').append('<option value="">Pilih Desa</option>');
                                    $.each(data, function(key, desa) {
                                        $('#desa').append(
                                            '<option value="' + desa.id + '">' +
                                            desa.nama_desa + '</option>'
                                        );
                                    });
                                } else {
                                    $('#desa').empty();
                                }
                            }
                        });
                    } else {
                        $('#desa').empty();
                    }
                });
            });
        </script>
        @include('sweetalert::alert')
        @endcanany
    </x-slot:topmenu>
</x-app>

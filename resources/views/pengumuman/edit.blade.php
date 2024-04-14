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
                                    <p class="mb-0">Edit Data Pengumuman</p>
                                    <a class="btn-sm ms-auto" href="{{ route('pengumuman.index')}}"><button class="btn btn-primary btn-sm ms-auto">Kembali</button></a>
                                </div>
                            </div>
                        </div>
                        @foreach ($pengumuman as $pengumuman)
                        <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="card-body">
                                <div class="row g-3">

                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <div class="form-floating">
                                                    <div class="form-floating">
                                                        <select class="form-select input" name="id_user" id="kecamatan" aria-label="Floating label select example">
                                                            <option>Pilih Pengguna</option>
                                                            @foreach ($user as $data)
                                                            <option <?php if (($pengumuman->id_user == $data->id)) {
                                                                        echo 'selected';
                                                                    } ?> value="<?php echo $data->id ?>"><?php echo $data['nama'] ?></option>
                                                            @endforeach
                                                        </select>
                                                        <label for="floatingSelect">Tujuan Pengguna</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <input value="{{$pengumuman->judul}}" name="judul" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                                <label for="floatingInput">Judul</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $pengumuman->deskripsi }}" name="deskripsi" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                                <label for="floatingInput">Deskripsi</label>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input value="{{ $pengumuman->tanggal }}" name="tanggal" type="date" class="form-control" id="floatingInput" placeholder="date" required>
                                            <label for="floatingInput">Tanggal Pengumuman</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select input" name="status" id="" aria-label="Floating label select example">
                                                <option @if($pengumuman->status =='AKTIF' ) selected @endif value="AKTIF">AKTIF</option>
                                                <option @if($pengumuman->status =='TIDAK AKTIF' ) selected @endif value="TIDAK AKTIF">SELESAI</option>
                                            </select>
                                            <label for="floatingInput">Status Pengumuman</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg w-100" type="submit">SIMPAN</button>
                            </div>
                        </form>
                        @endforeach
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
    </x-slot:topmenu>
</x-app>

<x-app>
    <x-slot:sidebar>
        <x-sidebar></x-sidebar>

    </x-slot:sidebar>
    <x-slot:topmenu>
        <x-topmenu></x-topmenu>
        <div class="container-fluid">
            <div class="row mt-4">

                <div class="card p-0 m-0">

                    <div class="card-body p-2 m-0">
                        <div class="card-title">
                            <h6 class="mb-0 p-4 text-center">INDIKATOR PEMBINAAN DAN PEMBERDAYAAN SERTA EVALUASI BADAN USAHA MILIK DESA
                                KABUPATEN BADUNG </h6>
                        </div>
                        <form action="{{ route('keuntungan-dan-manfaat.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input name="bumdesa" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                        <label for="floatingInput">Nama BUM Desa</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input hidden name="id_user" type="text" value="{{Str::upper(auth()->user()->id )}}">
                                        <input disabled value="{{ Str::upper(auth()->user()->nama) }}" name="id_user" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                        <label for="floatingInput">Nama Pengisi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <select class="form-select input" name="id_kecamatan" id="kecamatan" aria-label="Floating label select example" required>
                                                <option>Pilih Kecamatan</option>
                                                @foreach ($kecamatan as $data)
                                                <option value="<?php echo $data->id ?>"><?php echo $data['nama_kecamatan'] ?></option>
                                                @endforeach
                                            </select>
                                            <label for="floatingSelect">Kecamatan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <select class="form-select input" name="id_desa" id="desa" aria-label="Floating label select example" required>

                                            </select>
                                            <!-- <input name="nama_desa" type="text" class="form-control" id="floatingInput" placeholder="nama"> -->
                                            <label for="floatingInput">Desa</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        <table class="table table-bordered" style="border: 1px solid black; border-collapse: collapse">
                            <thead>
                                <tr style="border-bottom: 1px solid black">
                                    <th style="border-bottom: 1px solid black" class="text-center" scope="col">No</th>
                                    <th style="border-bottom: 1px solid black" class="text-center" scope="col">Aspek Penilaian</th>
                                    <th style="border-bottom: 1px solid black" class="text-center" scope="col">Skor</th>
                                    <th style="border-bottom: 1px solid black" class="text-center" scope="col">Hasil Penilaian</th>
                                    <th style="border-bottom: 1px solid black" class="text-center" scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">4</td>
                                    <td class="text-center">5</td>
                                </tr>
                                <tr>
                                    <td class="bg-success text-white text-center">VII</td>
                                    <td class="bg-success text-white">KEUNTUNGAN DAN MANFAAT (20%)</td>
                                    <td class="bg-success text-white text-center">100</td>
                                    <td class="bg-success text-white"></td>
                                    <td class="bg-success text-white"></td>
                                </tr>
                                <!--DARI SINI -->
                                <tr>
                                    <td></td>
                                    <th>1. Kontribusi tarhadap PADesa 2022</th>
                                    <td class="text-center">40</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. < 50 Juta</td>
                                    <td class="text-center">10</td>
                                    <td><input name="nilai_1_a" type="number" class="form-control text-center" placeholder="10" ></td>
                                    <td><textarea name="ket_1_a" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">B. 50 juta s/d < 150 Juta</td>
                                    <td class="text-center">20</td>
                                    <td><input name="nilai_1_b" type="number" class="form-control text-center" placeholder="20" ></td>
                                    <td><textarea name="ket_1_b" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">C. 150 Juta s/d < 300 Juta</td>
                                    <td class="text-center">30</td>
                                    <td><input name="nilai_1_c" type="number" class="form-control text-center" placeholder="30" ></td>
                                    <td><textarea name="ket_1_c" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">D. 300 Juta keatas</td>
                                    <td class="text-center">40</td>
                                    <td><input name="nilai_1_d" type="number" class="form-control text-center" placeholder="40" ></td>
                                    <td><textarea name="ket_1_d" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">E. Nihil atau rugi</td>
                                    <td class="text-center">0</td>
                                    <td><input name="nilai_1_e" type="number" class="form-control text-center" placeholder="0" ></td>
                                    <td><textarea name="ket_1_e" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>
                                <!--DARI SINI -->
                                <tr>
                                    <td></td>
                                    <th>2. Penyerapan Tenaga Kerja</th>
                                    <td class="text-center">30</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. s.d 3 orang
                                    </td>
                                    <td class="text-center">15</td>
                                    <td><input name="nilai_2_a" type="number" class="form-control text-center" placeholder="15" ></td>
                                    <td><textarea name="ket_2_a" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">B.  s.d 5 orang</td>
                                    <td class="text-center">20</td>
                                    <td><input name="nilai_2_b" type="number" class="form-control text-center" placeholder="20" ></td>
                                    <td><textarea name="ket_2_b" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">C.  s.d 10 orang</td>
                                    <td class="text-center">25</td>
                                    <td><input name="nilai_2_c" type="number" class="form-control text-center" placeholder="25" ></td>
                                    <td><textarea name="ket_2_c" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">D. s.d 20 orang</td>
                                    <td class="text-center">30</td>
                                    <td><input name="nilai_2_d" type="number" class="form-control text-center" placeholder="30" ></td>
                                    <td><textarea name="ket_2_d" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>
                                <!-- SAMPAI SINI  -->
                                <!--DARI SINI -->
                                <tr>
                                    <td></td>
                                    <th>3. Penerima manfaat layanan/usaha</th>
                                    <td class="text-center">30</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. s.d 10 orang
                                    </td>
                                    <td class="text-center">15</td>
                                    <td><input name="nilai_3_a" type="number" class="form-control text-center" placeholder="15" ></td>
                                    <td><textarea name="ket_3_a" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">B.  s.d 50 orang</td>
                                    <td class="text-center">20</td>
                                    <td><input name="nilai_3_b" type="number" class="form-control text-center" placeholder="20" ></td>
                                    <td><textarea name="ket_3_b" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">C.  s.d 100 orang</td>
                                    <td class="text-center">25</td>
                                    <td><input name="nilai_3_c" type="number" class="form-control text-center" placeholder="25" ></td>
                                    <td><textarea name="ket_3_c" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">D. lebih dari 100 orang</td>
                                    <td class="text-center">30</td>
                                    <td><input name="nilai_3_d" type="number" class="form-control text-center" placeholder="30" ></td>
                                    <td><textarea name="ket_3_d" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>
                                <!-- SAMPAI SINI  -->
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input name="tim_1" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 1</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input name="tim_2" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 2</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input name="tim_3" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 3</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input name="tim_4" type="text" class="form-control" id="floatingInput" placeholder="name" required>
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 4</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input name="tim_5" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 5</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input name="tim_6" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 6</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input name="tim_7" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 7</label>
                                </div>
                            </div>
                        </div>
                        <br><button type="submit" class="btn btn-success btn-lg w-100" type="submit">SIMPAN</button>
                    </form>
                    <a href="{{route('keuntungan-dan-manfaat.index')}}"><button class="btn btn-secondary btn-lg w-100">Kembali</button></a>
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
    </x-slot:topmenu>
</x-app>

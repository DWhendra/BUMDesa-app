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
                        <form action="{{ route('usaha-dan-unit-usaha.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <select class="form-select input" name="id_bumdesa" id="id_bumdesa" aria-label="Floating label select example" required>
                                                <option>Pilih BUM Desa</option>
                                                @foreach ($dt as $bumdes)
                                                <option value="<?php echo $bumdes->id ?>"><?php echo $bumdes['nama_bumdes'] ?> | <?php echo $bumdes['tahun_laporan'] ?></option>
                                                @endforeach
                                            </select>
                                            <label for="floatingSelect">Badan Usaha Milik Desa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input hidden name="id_user" type="text" value="{{Str::upper(auth()->user()->id )}}">
                                        <input disabled value="{{ Str::upper(auth()->user()->nama) }}" name="id_user" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
                                        <label for="floatingInput">Nama Pengisi</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input name="tahun" type="number" class="form-control" id="floatingInput" placeholder="nama" required>
                                        <label for="floatingInput">Tahun</label>
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
                                    <td class="bg-success text-white text-center">III</td>
                                    <td class="bg-success text-white">USAHA DAN UNIT USAHA (15%)</td>
                                    <td class="bg-success text-white text-center">100</td>
                                    <td class="bg-success text-white"></td>
                                    <td class="bg-success text-white"></td>
                                </tr>
                                <!--DARI SINI -->
                                <tr>
                                    <td></td>
                                    <th>1. Memiliki Ijin Usaha</th>
                                    <td class="text-center">20</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. Ada</td>
                                    <td class="text-center">1-20</td>
                                    <td><input name="nilai_1_a" type="number" class="form-control text-center" placeholder="1 - 20" ></td>
                                    <td><textarea name="ket_1_a" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">B. Tidak Ada</td>
                                    <td class="text-center">0</td>
                                    <td><input name="nilai_1_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                    <td><textarea name="ket_1_b" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <!--DARI SINI -->
                                <tr>
                                    <td></td>
                                    <th>2. Laporan Bulanan</th>
                                    <td class="text-center">10</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. Ada</td>
                                    <td class="text-center">1-10</td>
                                    <td><input name="nilai_2_a" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                    <td><textarea name="ket_2_a" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">B. Tidak Ada
                                    </td>
                                    <td class="text-center">0</td>
                                    <td><input name="nilai_2_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                    <td><textarea name="ket_2_b" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <!-- SAMPAI SINI  -->
                                <!--DARI SINI -->
                                <tr>
                                    <td></td>
                                    <th> 3. Laporan Tahunan</th>
                                    <td class="text-center">10</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. Ada
                                    </td>
                                    <td class="text-center">1-10</td>
                                    <td><input name="nilai_3_a" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                    <td><textarea name="ket_3_a" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">B. Tidak Ada</td>
                                    <td class="text-center">0</td>
                                    <td><input name="nilai_3_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                    <td><textarea name="ket_3_b" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <!-- SAMPAI SINI  -->

                                <!--DARI SINI -->
                                <tr>
                                    <td></td>
                                    <th>4. Keuntungan Bersih</th>
                                    <td class="text-center">30</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. Untung ≥ 50 Juta
                                    </td>
                                    <td class="text-center">30</td>
                                    <td><input name="nilai_4_a" type="number" class="form-control text-center" placeholder="30" ></td>
                                    <td><textarea name="ket_4_a" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">B. Untung ≤ 50 Juta</td>
                                    <td class="text-center">15</td>
                                    <td><input name="nilai_4_b" type="number" class="form-control text-center" placeholder="15" ></td>
                                    <td><textarea name="ket_4_b" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">C. Seimbang (Balance)</td>
                                    <td class="text-center">5</td>
                                    <td><input name="nilai_4_c" type="number" class="form-control text-center" placeholder="5" ></td>
                                    <td><textarea name="ket_4_c" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">D. Rugi (Minus)</td>
                                    <td class="text-center">0</td>
                                    <td><input name="nilai_4_d" type="number" class="form-control text-center" placeholder="0" ></td>
                                    <td><textarea name="ket_4_d" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>
                                <!-- SAMPAI SINI  -->
                                <!--DARI SINI -->
                                <tr>
                                    <td></td>
                                    <th>5. Omset</th>
                                    <td class="text-center">30</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. 1 Miliar ke atas
                                    </td>
                                    <td class="text-center">30</td>
                                    <td><input name="nilai_5_a" type="number" class="form-control text-center" placeholder="30" ></td>
                                    <td><textarea name="ket_5_a" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">B.  500 jt s.d 1 miliar</td>
                                    <td class="text-center">20</td>
                                    <td><input name="nilai_5_b" type="number" class="form-control text-center" placeholder="20" ></td>
                                    <td><textarea name="ket_5_b" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">C.  101 Jt s.d 500 jt</td>
                                    <td class="text-center">15</td>
                                    <td><input name="nilai_5_c" type="number" class="form-control text-center" placeholder="15" ></td>
                                    <td><textarea name="ket_5_c" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">D. ≤ 100 Jt</td>
                                    <td class="text-center">10</td>
                                    <td><input name="nilai_5_d" type="number" class="form-control text-center" placeholder="10" ></td>
                                    <td><textarea name="ket_5_d" class="form-control" placeholder="Keterangan" style="height: 42px"></textarea></td>
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
                    <a href="{{route('usaha-dan-unit-usaha.index')}}"><button class="btn btn-secondary btn-lg w-100">Kembali</button></a>
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

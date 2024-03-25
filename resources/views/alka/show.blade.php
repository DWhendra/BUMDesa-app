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

                        <form action="{{ route('alka.update', $dt->id) }}" method="" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$dt->nama_bumdes}}" name="bumdesa" type="text" class="form-control" id="floatingInput" placeholder="nama" required>                                        <label for="floatingInput">Nama BUM Desa</label>
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
                                        <td class="bg-success text-white text-center">VI</td>
                                        <td class="bg-success text-white">Adminstrasi, Laporan Keuangan dan Akuntabilitas (10%)</td>
                                        <td class="bg-success text-white text-center">100</td>
                                        <td class="bg-success text-white"></td>
                                        <td class="bg-success text-white"></td>
                                    </tr>
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>1. Laporan Tahunan BUM Desa 2022</th>
                                        <td class="text-center">20</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada (Neraca, Laba rugi, perubahan modal, arus kas dan CALK)<br> melalui Musdes</td>
                                        <td class="text-center">15-20</td>
                                        <td><input disabled value="{{$dt->nilai_1_a}}" name="nilai_1_a" type="number" class="form-control text-center" placeholder="15 - 20" ></td>
                                        <td><textarea disabled name="ket_1_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_1_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Ada (Neraca, Laba Rugi, Perubahan Modal, Arus Kas)<br> melalui Musdes</td>
                                        <td class="text-center">10-14</td>
                                        <td><input disabled value="{{$dt->nilai_1_b}}" name="nilai_1_b" type="number" class="form-control text-center" placeholder="10 - 14" ></td>
                                        <td><textarea disabled name="ket_1_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_1_b}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C. Ada, (Neraca, Laba Rugi) melalui Musdes</td>
                                        <td class="text-center">1-9</td>
                                        <td><input disabled value="{{$dt->nilai_1_c}}" name="nilai_1_c" type="number" class="form-control text-center" placeholder="1 - 9" ></td>
                                        <td><textarea disabled name="ket_1_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_1_c}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">D. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$dt->nilai_1_d}}" name="nilai_1_d" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_1_d" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_1_d}}</textarea></td>
                                    </tr>
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>2. Laporan Semesteran BUM Desa 2022</th>
                                        <td class="text-center">20</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada (Neraca, Laba rugi, perubahan modal, arus kas dan CALK)
                                        </td>
                                        <td class="text-center">15-20</td>
                                        <td><input disabled value="{{$dt->nilai_2_a}}" name="nilai_2_a" type="number" class="form-control text-center" placeholder="15 - 20" ></td>
                                        <td><textarea disabled name="ket_2_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_2_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Ada (Neraca, Laba Rugi, Perubahan Modal, Arus Kas)
                                        </td>
                                        <td class="text-center">10-14</td>
                                        <td><input disabled value="{{$dt->nilai_2_b}}" name="nilai_2_b" type="number" class="form-control text-center" placeholder="10 - 14" ></td>
                                        <td><textarea disabled name="ket_2_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_2_b}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C. Ada, (Neraca, Laba Rugi)</td>
                                        <td class="text-center">1-9</td>
                                        <td><input disabled value="{{$dt->nilai_2_c}}" name="nilai_2_c" type="number" class="form-control text-center" placeholder="1 - 9" ></td>
                                        <td><textarea disabled name="ket_2_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_2_c}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">D. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$dt->nilai_2_d}}" name="nilai_2_d" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_2_d" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_2_d}}</textarea></td>
                                    </tr>

                                    <!-- SAMPAI SINI  -->
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th> 3. Laporan Pengawasan Tahunan 2022</th>
                                        <td class="text-center">20</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada, disampaikan di Musdes
                                        </td>
                                        <td class="text-center">10-20</td>
                                        <td><input disabled value="{{$dt->nilai_3_a}}" name="nilai_3_a" type="number" class="form-control text-center" placeholder="10 - 20" ></td>
                                        <td><textarea disabled name="ket_3_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_3_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Ada tidak melalui Musdes</td>
                                        <td class="text-center">1-9</td>
                                        <td><input disabled value="{{$dt->nilai_3_b}}" name="nilai_3_b" type="number" class="form-control text-center" placeholder="1 - 9" ></td>
                                        <td><textarea disabled name="ket_3_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_3_b}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$dt->nilai_3_c}}" name="nilai_3_c" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_3_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_3_c}}</textarea></td>
                                    </tr>

                                    <!-- SAMPAI SINI  -->

                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>4. Laporan Semesteran Pengawas 2022</th>
                                        <td class="text-center">20</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada
                                        </td>
                                        <td class="text-center">1-20</td>
                                        <td><input disabled value="{{$dt->nilai_4_a}}" name="nilai_4_a" type="number" class="form-control text-center" placeholder="1 - 20" ></td>
                                        <td><textarea disabled name="ket_4_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_4_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$dt->nilai_4_b}}" name="nilai_4_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_4_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_4_b}}</textarea></td>
                                    </tr>

                                    <!-- SAMPAI SINI  -->
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>5. Mekanisme menerima masukan<br> (testimoni, keluhan, pengaduan dan  saran)</th>
                                        <td class="text-center">20</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Tidak Ada
                                        </td>
                                        <td class="text-center">1-20</td>
                                        <td><input disabled value="{{$dt->nilai_5_a}}" name="nilai_5_a" type="number" class="form-control text-center" placeholder="1 - 20" ></td>
                                        <td><textarea disabled name="ket_5_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_5_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$dt->nilai_5_b}}" name="nilai_5_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_5_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_5_b}}</textarea></td>
                                    </tr>
                                    <!-- SAMPAI SINI  -->

                                    <tr>
                                        <td></td>
                                        <td class="ps-5"></td>
                                        <td class="text-center">Total <br> Nilai</td>
                                        <td><input disabled value="{{$dt->total_nilai}}" name="nilai_5_cc" type="number" class="form-control text-center" placeholder="0" ></td>
                                          <td></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                    </form>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input disabled value="{{$dt->tim_1}}" name="tim_1" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                <label for="floatingInput">Tim Pembina dan Evaluasi 1</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input disabled value="{{$dt->tim_2}}" name="tim_2" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                <label for="floatingInput">Tim Pembina dan Evaluasi 2</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input disabled value="{{$dt->tim_3}}" name="tim_3" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                <label for="floatingInput">Tim Pembina dan Evaluasi 3</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input disabled value="{{$dt->tim_4}}" name="tim_4" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                <label for="floatingInput">Tim Pembina dan Evaluasi 4</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input disabled value="{{$dt->tim_5}}" name="tim_5" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                <label for="floatingInput">Tim Pembina dan Evaluasi 5</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input disabled value="{{$dt->tim_6}}" name="tim_6" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                <label for="floatingInput">Tim Pembina dan Evaluasi 6</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input disabled value="{{$dt->tim_7}}" name="tim_7" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                <label for="floatingInput">Tim Pembina dan Evaluasi 7</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input disabled value="{{$dt->created_at}}" name="tim_7" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                <label for="floatingInput">Tanggal Evaluasi</label>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('alka.index')}}"><button class="btn btn-secondary btn-lg w-100">Kembali</button></a>
                    </div>
                </div>
            </div>
        </div>

    </x-slot:topmenu>
</x-app>

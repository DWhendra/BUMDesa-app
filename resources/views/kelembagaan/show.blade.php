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
                        <form method="{{ route('kelembagaan.update', $dt->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$dt->nama_bumdes}}" name="bumdesa" type="text" class="form-control" id="floatingInput" placeholder="nama" required>                                        <label for="floatingInput">Nama BUM Desa</label>
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
                                        <input disabled value="{{$dt->tahun}}" name="tahun" type="text" class="form-control" id="floatingInput" placeholder="nama" required>
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
                                    <td class="bg-success text-white text-center">I</td>
                                    <td class="bg-success text-white">KELEMBAGAAN (10%)</td>
                                    <td class="bg-success text-white text-center">100</td>
                                    <td class="bg-success text-white"></td>
                                    <td class="bg-success text-white"></td>
                                </tr>
                                <!--DARI SINI -->
                                <tr>
                                    <td></td>
                                    <th>1. KETERSEDIAAN KANTOR BUM DESA</th>
                                    <td class="text-center">20</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. Memiliki Kantor Sendiri</td>
                                    <td class="text-center">11-20</td>
                                    <td><input disabled value="{{$dt->nilai_1_a}}" name="nilai_1_a" type="number" class="form-control text-center" placeholder="11 - 20" ></td>
                                    <td><textarea disabled name="ket_1_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_1_a}}</textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">B. Menumpang Di Kantor /aset/desa/sewa</td>
                                    <td class="text-center">1-10</td>
                                    <td><input disabled value="{{$dt->nilai_1_b}}" name="nilai_1_b" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                    <td><textarea disabled name="ket_1_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_1_b}}</textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">C. Tidak Ada</td>
                                    <td class="text-center">0</td>
                                    <td><input disabled value="{{$dt->nilai_1_c}}" name="nilai_1_c" type="number" class="form-control text-center" placeholder="0" ></td>
                                    <td><textarea disabled name="ket_1_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_1_c}}</textarea></td>
                                </tr>

                                <!--DARI SINI -->
                                <tr>
                                    <td></td>
                                    <th>2. PERANGKAT ORGANISASI BUM DESA</th>
                                    <td class="text-center">20</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. Ada dan lengkap (Musdes, Penasehat, Pengawas dan Pelaksanan
                                        Operasional <br> ( Direktur, Sekretaris, Bendahara, Manajer dan Pegawai BUMDesa).
                                    </td>
                                    <td class="text-center">11-20</td>
                                    <td><input disabled value="{{$dt->nilai_2_a}}" name="nilai_2_a" type="number" class="form-control text-center" placeholder="11 - 20" ></td>
                                    <td><textarea disabled name="ket_2_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_2_a}}</textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">B. Ada dan tidak lengkap
                                    </td>
                                    <td class="text-center">1-10</td>
                                    <td><input disabled value="{{$dt->nilai_2_b}}" name="nilai_2_b" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                    <td><textarea disabled name="ket_2_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_2_b}}</textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">C. Tidak Ada</td>
                                    <td class="text-center">0</td>
                                    <td><input disabled value="{{$dt->nilai_2_c}}" name="nilai_2_c" type="number" class="form-control text-center" placeholder="0" ></td>
                                    <td><textarea disabled name="ket_2_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_2_c}}</textarea></td>
                                </tr>

                                <!-- SAMPAI SINI  -->
                                <!--DARI SINI -->
                                <tr>
                                    <td></td>
                                    <th> 3. Ketersediaan Informasi/Papan Nama BUM Desa</th>
                                    <td class="text-center">15</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. Ada dan lengkap
                                    </td>
                                    <td class="text-center">1-15</td>
                                    <td><input disabled value="{{$dt->nilai_3_a}}" name="nilai_3_a" type="number" class="form-control text-center" placeholder="1 - 15" ></td>
                                    <td><textarea disabled name="ket_3_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_3_a}}</textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">B. Tidak Ada</td>
                                    <td class="text-center">0</td>
                                    <td><input disabled value="{{$dt->nilai_3_b}}" name="nilai_3_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                    <td><textarea disabled name="ket_3_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_3_b}}</textarea></td>
                                </tr>

                                <!-- SAMPAI SINI  -->

                                <!--DARI SINI -->
                                <tr>
                                    <td></td>
                                    <th>4. Ketersediaan Informasi Papan Struktur Perangkat Organisasi BUM Desa</th>
                                    <td class="text-center">15</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. Ada dan lengkap
                                    </td>
                                    <td class="text-center">1-15</td>
                                    <td><input disabled value="{{$dt->nilai_4_a}}" name="nilai_4_a" type="number" class="form-control text-center" placeholder="1 - 15" ></td>
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
                                    <th>5. Sarana Penunjang lain (Meubeler, Komputer, mesin ketik, kendaraan bermotor)</th>
                                    <td class="text-center">30</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-4">A. Meubelir
                                    </td>
                                    <td class="text-center">10</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-5">a.  Milik Pemerintah Desa/Pihak Lain </td>
                                    <td class="text-center">3</td>
                                    <td><input disabled value="{{$dt->nilai_5_aa}}" name="nilai_5_aa" type="number" class="form-control text-center" placeholder="3" ></td>
                                    <td><textarea disabled name="ket_5_aa" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_5_aa}}</textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-5">b. Hibah
                                    </td>
                                    <td class="text-center">5</td>
                                    <td><input disabled value="{{$dt->nilai_5_ab}}" name="nilai_5_ab" type="number" class="form-control text-center" placeholder="5" ></td>
                                    <td><textarea disabled name="ket_5_ab" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_5_ab}}</textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="ps-5">c. Milik Bum Desa
                                    </td>
                                    <td class="text-center">10</td>
                                    <td><input disabled value="{{$dt->nilai_5_ac}}" name="nilai_5_ac" type="number" class="form-control text-center" placeholder="10" ></td>
                                    <td><textarea disabled name="ket_5_ac" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_5_ac}}</textarea></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="ps-4">B. Alat Transportasi</td>
                                    <td class="text-center">10</td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                  <td></td>
                                  <td class="ps-5">a.  Milik Pemerintah Desa/Pihak Lain </td>
                                  <td class="text-center">3</td>
                                  <td><input disabled value="{{$dt->nilai_5_ba}}" name="nilai_5_ba" type="number" class="form-control text-center" placeholder="3" ></td>
                                    <td><textarea disabled name="ket_5_ba" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_5_ba}}</textarea></td>
                              </tr>
                              <tr>
                                  <td></td>
                                  <td class="ps-5">b. Hibah
                                  </td>
                                  <td class="text-center">5</td>
                                  <td><input disabled value="{{$dt->nilai_5_bb}}" name="nilai_5_bb" type="number" class="form-control text-center" placeholder="5" ></td>
                                    <td><textarea disabled name="ket_5_bb" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_5_bb}}</textarea></td>
                              </tr>
                              <tr>
                                  <td></td>
                                  <td class="ps-5">c. Milik Bum Desa
                                  </td>
                                  <td class="text-center">10</td>
                                  <td><input disabled value="{{$dt->nilai_5_bc}}" name="nilai_5_bc" type="number" class="form-control text-center" placeholder="10" ></td>
                                    <td><textarea disabled name="ket_5_bc" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_5_bc}}</textarea></td>
                              </tr>

                              <tr>
                                  <td></td>
                                  <td class="ps-4">C. IT dan Alat Pendukung Kerja</td>
                                  <td class="text-center">10</td>
                                  <td></td>
                                  <td></td>
                              </tr>
                              <tr>
                                  <td></td>
                                  <td class="ps-5">a. Komputer & Printer, HP, Wifi, WEB</td>
                                  <td class="text-center">10</td>
                                  <td><input disabled value="{{$dt->nilai_5_ca}}" name="nilai_5_ca" type="number" class="form-control text-center" placeholder="10" ></td>
                                    <td><textarea disabled name="ket_5_ca" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_5_ca}}</textarea></td>
                              </tr>
                              <tr>
                                  <td></td>
                                  <td class="ps-5">b. Komputer & Printer, WIFI, WEB
                                  </td>
                                  <td class="text-center">5</td>
                                  <td><input disabled value="{{$dt->nilai_5_cb}}" name="nilai_5_cb" type="number" class="form-control text-center" placeholder="5" ></td>
                                    <td><textarea disabled name="ket_5_cb" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_5_cb}}</textarea></td>
                              </tr>
                              <tr>
                                  <td></td>
                                  <td class="ps-5">c.  Tidak Ada</td>
                                  <td class="text-center">0</td>
                                  <td><input disabled value="{{$dt->nilai_5_cc}}" name="nilai_5_cc" type="number" class="form-control text-center" placeholder="0" ></td>
                                    <td><textarea disabled name="ket_5_cc" class="form-control" placeholder="Keterangan" style="height: 42px">{{$dt->ket_5_cc}}</textarea></td>
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

                    <a href="{{route('kelembagaan.index')}}"><button class="btn btn-secondary btn-lg w-100">Kembali</button></a>
                    </div>
                </div>
            </div>
        </div>

    </x-slot:topmenu>
</x-app>

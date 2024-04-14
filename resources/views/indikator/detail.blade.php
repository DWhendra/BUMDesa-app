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
                        <form action="{{ route('indikator.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <select class="form-select input" name="kategori" id="select-indikator" aria-label="Floating label select example" required disabled>
                                                <option>Pilih Indikator</option>
                                                @foreach(App\Models\Indikator::getIndikatorOptions() as $key => $value)
                                                    <option value="{{ $key }}" {{ $data->kategori == $key ? 'selected' : '' }}>{{Str::upper( $value )}}</option>
                                                @endforeach
                                            </select>
                                            <label for="floatingSelect">Indikator</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating mb-3">
                                            <input disabled value="{{$data->bumdesa->nama_bumdes}}" name="bumdesa" type="text" class="form-control" id="floatingInput" placeholder="nama" required>                                        <label for="floatingInput">Nama BUM Desa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input hidden name="id_user" type="text" value="{{Str::upper(auth()->user()->id )}}">
                                        <input disabled value="{{ Str::upper(auth()->user()->nama) }}" name="id_user" type="text" class="form-control" id="floatingInput" placeholder="nama" disabled required>
                                        <label for="floatingInput">Nama Pengisi</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating mb-3">
                                        <input value="{{$data->tahun}}" name="tahun" type="text" class="form-control" id="floatingInput" placeholder="nama" disabled required>
                                        <label for="floatingInput">Tahun</label>
                                    </div>
                                </div>
                            </div>

                            <br>

                        {{-- KELEMBAGAAN --}}
                        <fieldset id="kelembagaan" disabled style="display: none">
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
                                        <td><input disabled value="{{$data->nilai_1_a}}" name="nilai_1_a" type="number" class="form-control text-center" placeholder="11 - 20" ></td>
                                        <td><textarea disabled name="ket_1_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Menumpang Di Kantor /aset/desa/sewa</td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_1_b}}" name="nilai_1_b" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_1_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_b}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_1_c}}" name="nilai_1_c" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_1_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_c}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_2_a}}" name="nilai_2_a" type="number" class="form-control text-center" placeholder="11 - 20" ></td>
                                        <td><textarea disabled name="ket_2_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Ada dan tidak lengkap
                                        </td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_2_b}}" name="nilai_2_b" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_2_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_b}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_2_c}}" name="nilai_2_c" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_2_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_c}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_3_a}}" name="nilai_3_a" type="number" class="form-control text-center" placeholder="1 - 15" ></td>
                                        <td><textarea disabled name="ket_3_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_3_b}}" name="nilai_3_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_3_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_b}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_4_a}}" name="nilai_4_a" type="number" class="form-control text-center" placeholder="1 - 15" ></td>
                                        <td><textarea disabled name="ket_4_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_4_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_4_b}}" name="nilai_4_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_4_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_4_b}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_5_aa}}" name="nilai_5_aa" type="number" class="form-control text-center" placeholder="3" ></td>
                                        <td><textarea disabled name="ket_5_aa" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_aa}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-5">b. Hibah
                                        </td>
                                        <td class="text-center">5</td>
                                        <td><input disabled value="{{$data->nilai_5_ab}}" name="nilai_5_ab" type="number" class="form-control text-center" placeholder="5" ></td>
                                        <td><textarea disabled name="ket_5_ab" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_ab}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-5">c. Milik Bum Desa
                                        </td>
                                        <td class="text-center">10</td>
                                        <td><input disabled value="{{$data->nilai_5_ac}}" name="nilai_5_ac" type="number" class="form-control text-center" placeholder="10" ></td>
                                        <td><textarea disabled name="ket_5_ac" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_ac}}</textarea></td>
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
                                      <td><input disabled value="{{$data->nilai_5_ba}}" name="nilai_5_ba" type="number" class="form-control text-center" placeholder="3" ></td>
                                        <td><textarea disabled name="ket_5_ba" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_ba}}</textarea></td>
                                  </tr>
                                  <tr>
                                      <td></td>
                                      <td class="ps-5">b. Hibah
                                      </td>
                                      <td class="text-center">5</td>
                                      <td><input disabled value="{{$data->nilai_5_bb}}" name="nilai_5_bb" type="number" class="form-control text-center" placeholder="5" ></td>
                                        <td><textarea disabled name="ket_5_bb" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_bb}}</textarea></td>
                                  </tr>
                                  <tr>
                                      <td></td>
                                      <td class="ps-5">c. Milik Bum Desa
                                      </td>
                                      <td class="text-center">10</td>
                                      <td><input disabled value="{{$data->nilai_5_bc}}" name="nilai_5_bc" type="number" class="form-control text-center" placeholder="10" ></td>
                                        <td><textarea disabled name="ket_5_bc" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_bc}}</textarea></td>
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
                                      <td><input disabled value="{{$data->nilai_5_ca}}" name="nilai_5_ca" type="number" class="form-control text-center" placeholder="10" ></td>
                                        <td><textarea disabled name="ket_5_ca" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_ca}}</textarea></td>
                                  </tr>
                                  <tr>
                                      <td></td>
                                      <td class="ps-5">b. Komputer & Printer, WIFI, WEB
                                      </td>
                                      <td class="text-center">5</td>
                                      <td><input disabled value="{{$data->nilai_5_cb}}" name="nilai_5_cb" type="number" class="form-control text-center" placeholder="5" ></td>
                                        <td><textarea disabled name="ket_5_cb" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_cb}}</textarea></td>
                                  </tr>
                                  <tr>
                                      <td></td>
                                      <td class="ps-5">c.  Tidak Ada</td>
                                      <td class="text-center">0</td>
                                      <td><input disabled value="{{$data->nilai_5_cc}}" name="nilai_5_cc" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_5_cc" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_cc}}</textarea></td>
                                  </tr>
                                    <!-- SAMPAI SINI  -->

                                    <tr>
                                        <td></td>
                                        <td class="ps-5"></td>
                                        <td class="text-center">Total <br> Nilai</td>
                                        <td><input disabled value="{{$data->total_nilai}}" name="nilai_5_cc" type="number" class="form-control text-center" placeholder="0" ></td>
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
                        </fieldset>

                        {{-- MANAJEMEN --}}
                        <fieldset id="manajemen" disabled style="display: none">
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
                                        <td class="bg-success text-white text-center">II</td>
                                        <td class="bg-success text-white">MANAJEMEN (10%)</td>
                                        <td class="bg-success text-white text-center">100</td>
                                        <td class="bg-success text-white"></td>
                                        <td class="bg-success text-white"></td>
                                    </tr>
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>1. Rencana Program Kerja BUM Desa</th>
                                        <td class="text-center">30</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada</td>
                                        <td class="text-center">1-30</td>
                                        <td><input disabled value="{{$data->nilai_1_a}}" name="nilai_1_a" type="number" class="form-control text-center" placeholder="1 - 30" ></td>
                                        <td><textarea disabled name="ket_1_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_1_b}}" name="nilai_1_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_1_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_b}}</textarea></td>
                                    </tr>

                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>2. Pedoman/SOP Pengelolaan SDM dan Pegawai BUM Desa</th>
                                        <td class="text-center">20</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada</td>
                                        <td class="text-center">1-20</td>
                                        <td><input disabled value="{{$data->nilai_2_a}}" name="nilai_2_a" type="number" class="form-control text-center" placeholder="1 - 20" ></td>
                                        <td><textarea disabled name="ket_2_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada
                                        </td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_2_b}}" name="nilai_2_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_2_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_b}}</textarea></td>
                                    </tr>

                                    <!-- SAMPAI SINI  -->
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th> 3. Pedoman/SOP Kegiatan Usaha BUMDesa</th>
                                        <td class="text-center">20</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada
                                        </td>
                                        <td class="text-center">1-20</td>
                                        <td><input disabled value="{{$data->nilai_3_a}}" name="nilai_3_a" type="number" class="form-control text-center" placeholder="1 - 20" ></td>
                                        <td><textarea disabled name="ket_3_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_3_b}}" name="nilai_3_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_3_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_b}}</textarea></td>
                                    </tr>

                                    <!-- SAMPAI SINI  -->

                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>4. Pedoman/SOP Keuangan/Kebijakan Akuntansi BUM Desa</th>
                                        <td class="text-center">10</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada
                                        </td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_4_a}}" name="nilai_4_a" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_4_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_4_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_4_b}}" name="nilai_4_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_4_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_4_b}}</textarea></td>
                                    </tr>

                                    <!-- SAMPAI SINI  -->
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>5. Pedoman/SOP Pemasaran BUM Desa</th>
                                        <td class="text-center">10</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada
                                        </td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_5_a}}" name="nilai_5_a" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_5_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_5_b}}" name="nilai_5_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_5_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_b}}</textarea></td>
                                    </tr>
                                    <!-- SAMPAI SINI  -->
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>6. Pemanfaatan Teknologi Digital</th>
                                        <td class="text-center">10</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada
                                        </td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_6_a}}" name="nilai_6_a" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_6_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_6_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_6_b}}" name="nilai_6_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_6_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_6_b}}</textarea></td>
                                    </tr>
                                    <!-- SAMPAI SINI  -->
                                    <tr>
                                        <td></td>
                                        <td class="ps-5"></td>
                                        <td class="text-center">Total <br> Nilai</td>
                                        <td><input disabled value="{{$data->total_nilai}}" name="nilai_5_cc" type="number" class="form-control text-center" placeholder="0" ></td>
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
                        </fieldset>

                        {{-- USAHA DAN UNIT USAHA --}}
                        <fieldset id="usaha-dan-unit-usaha" disabled style="display: none">
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
                                        <td><input disabled value="{{$data->nilai_1_a}}" name="nilai_1_a" type="number" class="form-control text-center" placeholder="1 - 20" ></td>
                                        <td><textarea disabled name="ket_1_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_1_b}}" name="nilai_1_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_1_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_b}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_2_a}}" name="nilai_2_a" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_2_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada
                                        </td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_2_b}}" name="nilai_2_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_2_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_b}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_3_a}}" name="nilai_3_a" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_3_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_3_b}}" name="nilai_3_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_3_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_b}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_4_a}}" name="nilai_4_a" type="number" class="form-control text-center" placeholder="30" ></td>
                                        <td><textarea disabled name="ket_4_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_4_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Untung ≤ 50 Juta</td>
                                        <td class="text-center">15</td>
                                        <td><input disabled value="{{$data->nilai_4_b}}" name="nilai_4_b" type="number" class="form-control text-center" placeholder="15" ></td>
                                        <td><textarea disabled name="ket_4_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_4_b}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C. Seimbang (Balance)</td>
                                        <td class="text-center">5</td>
                                        <td><input disabled value="{{$data->nilai_4_c}}" name="nilai_4_c" type="number" class="form-control text-center" placeholder="5" ></td>
                                        <td><textarea disabled name="ket_4_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_4_c}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">D. Rugi (Minus)</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_4_d}}" name="nilai_4_d" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_4_d" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_4_d}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_5_a}}" name="nilai_5_a" type="number" class="form-control text-center" placeholder="30" ></td>
                                        <td><textarea disabled name="ket_5_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B.  500 jt s.d 1 miliar</td>
                                        <td class="text-center">20</td>
                                        <td><input disabled value="{{$data->nilai_5_b}}" name="nilai_5_b" type="number" class="form-control text-center" placeholder="20" ></td>
                                        <td><textarea disabled name="ket_5_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_b}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C.  101 Jt s.d 500 jt</td>
                                        <td class="text-center">15</td>
                                        <td><input disabled value="{{$data->nilai_5_c}}" name="nilai_5_c" type="number" class="form-control text-center" placeholder="15" ></td>
                                        <td><textarea disabled name="ket_5_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_c}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">D. ≤ 100 Jt</td>
                                        <td class="text-center">10</td>
                                        <td><input disabled value="{{$data->nilai_5_d}}" name="nilai_5_d" type="number" class="form-control text-center" placeholder="10" ></td>
                                        <td><textarea disabled name="ket_5_d" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_d}}</textarea></td>
                                    </tr>
                                    <!-- SAMPAI SINI  -->
                                    <tr>
                                        <td></td>
                                        <td class="ps-5"></td>
                                        <td class="text-center">Total <br> Nilai</td>
                                        <td><input disabled value="{{$data->total_nilai}}" name="nilai_5_cc" type="number" class="form-control text-center" placeholder="0" ></td>
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
                        </fieldset>

                        {{-- KERJASAMA DAN INOVASI --}}
                        <fieldset id="kerjasama-dan-inovasi" disabled style="display: none">
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
                                        <td class="bg-success text-white text-center">IV</td>
                                        <td class="bg-success text-white">KERJASAMA DAN INOVASI (25%)</td>
                                        <td class="bg-success text-white text-center">100</td>
                                        <td class="bg-success text-white"></td>
                                        <td class="bg-success text-white"></td>
                                    </tr>
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>1. Kerjasama BUMDesa dengan BUMDesa </th>
                                        <td class="text-center">10</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada</td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_1_a}}" name="nilai_1_a" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_1_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_1_b}}" name="nilai_1_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_1_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_b}}</textarea></td>
                                    </tr>

                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>2. Kerjasama BUMDesa dengan Pihak Ketiga/BUMN/BUMD</th>
                                        <td class="text-center">10</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada</td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_2_a}}" name="nilai_2_a" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_2_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada
                                        </td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_2_b}}" name="nilai_2_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_2_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_b}}</textarea></td>
                                    </tr>

                                    <!-- SAMPAI SINI  -->
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th> 3. Kerjasama BUMdes dengan Pihak Swasta </th>
                                        <td class="text-center">10</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada
                                        </td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_3_a}}" name="nilai_3_a" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_3_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_3_b}}" name="nilai_3_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_3_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_b}}</textarea></td>
                                    </tr>

                                    <!-- SAMPAI SINI  -->

                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>4. Naskah Perjanjian Kerjasama</th>
                                        <td class="text-center">10</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada
                                        </td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_4_a}}" name="nilai_4_a" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_4_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_4_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_4_b}}" name="nilai_4_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_4_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_4_b}}</textarea></td>
                                    </tr>
                                    <!-- SAMPAI SINI  -->
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>5. Inovasi</th>
                                        <td class="text-center">60</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Akses Pasar
                                        </td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_5_a}}" name="nilai_5_a" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_5_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B.  Akses Barang Murah</td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_5_b}}" name="nilai_5_b" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_5_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_b}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C.  Akses Pelatihan Berkualitas</td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_5_c}}" name="nilai_5_c" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_5_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_c}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">D. Akses Permodalan</td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_5_d}}" name="nilai_5_d" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_5_d" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_d}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">E. Pemanfaatan Teknologi Digital</td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_5_e}}" name="nilai_5_e" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_5_e" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_e}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">F. Mengelola Unit Usaha Wisata</td>
                                        <td class="text-center">1-10</td>
                                        <td><input disabled value="{{$data->nilai_5_f}}" name="nilai_5_f" type="number" class="form-control text-center" placeholder="1 - 10" ></td>
                                        <td><textarea disabled name="ket_5_f" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_f}}</textarea></td>
                                    </tr>
                                    <!-- SAMPAI SINI  -->
                                    <tr>
                                        <td></td>
                                        <td class="ps-5"></td>
                                        <td class="text-center">Total <br> Nilai</td>
                                        <td><input disabled value="{{$data->total_nilai}}" name="nilai_5_cc" type="number" class="form-control text-center" placeholder="0" ></td>
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
                        </fieldset>

                        {{-- ASET DAN PERMODALAN --}}
                        <fieldset id="aset-dan-permodalan" disabled style="display: none">
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
                                        <td class="bg-success text-white text-center">V</td>
                                        <td class="bg-success text-white">ASET DAN PERMODALAN (10%)</td>
                                        <td class="bg-success text-white text-center">100</td>
                                        <td class="bg-success text-white"></td>
                                        <td class="bg-success text-white"></td>
                                    </tr>
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>1. Buku Aset</th>
                                        <td class="text-center">20</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. Ada dan lengkap</td>
                                        <td class="text-center">10-20</td>
                                        <td><input disabled value="{{$data->nilai_1_a}}" name="nilai_1_a" type="number" class="form-control text-center" placeholder="10 - 20" ></td>
                                        <td><textarea disabled name="ket_1_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Ada dan belum lengkap</td>
                                        <td class="text-center">1-9</td>
                                        <td><input disabled value="{{$data->nilai_1_b}}" name="nilai_1_b" type="number" class="form-control text-center" placeholder="1 - 9" ></td>
                                        <td><textarea disabled name="ket_1_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_b}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C. Tidak ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_1_c}}" name="nilai_1_c" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_1_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_c}}</textarea></td>
                                    </tr>
                                    <!--DARI SINI -->
                                    <tr>
                                        <td></td>
                                        <th>2. Perkembangan Modal BUMDesa</th>
                                        <td class="text-center">80</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">A. s/d 50% dari total modal
                                        </td>
                                        <td class="text-center">20</td>
                                        <td><input disabled value="{{$data->nilai_2_a}}" name="nilai_2_a" type="number" class="form-control text-center" placeholder="20" ></td>
                                        <td><textarea disabled name="ket_2_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B.  51% s/d 100% dari total modal </td>
                                        <td class="text-center">40</td>
                                        <td><input disabled value="{{$data->nilai_2_b}}" name="nilai_2_b" type="number" class="form-control text-center" placeholder="40" ></td>
                                        <td><textarea disabled name="ket_2_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_b}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C.  101% s/d 150% dari total modal</td>
                                        <td class="text-center">60</td>
                                        <td><input disabled value="{{$data->nilai_2_c}}" name="nilai_2_c" type="number" class="form-control text-center" placeholder="60" ></td>
                                        <td><textarea disabled name="ket_2_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_c}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">D. 150% keatas dari total modal</td>
                                        <td class="text-center">80</td>
                                        <td><input disabled value="{{$data->nilai_2_d}}" name="nilai_2_d" type="number" class="form-control text-center" placeholder="80" ></td>
                                        <td><textarea disabled name="ket_2_d" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_d}}</textarea></td>
                                    </tr>
                                    <!-- SAMPAI SINI  -->
                                    <tr>
                                        <td></td>
                                        <td class="ps-5"></td>
                                        <td class="text-center">Total <br> Nilai</td>
                                        <td><input disabled value="{{$data->total_nilai}}" name="nilai_5_cc" type="number" class="form-control text-center" placeholder="0" ></td>
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
                        </fieldset>

                        {{-- ALKA --}}
                        <fieldset id="alka" disabled style="display: none">
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
                                        <td><input disabled value="{{$data->nilai_1_a}}" name="nilai_1_a" type="number" class="form-control text-center" placeholder="15 - 20" ></td>
                                        <td><textarea disabled name="ket_1_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Ada (Neraca, Laba Rugi, Perubahan Modal, Arus Kas)<br> melalui Musdes</td>
                                        <td class="text-center">10-14</td>
                                        <td><input disabled value="{{$data->nilai_1_b}}" name="nilai_1_b" type="number" class="form-control text-center" placeholder="10 - 14" ></td>
                                        <td><textarea disabled name="ket_1_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_b}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C. Ada, (Neraca, Laba Rugi) melalui Musdes</td>
                                        <td class="text-center">1-9</td>
                                        <td><input disabled value="{{$data->nilai_1_c}}" name="nilai_1_c" type="number" class="form-control text-center" placeholder="1 - 9" ></td>
                                        <td><textarea disabled name="ket_1_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_c}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">D. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_1_d}}" name="nilai_1_d" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_1_d" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_d}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_2_a}}" name="nilai_2_a" type="number" class="form-control text-center" placeholder="15 - 20" ></td>
                                        <td><textarea disabled name="ket_2_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Ada (Neraca, Laba Rugi, Perubahan Modal, Arus Kas)
                                        </td>
                                        <td class="text-center">10-14</td>
                                        <td><input disabled value="{{$data->nilai_2_b}}" name="nilai_2_b" type="number" class="form-control text-center" placeholder="10 - 14" ></td>
                                        <td><textarea disabled name="ket_2_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_b}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C. Ada, (Neraca, Laba Rugi)</td>
                                        <td class="text-center">1-9</td>
                                        <td><input disabled value="{{$data->nilai_2_c}}" name="nilai_2_c" type="number" class="form-control text-center" placeholder="1 - 9" ></td>
                                        <td><textarea disabled name="ket_2_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_c}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">D. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_2_d}}" name="nilai_2_d" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_2_d" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_d}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_3_a}}" name="nilai_3_a" type="number" class="form-control text-center" placeholder="10 - 20" ></td>
                                        <td><textarea disabled name="ket_3_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Ada tidak melalui Musdes</td>
                                        <td class="text-center">1-9</td>
                                        <td><input disabled value="{{$data->nilai_3_b}}" name="nilai_3_b" type="number" class="form-control text-center" placeholder="1 - 9" ></td>
                                        <td><textarea disabled name="ket_3_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_b}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_3_c}}" name="nilai_3_c" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_3_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_c}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_4_a}}" name="nilai_4_a" type="number" class="form-control text-center" placeholder="1 - 20" ></td>
                                        <td><textarea disabled name="ket_4_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_4_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Tidak Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_4_b}}" name="nilai_4_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_4_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_4_b}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_5_a}}" name="nilai_5_a" type="number" class="form-control text-center" placeholder="1 - 20" ></td>
                                        <td><textarea disabled name="ket_5_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_a}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. Ada</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_5_b}}" name="nilai_5_b" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_5_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_5_b}}</textarea></td>
                                    </tr>
                                    <!-- SAMPAI SINI  -->

                                    <tr>
                                        <td></td>
                                        <td class="ps-5"></td>
                                        <td class="text-center">Total <br> Nilai</td>
                                        <td><input disabled value="{{$data->total_nilai}}" name="nilai_5_cc" type="number" class="form-control text-center" placeholder="0" ></td>
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
                        </fieldset>

                        {{-- KEUNTUNGAN DAN MANFAAT --}}
                        <fieldset id="keuntungan-dan-manfaat" disabled style="display: none">
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
                                        <td><input disabled value="{{$data->nilai_1_a}}" name="nilai_1_a" type="number" class="form-control text-center" placeholder="10" ></td>
                                        <td><textarea disabled name="ket_1_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B. 50 juta s/d < 150 Juta</td>
                                        <td class="text-center">20</td>
                                        <td><input disabled value="{{$data->nilai_1_b}}" name="nilai_1_b" type="number" class="form-control text-center" placeholder="20" ></td>
                                        <td><textarea disabled name="ket_1_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_b}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C. 150 Juta s/d < 300 Juta</td>
                                        <td class="text-center">30</td>
                                        <td><input disabled value="{{$data->nilai_1_c}}" name="nilai_1_c" type="number" class="form-control text-center" placeholder="30" ></td>
                                        <td><textarea disabled name="ket_1_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_c}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">D. 300 Juta keatas</td>
                                        <td class="text-center">40</td>
                                        <td><input disabled value="{{$data->nilai_1_d}}" name="nilai_1_d" type="number" class="form-control text-center" placeholder="40" ></td>
                                        <td><textarea disabled name="ket_1_d" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_d}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">E. Nihil atau rugi</td>
                                        <td class="text-center">0</td>
                                        <td><input disabled value="{{$data->nilai_1_e}}" name="nilai_1_e" type="number" class="form-control text-center" placeholder="0" ></td>
                                        <td><textarea disabled name="ket_1_e" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_1_e}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_2_a}}" name="nilai_2_a" type="number" class="form-control text-center" placeholder="15" ></td>
                                        <td><textarea disabled name="ket_2_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B.  s.d 5 orang</td>
                                        <td class="text-center">20</td>
                                        <td><input disabled value="{{$data->nilai_2_b}}" name="nilai_2_b" type="number" class="form-control text-center" placeholder="20" ></td>
                                        <td><textarea disabled name="ket_2_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_b}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C.  s.d 10 orang</td>
                                        <td class="text-center">25</td>
                                        <td><input disabled value="{{$data->nilai_2_c}}" name="nilai_2_c" type="number" class="form-control text-center" placeholder="25" ></td>
                                        <td><textarea disabled name="ket_2_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_c}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">D. s.d 20 orang</td>
                                        <td class="text-center">30</td>
                                        <td><input disabled value="{{$data->nilai_2_d}}" name="nilai_2_d" type="number" class="form-control text-center" placeholder="30" ></td>
                                        <td><textarea disabled name="ket_2_d" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_2_d}}</textarea></td>
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
                                        <td><input disabled value="{{$data->nilai_3_a}}" name="nilai_3_a" type="number" class="form-control text-center" placeholder="15" ></td>
                                        <td><textarea disabled name="ket_3_a" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_a}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="ps-4">B.  s.d 50 orang</td>
                                        <td class="text-center">20</td>
                                        <td><input disabled value="{{$data->nilai_3_b}}" name="nilai_3_b" type="number" class="form-control text-center" placeholder="20" ></td>
                                        <td><textarea disabled name="ket_3_b" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_b}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">C.  s.d 100 orang</td>
                                        <td class="text-center">25</td>
                                        <td><input disabled value="{{$data->nilai_3_c}}" name="nilai_3_c" type="number" class="form-control text-center" placeholder="25" ></td>
                                        <td><textarea disabled name="ket_3_c" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_c}}</textarea></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td class="ps-4">D. lebih dari 100 orang</td>
                                        <td class="text-center">30</td>
                                        <td><input disabled value="{{$data->nilai_3_d}}" name="nilai_3_d" type="number" class="form-control text-center" placeholder="30" ></td>
                                        <td><textarea disabled name="ket_3_d" class="form-control" placeholder="Keterangan" style="height: 42px">{{$data->ket_3_d}}</textarea></td>
                                    </tr>
                                    <!-- SAMPAI SINI  -->
                                    <tr>
                                        <td></td>
                                        <td class="ps-5"></td>
                                        <td class="text-center">Total <br> Nilai</td>
                                        <td><input disabled value="{{$data->total_nilai}}" name="nilai_5_cc" type="number" class="form-control text-center" placeholder="0" ></td>
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
                        </fieldset>

                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input disabled value="{{$data->tim_1}}" name="tim_1" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 1</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input disabled value="{{$data->tim_2}}" name="tim_2" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 2</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input disabled value="{{$data->tim_3}}" name="tim_3" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 3</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input disabled value="{{$data->tim_4}}" name="tim_4" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 4</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input disabled value="{{$data->tim_5}}" name="tim_5" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 5</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input disabled value="{{$data->tim_6}}" name="tim_6" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 6</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input disabled value="{{$data->tim_7}}" name="tim_7" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                    <label for="floatingInput">Tim Pembina dan Evaluasi 7</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input disabled value="{{$data->created_at}}" name="tim_7" type="text" class="form-control" id="floatingInput" placeholder="name" >
                                    <label for="floatingInput">Tanggal Evaluasi</label>
                                </div>
                            </div>
                        </div>
                        <br>
                    </form>
                    <a href="{{ url()->previous() }}"><button class="btn btn-secondary btn-lg w-100">Kembali</button></a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                    let currentIndikator = "{{ $data->kategori }}"
                    console.log(currentIndikator);
                    if (currentIndikator === 'kelembagaan') {
                        $('#kelembagaan').show();
                        $('#manajemen').hide();
                        $('#usaha-dan-unit-usaha').hide();
                        $('#kerjasama-dan-inovasi').hide();
                        $('#aset-dan-permodalan').hide();
                        $('#alka').hide();
                        $('#keuntungan-dan-manfaat').hide();

                        $('#kelembagaan').prop('disabled', false);
                        $('#manajemen').prop('disabled', true);
                        $('#usaha-dan-unit-usaha').prop('disabled', true);
                        $('#kerjasama-dan-inovasi').prop('disabled', true);
                        $('#aset-dan-permodalan').prop('disabled', true);
                        $('#alka').prop('disabled', true);
                        $('#keuntungan-dan-manfaat').prop('disabled', true);

                    } else if (currentIndikator == 'manajemen') {
                        $('#kelembagaan').hide();
                        $('#manajemen').show();
                        $('#usaha-dan-unit-usaha').hide();
                        $('#kerjasama-dan-inovasi').hide();
                        $('#aset-dan-permodalan').hide();
                        $('#alka').hide();
                        $('#keuntungan-dan-manfaat').hide();

                        $('#kelembagaan').prop('disabled', true);
                        $('#manajemen').prop('disabled', false);
                        $('#usaha-dan-unit-usaha').prop('disabled', true);
                        $('#kerjasama-dan-inovasi').prop('disabled', true);
                        $('#aset-dan-permodalan').prop('disabled', true);
                        $('#alka').prop('disabled', true);
                        $('#keuntungan-dan-manfaat').prop('disabled', true);

                    } else if (currentIndikator === 'usaha dan unit usaha') {
                        $('#kelembagaan').hide();
                        $('#manajemen').hide();
                        $('#usaha-dan-unit-usaha').show();
                        $('#kerjasama-dan-inovasi').hide();
                        $('#aset-dan-permodalan').hide();
                        $('#alka').hide();
                        $('#keuntungan-dan-manfaat').hide();

                        $('#kelembagaan').prop('disabled', true);
                        $('#manajemen').prop('disabled', true);
                        $('#usaha-dan-unit-usaha').prop('disabled', false);
                        $('#kerjasama-dan-inovasi').prop('disabled', true);
                        $('#aset-dan-permodalan').prop('disabled', true);
                        $('#alka').prop('disabled', true);
                        $('#keuntungan-dan-manfaat').prop('disabled', true);

                    } else if (currentIndikator === 'kerjasama dan inovasi') {
                        $('#kelembagaan').hide();
                        $('#manajemen').hide();
                        $('#usaha-dan-unit-usaha').hide();
                        $('#kerjasama-dan-inovasi').show();
                        $('#aset-dan-permodalan').hide();
                        $('#alka').hide();
                        $('#keuntungan-dan-manfaat').hide();

                        $('#kelembagaan').prop('disabled', true);
                        $('#manajemen').prop('disabled', true);
                        $('#usaha-dan-unit-usaha').prop('disabled', true);
                        $('#kerjasama-dan-inovasi').prop('disabled', false);
                        $('#aset-dan-permodalan').prop('disabled', true);
                        $('#alka').prop('disabled', true);
                        $('#keuntungan-dan-manfaat').prop('disabled', true);

                    } else if (currentIndikator === 'aset dan permodalan') {
                        $('#kelembagaan').hide();
                        $('#manajemen').hide();
                        $('#usaha-dan-unit-usaha').hide();
                        $('#kerjasama-dan-inovasi').hide();
                        $('#aset-dan-permodalan').show();
                        $('#alka').hide();
                        $('#keuntungan-dan-manfaat').hide();

                        $('#kelembagaan').prop('disabled', true);
                        $('#manajemen').prop('disabled', true);
                        $('#usaha-dan-unit-usaha').prop('disabled', true);
                        $('#kerjasama-dan-inovasi').prop('disabled', true);
                        $('#aset-dan-permodalan').prop('disabled', false);
                        $('#alka').prop('disabled', true);
                        $('#keuntungan-dan-manfaat').prop('disabled', true);

                    } else if (currentIndikator === 'adminstrasi laporan keuangan dan akuntabilitas') {
                        $('#kelembagaan').hide();
                        $('#manajemen').hide();
                        $('#usaha-dan-unit-usaha').hide();
                        $('#kerjasama-dan-inovasi').hide();
                        $('#aset-dan-permodalan').hide();
                        $('#alka').show();
                        $('#keuntungan-dan-manfaat').hide();

                        $('#kelembagaan').prop('disabled', true);
                        $('#manajemen').prop('disabled', true);
                        $('#usaha-dan-unit-usaha').prop('disabled', true);
                        $('#kerjasama-dan-inovasi').prop('disabled', true);
                        $('#aset-dan-permodalan').prop('disabled', true);
                        $('#alka').prop('disabled', false);
                        $('#keuntungan-dan-manfaat').prop('disabled', true);

                    } else if (currentIndikator === 'keuntungan dan manfaat') {
                        $('#kelembagaan').hide();
                        $('#manajemen').hide();
                        $('#usaha-dan-unit-usaha').hide();
                        $('#kerjasama-dan-inovasi').hide();
                        $('#aset-dan-permodalan').hide();
                        $('#alka').hide();
                        $('#keuntungan-dan-manfaat').show();

                        $('#kelembagaan').prop('disabled', true);
                        $('#manajemen').prop('disabled', true);
                        $('#usaha-dan-unit-usaha').prop('disabled', true);
                        $('#kerjasama-dan-inovasi').prop('disabled', true);
                        $('#aset-dan-permodalan').prop('disabled', true);
                        $('#alka').prop('disabled', true);
                        $('#keuntungan-dan-manfaat').prop('disabled', false);
                    }
            });


        </script>
    </x-slot:topmenu>
</x-app>

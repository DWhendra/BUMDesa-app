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
                                    <h6 class="mb-0">Tambah Data Badan Usaha Milik Desa</h6>
                                    <a class="btn-sm ms-auto" href="{{ route('bumdesa.index') }}"><button
                                            class="btn btn-primary btn-sm ms-auto">Kembali</button></a>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('bumdesa.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="row g-3">
                                    <input hidden name="id_user" type="text"
                                        value="{{ Str::upper(auth()->user()->id) }}">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('nama_bumdes') }}" name="nama_bumdes" type="text"
                                                class="form-control" id="floatingInput" placeholder="nama" required
                                                max="{{ date('Y') }}">
                                            <label for="floatingInput">Nama BUM Desa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="jenis_unit" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                        style="height: 100px" required>{{ old('jenis_unit') }}</textarea>
                                    <label for="floatingTextarea2">Jenis Unit Usaha BUM Desa</label>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('tahun_berdiri') }}" name="tahun_berdiri"
                                                type="number" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">Tahun Berdirinya BUM Desa</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('tahun_laporan') }}" name="tahun_laporan"
                                                type="number" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">Tahun Laporan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <div class="form-floating">
                                                <select class="form-select input" name="id_kecamatan" id="kecamatan"
                                                    aria-label="Floating label select example" required>
                                                    <option>Pilih Kecamatan</option>
                                                    @foreach ($kecamatan as $data)
                                                        <option value="<?php echo $data->id; ?>"><?php echo $data['nama_kecamatan']; ?></option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingSelect">Kecamatan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <div class="form-floating">
                                                <select class="form-select input" name="id_desa" id="desa"
                                                    aria-label="Floating label select example" required>
                                                </select>
                                                <!-- <input name="nama_desa" type="text" class="form-control" id="floatingInput" placeholder="nama"> -->
                                                <label for="floatingInput">Desa</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="row g-3">
                                            <div class="form-floating mb-3">
                                                <input value="{{ old('alamat_kantor') }}" name="alamat_kantor"
                                                    type="text" class="form-control" id="floatingInput"
                                                    placeholder="nama" required>
                                                <label for="floatingInput">Alamat Kantor BUM Desa</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('unit_usaha') }}" name="unit_usaha" type="text"
                                                class="form-control" id="floatingInput" placeholder="nama" required>
                                            <label for="floatingInput">Unit Usaha Utama BUM Desa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('npwp') }}" name="npwp" type="text"
                                                class="form-control" id="floatingInput" placeholder="nama" required>
                                            <label for="floatingInput">NOMOR POKOK WAJIB PAJAK (NPWP)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('perdes') }}" name="perdes" type="text"
                                                class="form-control" id="floatingInput" placeholder="nama" required>
                                            <label for="floatingInput">NOMOR SK PENDIRIAN BUM Desa (PERDES)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('no_legalitas') }}" name="no_legalitas"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">NOMOR LEGALITAS BADAN HUKUM BUM Desa</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('nohp_direktur') }}" name="nohp_direktur"
                                                type="number" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">Nomor Handphone Direktur</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-2">
                                            <input value="{{ old('email_bumdes') }}" name="email_bumdes"
                                                type="email" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">EMAIL BUM Desa</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('email_direktur') }}" name="email_direktur"
                                                type="email" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">EMAIL DIREKTUR BUM Desa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('tenaga_kerja') }}" name="tenaga_kerja"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">Tenaga Kerja</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('pengurus_bumdes') }}" name="pengurus_bumdes"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">SK Perbekel Tentang Pengangkatan Pengurus BUM
                                                Desa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('produk_unggulan') }}" name="produk_unggulan"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">Produk Unggulan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('penyertaan_modal') }}" name="penyertaan_modal"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">Penyertaan Modal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('laporan_keuangan') }}" name="laporan_keuangan"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">Laporan Keuangan Dalam 2 Tahun Terakhir</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('keuntungan_bersih') }}" name="keuntungan_bersih"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">Keuntungan Bersih</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('pad') }}" name="pad" type="text"
                                                class="form-control" id="floatingInput" placeholder="nama" required>
                                            <label for="floatingInput">Penyisihan Terhadap Pendapatan Asli Desa
                                                (PAD)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('program_inovasi') }}" name="program_inovasi"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">Program Inovasi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('kerja_sama') }}" name="kerja_sama" type="text"
                                                class="form-control" id="floatingInput" placeholder="nama" required>
                                            <label for="floatingInput">Kerja Sama</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('lampiran_pedoman') }}" name="lampiran_pedoman"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">LAMPIRAN PEDOMAN/SOP BUM Desa dan Unit
                                                Usaha</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select value="{{ old('status_kepemilikan') }}" class="form-select input"
                                                name="status_kepemilikan" id=""
                                                aria-label="Floating label select example">
                                                <option value="0">Pilih Kepemilikan Kantor BUM Desa</option>
                                                <option value="MILIK BUM DESA">MILIK BUM DESA</option>
                                                <option value="MILIK DESA">MILIK DESA</option>
                                                <option value="SEWA">SEWA</option>
                                                <option value="MENUMPANG">MENUMPANG</option>
                                            </select>
                                            <!-- <input name="pedoman" type="text" class="form-control" id="floatingInput" placeholder="nama"> -->
                                            <label for="floatingInput">Status Kepemilikan Kantor BUM Desa</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select value="{{ old('pedoman') }}" class="form-select input"
                                                name="pedoman" id=""
                                                aria-label="Floating label select example">
                                                <option value="0">Pilih PEDOMAN/SOP BUM Desa dan Unit Usaha
                                                </option>
                                                <option value="ADA">ADA</option>
                                                <option value="TIDAK ADA">TIDAK ADA</option>
                                            </select>
                                            <!-- <input name="pedoman" type="text" class="form-control" id="floatingInput" placeholder="nama"> -->
                                            <label for="floatingInput">PEDOMAN/SOP BUM Desa dan Unit Usaha</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select value="{{ old('bentuk_usaha') }}" class="form-select input"
                                                name="bentuk_usaha" id=""
                                                aria-label="Floating label select example">
                                                <option value="0">Pilih Bentuk Unit Usaha</option>
                                                <option value="Perseroan Terbatas (PT)">Perseroan Terbatas (PT)
                                                </option>
                                                <option value="TIDAK ADA">TIDAK ADA</option>
                                            </select>
                                            <!-- <input name="bentuk_usaha" type="text" class="form-control" id="floatingInput" placeholder="nama"> -->
                                            <label for="floatingInput">Bentuk Unit Usaha</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select value="{{ old('penggunaan_aplikasi') }}"
                                                class="form-select input" name="penggunaan_aplikasi" id=""
                                                aria-label="Floating label select example">
                                                <option value="0">Pilih Sistem Penggunaan Aplikasi</option>
                                                <option value="ADA">ADA</option>
                                                <option value="TIDAK ADA">TIDAK ADA</option>
                                            </select>
                                            <!-- <input name="penggunaan_aplikasi" type="text" class="form-control" id="floatingInput" placeholder="nama"> -->
                                            <label for="floatingInput">Sistem Penggunaan Aplikasi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('lampiran_lpj') }}" name="lampiran_lpj"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">Lampiran LPJ 1 Tahun Terakhir</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('program_kerja') }}" name="program_kerja"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="nama" required>
                                            <label for="floatingInput">Program Kerja BUM Desa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('saran') }}" name="saran" type="text"
                                                class="form-control" id="floatingInput" placeholder="nama" required>
                                            <label for="floatingInput">USUL/SARAN Perencanaan Kedepan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-control">
                                            <label for="floatingInput">Upload Dokumen Laporan</label>
                                            <input name="bukti_laporan" type="file" class="form-control"
                                                id="floatingInput" placeholder="name@example.com" required>
                                        </div>
                                    </div>
                                </div>
                                <br><button type="submit" class="btn btn-success btn-lg w-100"
                                    type="submit">SIMPAN</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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

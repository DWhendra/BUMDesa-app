<x-app>
    <x-slot:sidebar>
        <x-sidebar></x-sidebar>

    </x-slot:sidebar>
    <x-slot:topmenu>
        <x-topmenu></x-topmenu>

        <div id="layoutSidenav_content">
            <main>
                <?php //dd($bumdes);
                ?>
                <div class="container-fluid px-4">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit Data BUM Desa</p>
                                <a class="btn-sm ms-auto" href="{{ route('bumdesa.index') }}"><button
                                        class="btn btn-primary btn-sm ms-auto">Kembali</button></a>
                            </div>
                        </div>
                        @foreach ($bumdesa as $bumdes)
                            <form action="{{ route('bumdesa.update', $bumdes->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-9">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->nama_bumdes }}" name="nama_bumdes"
                                                    type="text" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Nama BUM Desa</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->tahun_berdiri }}" name="tahun_berdiri"
                                                    type="number" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Tahun Berdirinya BUM Desa</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea value="" name="jenis_unit" class="form-control" placeholder="Leave a comment here"
                                            id="floatingTextarea2" style="height: 100px">{{ $bumdes->jenis_unit }}</textarea>
                                        <label for="floatingTextarea2">Jenis Unit Usaha BUM Desa</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input value="{{ $bumdes->unit_usaha }}" name="unit_usaha" type="text"
                                            class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Unit Usaha Utama BUM Desa</label>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <div class="form-floating">
                                                    <div class="form-floating">
                                                        <select class="form-select input" name="id_kecamatan"
                                                            id="kecamatan" aria-label="Floating label select example">
                                                            <option>Pilih Kecamatan</option>
                                                            @foreach ($kecamatan as $data)
                                                                <option <?php if ($bumdes->id_kecamatan == $data->id) {
                                                                    echo 'selected';
                                                                } ?> value="<?php echo $data->id; ?>">
                                                                    <?php echo $data['nama_kecamatan']; ?></option>
                                                            @endforeach
                                                        </select>
                                                        <label for="floatingSelect">Kecamatan</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <div class="form-floating">
                                                    <div class="form-floating">
                                                        <select class="form-select input" name="id_desa" id="desa"
                                                            aria-label="Floating label select example">
                                                            <option>Pilih Kecamatan</option>
                                                            @foreach ($desa as $data)
                                                                <option <?php if ($bumdes->id_desa == $data->id) {
                                                                    echo 'selected';
                                                                } ?> value="<?php echo $data->id; ?>">
                                                                    <?php echo $data['nama_desa']; ?></option>
                                                            @endforeach
                                                        </select>
                                                        <label for="floatingInput">Desa</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="form-floating mb-3">
                                            <input value="{{ $bumdes->alamat_kantor }}" name="alamat_kantor"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">Alamat Kantor BUM Desa</label>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->npwp }}" name="npwp" type="text"
                                                    class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">NOMOR POKOK WAJIB PAJAK (NPWP)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->perdes }}" name="perdes" type="text"
                                                    class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">NOMOR SK PENDIRIAN BUM Desa (PERDES)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->no_legalitas }}" name="no_legalitas"
                                                    type="text" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">NOMOR LEGALITAS BADAN HUKUM BUM Desa</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-5">
                                            <div class="form-floating mb-2">
                                                <input value="{{ $bumdes->email_bumdes }}" name="email_bumdes"
                                                    type="text" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">EMAIL BUM Desa</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->email_direktur }}" name="email_direktur"
                                                    type="text" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">EMAIL DIREKTUR BUM Desa</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->nohp_direktur }}" name="nohp_direktur"
                                                    type="number" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Nomor Handphone Direktur</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->tenaga_kerja }}" name="tenaga_kerja"
                                                    type="text" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Tenaga Kerja</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->pengurus_bumdes }}" name="pengurus_bumdes"
                                                    type="text" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">SK Perbekel Tentang Pengangkatan Pengurus
                                                    BUM Desa</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->produk_unggulan }}" name="produk_unggulan"
                                                    type="text" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Produk Unggulan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input value="{{ $bumdes->penyertaan_modal }}" name="penyertaan_modal"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">Penyertaan Modal</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input value="{{ $bumdes->laporan_keuangan }}" name="laporan_keuangan"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">Laporan Keuangan Dalam 2 Tahun Terakhir</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input value="{{ $bumdes->keuntungan_bersih }}" name="keuntungan_bersih"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">Keuntungan Bersih</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input value="{{ $bumdes->pad }}" name="pad" type="text"
                                                class="form-control" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">Penyisihan Terhadap Pendapatan Asli Desa
                                                (PAD)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input value="{{ $bumdes->program_inovasi }}" name="program_inovasi"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">Program Inovasi</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input value="{{ $bumdes->kerja_sama }}" name="kerja_sama"
                                                type="text" class="form-control" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">Kerja Sama</label>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->status_kepemilikan }}"
                                                    name="status_kepemilikan" type="text" class="form-control"
                                                    id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Status Kepemilikan Kantor BUM Desa</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3">
                                                <select class="form-select input" name="pedoman" id=""
                                                    aria-label="Floating label select example">
                                                    <option @if ($bumdes->pedoman == '0') selected @endif
                                                        value="0">Pilih PEDOMAN/SOP BUM Desa dan Unit Usaha
                                                    </option>
                                                    <option @if ($bumdes->pedoman == 'ADA') selected @endif
                                                        value="ADA">ADA</option>
                                                    <option @if ($bumdes->pedoman == 'TIDAK ADA') selected @endif
                                                        value="TIDAK ADA">TIDAK ADA</option>
                                                </select>
                                                <label for="floatingInput">PEDOMAN/SOP BUM Desa dan Unit Usaha</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->lampiran_pedoman }}"
                                                    name="lampiran_pedoman" type="text" class="form-control"
                                                    id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">LAMPIRAN PEDOMAN/SOP BUM Desa dan Unit
                                                    Usaha</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <select class="form-select input" name="bentuk_usaha" id=""
                                                    aria-label="Floating label select example">
                                                    <option @if ($bumdes->bentuk_usaha == '0') selected @endif
                                                        value="0">Pilih Bentuk Unit Usaha</option>
                                                    <option @if ($bumdes->bentuk_usaha == 'Perseroan Terbatas (PT)') selected @endif
                                                        value="Perseroan Terbatas (PT)">Perseroan Terbatas (PT)
                                                    </option>
                                                    <option @if ($bumdes->bentuk_usaha == 'TIDAK ADA') selected @endif
                                                        value="TIDAK ADA">TIDAK ADA</option>
                                                </select>
                                                <label for="floatingInput">Bentuk Unit Usaha</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <select class="form-select input" name="penggunaan_aplikasi"
                                                    id="" aria-label="Floating label select example">
                                                    <option @if ($bumdes->penggunaan_aplikasi == '0') selected @endif
                                                        value="0">Pilih Sistem Penggunaan Aplikasi</option>
                                                    <option @if ($bumdes->penggunaan_aplikasi == 'ADA') selected @endif
                                                        value="ADA">ADA</option>
                                                    <option @if ($bumdes->penggunaan_aplikasi == 'TIDAK ADA') selected @endif
                                                        value="TIDAK ADA">TIDAK ADA</option>
                                                </select>
                                                <label for="floatingInput">Sistem Penggunaan Aplikasi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input value="{{ $bumdes->saran }}" name="saran" type="text"
                                                class="form-control" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">USUL/SARAN Perencanaan Kedepan</label>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->lampiran_lpj }}" name="lampiran_lpj"
                                                    type="text" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Lampiran LPJ 1 Tahun Terakhir</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->program_kerja }}" name="program_kerja"
                                                    type="text" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Program Kerja BUM Desa</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3">
                                                <input value="{{ $bumdes->tahun_laporan }}" name="tahun_laporan"
                                                    type="number" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Tahun Laporan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex gap-3">
                                            <p>File Sebelumnya</p>
                                            <a href="{{ asset('fileup/' . $bumdes->bukti_laporan) }}" target="_blank"
                                                rel="noopener noreferrer">Lihat Dokumen</a>
                                        </div>
                                        <div class="form-control">
                                            <label for="floatingInput">Upload Dokumen Laporan</label>
                                            <input name="bukti_laporan" type="file" class="form-control"
                                                placeholder="Upload Bukti Laporan">
                                        </div>
                                    </div>

                                    <button onclick="return confirm ('Apakah Anda Ingin Mengedit Data Tersebut?')"
                                        value="update" type="submit"
                                        class="btn btn-success btn-lg w-100">SIMPAN</button>
                                </div>
                            </form>
                        @endforeach
                    </div>

                </div>
            </main>

        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#desa').append('<option value="">Pilih Kecamatan Terlebih Dahulu</option>');
                $('#kecamatan').on('change', function() {
                    var id = $(this).val();
                    console.log(id);
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

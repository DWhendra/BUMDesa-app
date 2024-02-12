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
                    <a class="btn btn-primary mb-4" href="{{ route('bumdesa.index')}}" role="button">Back</a>
                    <div class="card mb-4">

                    <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Detail Data BUM Desa</p>
                                <a class="btn-sm ms-auto" href="{{ route('bumdesa.index')}}"><button class="btn btn-primary btn-sm ms-auto">Kembali</button></a>
                            </div>
                        </div>

                        @foreach ($bumdesa as $bumdes)
                        <form action="" method="post">

                            <div class="card-body">

                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->nama_bumdes}}" name="nama_bumdes" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Nama BUM Desa</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->tahun_berdiri}}" name="tahun_berdiri" type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Tahun Berdirinya BUM Desa</label>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea disabled value="" name="jenis_unit" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{$bumdes->jenis_unit}}</textarea>
                                    <label for="floatingTextarea2">Jenis Unit Usaha BUM Desa</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input disabled value="{{$bumdes->unit_usaha}}" name="unit_usaha" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Unit Usaha Utama BUM Desa</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <div class="form-floating">
                                                <input disabled value="{{$bumdes->nama_kecamatan}}" name="nama_kecamatan" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingSelect">Kecamatan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <div class="form-floating">
                                                <input disabled value="{{$bumdes->nama_desa}}" name="nama_desa" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Desa</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->alamat_kantor}}" name="alamat_kantor" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Alamat Kantor BUM Desa</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->npwp}}" name="npwp" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">NOMOR POKOK WAJIB PAJAK (NPWP)</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->perdes}}" name="perdes" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">NOMOR SK PENDIRIAN BUM Desa (PERDES)</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->no_legalitas}}" name="no_legalitas" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">NOMOR LEGALITAS BADAN HUKUM BUM Desa</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-2">
                                        <input disabled value="{{$bumdes->email_bumdes}}" name="email_bumdes" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">EMAIL BUM Desa</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->email_direktur}}" name="email_direktur" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">EMAIL DIREKTUR BUM Desa</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->nohp_direktur}}" name="nohp_direktur" type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Nomor Handphone Direktur</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->tenaga_kerja}}" name="tenaga_kerja" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Tenaga Kerja</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->pengurus_bumdes}}" name="pengurus_bumdes" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">SK Perbekel Tentang Pengangkatan Pengurus BUM Desa</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->produk_unggulan}}" name="produk_unggulan" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Produk Unggulan</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->penyertaan_modal}}" name="penyertaan_modal" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Penyertaan Modal</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->laporan_keuangan}}" name="laporan_keuangan" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Laporan Keuangan Dalam 2 Tahun Terakhir</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->keuntungan_bersih}}" name="keuntungan_bersih" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Keuntungan Bersih</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->pad}}" name="pad" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Penyisihan Terhadap Pendapatan Asli Desa (PAD)</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->program_inovasi}}" name="program_inovasi" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Program Inovasi</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->kerja_sama}}" name="kerja_sama" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Kerja Sama</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->status_kepemilikan}}" name="status_kepemilikan" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Status Kepemilikan Kantor BUM Desa</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->pedoman}}" name="pedoman" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">PEDOMAN/SOP BUM Desa dan Unit Usaha</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->lampiran_pedoman}}" name="lampiran_pedoman" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">LAMPIRAN PEDOMAN/SOP BUM Desa dan Unit Usaha</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->bentuk_usaha}}" name="bentuk_usaha" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Bentuk Unit Usaha</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->penggunaan_aplikasi}}" name="penggunaan_aplikasi" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Sistem Penggunaan Aplikasi</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->saran}}" name="saran" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">USUL/SARAN Perencanaan Kedepan</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->lampiran_lpj}}" name="lampiran_lpj" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Lampiran LPJ 1 Tahun Terakhir</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->program_kerja}}" name="program_kerja" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Program Kerja BUM Desa</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input disabled value="{{$bumdes->tahun_laporan}}" name="tahun_laporan" type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Tahun Laporan</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex gap-3">
                                        <label for="floatingInput">Dokumen Laporan</label>
                                        <a href="{{asset('fileup/'. $bumdes->bukti_laporan)}}" target="_blank" rel="noopener noreferrer">Lihat Dokumen</a>
                                    </div>
                                </div><br>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input disabled value="{{$bumdes->created_at}}" name="tenaga_kerja" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Tanggal Dibuat</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input disabled value="{{$bumdes->updated_at}}" name="pengurus_bumdes" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Tanggal Edit</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                        @endforeach
                    </div>

                </div>
            </main>

        </div>

    </x-slot:topmenu>
</x-app>
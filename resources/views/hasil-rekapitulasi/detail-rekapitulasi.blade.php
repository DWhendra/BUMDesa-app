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
                        <form  method="post">
                            @csrf
                            @method('POST')

                            <br>
                        <table class="table table-bordered" style="border: 1px solid black; border-collapse: collapse">
                            <thead>
                                <tr style="border-bottom: 1px solid black">
                                    <th style="border-bottom: 1px solid black" class="text-center" scope="col"><b>NO</b></th>
                                    <th style="border-bottom: 1px solid black" class="text-center" scope="col"><b>ASPEK PENILAIAN</b></th>
                                    <th style="border-bottom: 1px solid black" class="text-center" scope="col"><b>TOTAL NILAI</b></th>
                                    <th style="border-bottom: 1px solid black" class="text-center" scope="col"><b>PERSENTASE</b></th>
                                    <th style="border-bottom: 1px solid black" class="text-center" scope="col"><b>TOTAL PERSENTASE</b></th>
                                    <th style="border-bottom: 1px solid black" class="text-center" scope="col"><b>AKSI</b></th>
                                </tr>
                            </thead>
                            <tbody>

                                <!--DARI SINI -->
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="">KELEMBAGAAN</td>
                                    <td class="text-center">{{ $kelembagaan->total_nilai }}</td>
                                    <td class="text-center">10%</td>
                                    <td class="text-center">{{ $kelembagaan->nilai_persentase }}</td>
                                    <td class="text-center"><a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('kelembagaan.detail', ['id_bumdesa' => $bumdesa->id, 'tahun' => $tahun]) }}"><i class="fas fa-clipboard-list me-2"></i>Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="">MANAJEMEN</td>
                                    <td class="text-center">{{ $manajemen->total_nilai }}</td>
                                    <td class="text-center">10%</td>
                                    <td class="text-center">{{ $manajemen->nilai_persentase }}</td>
                                    <td class="text-center"><a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('manajemen.detail', ['id_bumdesa' => $bumdesa->id, 'tahun' => $tahun]) }}"><i class="fas fa-clipboard-list me-2"></i>Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="">USAHA DANUNIT USAHA</td>
                                    <td class="text-center">{{ $usahaDanUnitUsaha->total_nilai }}</td>
                                    <td class="text-center">15%</td>
                                    <td class="text-center">{{ $usahaDanUnitUsaha->nilai_persentase }}</td>
                                    <td class="text-center"><a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('usaha-dan-unit-usaha.detail', ['id_bumdesa' => $bumdesa->id, 'tahun' => $tahun]) }}"><i class="fas fa-clipboard-list me-2"></i>Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="">KERJASAMA DAN INOVASI</td>
                                    <td class="text-center">{{ $kerjasamaDanInovasi->total_nilai }}</td>
                                    <td class="text-center">25%</td>
                                    <td class="text-center">{{ $kerjasamaDanInovasi->nilai_persentase }}</td>
                                    <td class="text-center"><a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('kerjasama-dan-inovasi.detail', ['id_bumdesa' => $bumdesa->id, 'tahun' => $tahun]) }}"><i class="fas fa-clipboard-list me-2"></i>Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="">ASET DAN PERMODALAN</td>
                                    <td class="text-center">{{ $asetDanPermodalan->total_nilai }}</td>
                                    <td class="text-center">10%</td>
                                    <td class="text-center">{{ $asetDanPermodalan->nilai_persentase }}</td>
                                    <td class="text-center"><a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('aset-dan-permodalan.detail', ['id_bumdesa' => $bumdesa->id, 'tahun' => $tahun]) }}"><i class="fas fa-clipboard-list me-2"></i>Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td class="">ADMINISTRASI, LAPORAN KEUANGAN DAN AKUNTABILITAS</td>
                                    <td class="text-center">{{ $alka->total_nilai }}</td>
                                    <td class="text-center">10%</td>
                                    <td class="text-center">{{ $alka->nilai_persentase }}</td>
                                    <td class="text-center"><a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('alka.detail', ['id_bumdesa' => $bumdesa->id, 'tahun' => $tahun]) }}"><i class="fas fa-clipboard-list me-2"></i>Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td class="">KEUNTUNGAN DAN MANFAAT</td>
                                    <td class="text-center">{{ $keuntunganDanManfaat->total_nilai }}</td>
                                    <td class="text-center">20%</td>
                                    <td class="text-center">{{ $keuntunganDanManfaat->nilai_persentase }}</td>
                                    <td class="text-center"><a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{ route('keuntungan-dan-manfaat.detail', ['id_bumdesa' => $bumdesa->id, 'tahun' => $tahun]) }}"><i class="fas fa-clipboard-list me-2"></i>Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-center"><b>TOTAL</b></td>
                                    <td class="text-center"><b>{{ $total }}</b></td>
                                    <td class="text-center"><b>100</b></td>
                                    <td class="text-center"><b>{{ $total_nilai }}</b></td>
                                </tr>
                                <!-- SAMPAI SINI  -->

                            </tbody>
                        </table>

                    </form>
                    <form action="{{ route('rekapitulasi.updateHasil', $bumdesa->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input hidden  type="text" name="total_nilai" value="{{$total_nilai}}" id="">
                        <button type="submit" class="btn btn-success btn-lg w-100">Disetujui</button>
                    </form>
                    <a href="{{ route('rekapitulasi.tampilan', ['tahun' => $tahun])}}"><button class="btn btn-secondary btn-lg w-100">Kembali</button></a>
                    </div>
                </div>
            </div>
        </div>
            @include('sweetalert::alert')
    </x-slot:topmenu>
</x-app>

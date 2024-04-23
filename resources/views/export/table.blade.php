<table id="datatablesSimple" class="display compact" style="width:100%">
    <thead>
        <tr>
            <th>ID BUM Desa</th>
            <th>Username</th>
            <th>NAMA BUM Desa</th>
            <th>TAHUN BERDIRINYA BUM Desa</th>
            <th>JENIS UNIT USAHA BUM Desa</th>
            <th>UNIT USAHA UTAMA</th>
            <th>NAMA KECAMATAN</th>
            <th>NAMA DESA</th>
            <th>Alamat Kantor BUM Desa</th>
            <th>NOMOR POKOK WAJIB PAJAK (NPWP)</th>
            <th>NOMOR SK PENDIRIAN BUM Desa (PERDES)</th>
            <th>NOMOR LEGALITAS BADAN HUKUM BUM Desa</th>
            <th>EMAIL BUM Desa</th>
            <th>EMAIL DIREKTUR BUM Desa</th>
            <th>Nomor Handphone Direktur</th>
            <th>Tenaga Kerja</th>
            <th>SK Perbekel Tentang Pengangkatan Pengurus BUM Desa</th>
            <th>Produk Unggulan</th>
            <th>Penyertaan Modal</th>
            <th>Laporan Keuangan Dalam 2 Tahun Terakhir</th>
            <th>Keuntungan Bersih</th>
            <th>Penyisihan Terhadap Pendapatan Asli Desa (PAD)</th>
            <th>Program Inovasi</th>
            <th>Kerja Sama</th>
            <th>Status Kepemilikan Kantor BUM Desa</th>
            <th>PEDOMAN/SOP BUM Desa dan Unit Usaha</th>
            <th>LAMPIRAN PEDOMAN/SOP BUM Desa dan Unit Usaha</th>
            <th>Bentuk Unit Usaha</th>
            <th>Sistem Penggunaan Aplikasi</th>
            <th>USUL/SARAN Perencanaan Kedepan</th>
            <th>Lampiran LPJ 1 Tahun Terakhir</th>
            <th>Program Kerja BUM Desa</th>
            <th>Tahun Laporan</th>
            @auth

            @else
            @endauth
        </tr>
    </thead>


    <tbody>
        @foreach ($bumdes as $data)
        <tr>
            <th scope="row">{{ $data->id }}</th>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->nama_bumdes }}</td>
            <td>{{ $data->tahun_berdiri }}</td>
            <td>{{ $data->jenis_unit }}</td>
            <td>{{ $data->unit_usaha }}</td>
            <td>{{ $data->nama_kecamatan }}</td>
            <td>{{ $data->nama_desa }}</td>
            <td>{{ $data->alamat_kantor }}</td>
            <td>{{ $data->npwp }}</td>
            <td>{{ $data->perdes }}</td>
            <td>{{ $data->no_legalitas }}</td>
            <td>{{ $data->email_bumdes }}</td>
            <td>{{ $data->email_direktur }}</td>
            <td>{{ $data->nohp_direktur }}</td>
            <td>{{ $data->tenaga_kerja }}</td>
            <td>{{ $data->pengurus_bumdes }}</td>
            <td>{{ $data->produk_unggulan }}</td>
            <td>{{ $data->penyertaan_modal }}</td>
            <td>{{ $data->laporan_keuangan }}</td>
            <td>{{ $data->keuntungan_bersih }}</td>
            <td>{{ $data->pad }}</td>
            <td>{{ $data->program_inovasi }}</td>
            <td>{{ $data->kerja_sama }}</td>
            <td>{{ $data->status_kepemilikan }}</td>
            <td>{{ $data->pedoman }}</td>
            <td>{{ $data->lampiran_pedoman }}</td>
            <td>{{ $data->bentuk_usaha }}</td>
            <td>{{ $data->penggunaan_aplikasi }}</td>
            <td>{{ $data->saran }}</td>
            <td>{{ $data->lampiran_lpj }}</td>
            <td>{{ $data->program_kerja }}</td>
            <td>{{ $data->tahun_laporan }}</td>
            @auth



            @else
            @endauth
        </tr>

        @endforeach
    </tbody>
</table>

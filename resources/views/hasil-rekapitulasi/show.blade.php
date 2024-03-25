<x-app>
    <x-slot:sidebar>
        <x-sidebar></x-sidebar>

    </x-slot:sidebar>
    <x-slot:topmenu>
        <x-topmenu></x-topmenu>

        <div class="container-fluid py-4">
            <div class="row">
                @foreach ($bumdesa as $bumdesa)
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">

                                <h4>DATA REKAPITULASI </h4><h6> Tahun {{ $tahun }}</h6> <h5>Badan Usaha Milik Desa
                                    <b>{{ $bumdesa->nama_bumdes }}</b> </h5>
                                <a
                                    href="{{ route('rekapitulasi.detailRekapitulasi', ['id_bumdesa' => $bumdesa->id, 'tahun' => $tahun]) }}"><button
                                        class="btn btn-lg btn-success btn-md float-end" type="button">Detail Rekapitulasi</button></a>

                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <a href="{{ route('rekapitulasi.index') }}"><button class="btn btn-secondary btn-lg w-100">Kembali</button></a>
            </div>
        </div>
            @include('sweetalert::alert')

    </x-slot:topmenu>
</x-app>

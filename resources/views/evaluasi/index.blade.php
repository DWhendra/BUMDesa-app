<x-app>
    <x-slot:sidebar>
        <x-sidebar></x-sidebar>

    </x-slot:sidebar>
    <x-slot:topmenu>
        <x-topmenu></x-topmenu>

        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">INDIKATOR PEMBINAAN DAN PEMBERDAYAAN SERTA EVALUASI BADAN USAHA MILIK DESA
                                KABUPATEN BADUNG (DATA) </h6>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-bars text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Data Aspek</h6>
                                            <h6 class="mb-1 text-dark text-sm">Kelembagaan</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('kelembagaan.index') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-bars text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Data Aspek</h6>
                                            <h6 class="mb-1 text-dark text-sm">Manajemen</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('manajemen.index') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-sliders text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Data Aspek</h6>
                                            <h6 class="mb-1 text-dark text-sm">Usaha Dan Unit Usaha</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('usaha-dan-unit-usaha.index') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-sliders text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Data Aspek</h6>
                                            <h6 class="mb-1 text-dark text-sm">Kerjasama Dan Inovasi</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('kerjasama-dan-inovasi.index') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-sliders text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Data Aspek</h6>
                                            <h6 class="mb-1 text-dark text-sm">Aset Dan Permodalan</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('aset-dan-permodalan.index') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-sliders text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Data Aspek</h6>
                                            <h6 class="mb-1 text-dark text-sm">Adminstrasi, Laporan <br> Keuangan dan
                                                <br>
                                                Akuntabilitas</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('alka.index') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-sliders text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Data Aspek</h6>
                                            <h6 class="mb-1 text-dark text-sm">Keuntungan Dan Manfaat</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('keuntungan-dan-manfaat.index') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">INDIKATOR PEMBINAAN DAN PEMBERDAYAAN SERTA EVALUASI BADAN USAHA MILIK
                                DESA
                                KABUPATEN BADUNG (PENILAIAN) </h6>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-bars text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Aspek Penilaian</h6>
                                            <h6 class="mb-1 text-dark text-sm">Kelembagaan</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('kelembagaan.create') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-bars text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Aspek Penilaian</h6>
                                            <h6 class="mb-1 text-dark text-sm">Manajemen</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('manajemen.create') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-sliders text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Aspek Penilaian</h6>
                                            <h6 class="mb-1 text-dark text-sm">Usaha Dan Unit Usaha</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('usaha-dan-unit-usaha.create') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-sliders text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Aspek Penilaian</h6>
                                            <h6 class="mb-1 text-dark text-sm">kerjasama Dan Inovasi</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('kerjasama-dan-inovasi.create') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-sliders text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Aspek Penilaian</h6>
                                            <h6 class="mb-1 text-dark text-sm">Aset Dan Permodalan</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('aset-dan-permodalan.create') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-sliders text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Aspek Penilaian</h6>
                                            <h6 class="mb-1 text-dark text-sm">Adminstrasi, Laporan <br> Keuangan dan
                                                <br>
                                                Akuntabilitas</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('alka.create') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                            <i class="fa fa-sliders text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Aspek Penilaian</h6>
                                            <h6 class="mb-1 text-dark text-sm">Keuntungan Dan Manfaat</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('keuntungan-dan-manfaat.create') }}"><button
                                                class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                                    class="ni ni-bold-right" aria-hidden="true"></i></button></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        @php
            //{{ $users->links() }}
        @endphp
        </div>
        </div>

        @include('sweetalert::alert')

    </x-slot:topmenu>
</x-app>

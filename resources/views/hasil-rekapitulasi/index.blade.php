<x-app>
    <x-slot:sidebar>
        <x-sidebar></x-sidebar>

    </x-slot:sidebar>
    <x-slot:topmenu>
        @canany(['admin', 'pegawai','desa'])
            <x-topmenu></x-topmenu>

            <div class="container-fluid py-0">
                @canany(['admin', 'pegawai'])
                <div class="row mt-4">
                  <div class="col-lg-4 mb-lg-0 mb-4">
                    <div class="card ">
                      <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                          <h6 class="mb-2">Masukkan Tahun Rekapitulasi</h6>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center ">
                          <tbody>
                            <form action="{{ route('rekapitulasi.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="card-header pb-0 p-3">
                                <div class="form-floating mb-3">
                                    <input name="tahun" type="number" class="form-control" id="floatingInput"
                                        placeholder="nama" required>
                                    <label for="floatingInput">Tahun</label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg w-100" type="submit">SIMPAN</button>
                            </div>
                            </form>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  @endcanany
                  <div class="col-lg-8">
                    <div class="card">
                      <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Tahun Rekapitulasi</h6>
                      </div>
                      <div class="card-body p-3">
                        <div class="card-header pb-0 p-3">
                            <div class="form-floating mb-3">
                                <ul class="list-group">
                                    @foreach ($tahun as $data)
                                        <li class="d-flex justify-content-between list-group-item list-group-item-info">
                                            <h4>{{ Str::Upper($data->tahun) }}</h4>
                                            <div class="d-flex gap-2">
                                                @canany(['admin', 'pegawai'])
                                                <form action="{{ route('rekapitulasi.destroy', $data->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button onclick="return confirm ('Apakah Anda Ingin Menghapus Tahun Tersebut?')" class="btn btn-link text-danger btn-md text-gradient px-3 mb-0" type="submit" value="Delete"><i class="far fa-trash-alt me-2"></i></button>
                                                </form>
                                                @endcanany
                                                <form action="{{ route('hasil-evaluasi.store', ['tahun'=>$data->tahun], ['id_bumdes'=>$data->id]) }}" method="post">
                                                    @method('post')
                                                    @csrf
                                                </form>
                                                <a class=" float-end" href="{{ route('rekapitulasi.tampilan', ['tahun'=>$data->tahun]) }}">
                                                <button class="btn btn-success btn-md m-0" type="button">Lihat Rekapitulasi</button></a>
                                                @canany(['admin', 'pegawai'])
                                                <a class=" float-end" href="{{ route('rekapitulasi.ekspor', ['tahun'=>$data->tahun]) }}" target="_blank">
                                                <button class="btn btn-secondary btn-md m-0" type="button"><i class="fa fa-print me-3 "></i>Cetak</button></a>
                                                @endcanany
                                            </div>
                                        </li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            @include('sweetalert::alert')
        @endcanany
    </x-slot:topmenu>
</x-app>

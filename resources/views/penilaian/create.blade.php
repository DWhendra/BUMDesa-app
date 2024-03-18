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

                            <div class="d-flex align-items-center">
                                <h6 class="mb-0">Form Penilaian qi</h6>
                                <a class="btn-sm ms-auto" href="{{ route('evaluasi.index') }}"><button
                                        class="btn btn-primary btn-sm ms-auto">Kembali</button></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Aspek Penliaian</th>
                                    <th scope="col">Skor</th>
                                    <th scope="col">Hasil</th>
                                    <th scope="col">Keterangan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                 
                                </tbody>
                              </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                    target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#subkategori_aspek').append('<option value="">Pilih Kategori Aspek Terlebih Dahulu</option>');
                $('#kategori_aspek').on('change', function() {
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
                                    $('#subkategori_aspek').empty();
                                    $('#subkategori_aspek').append(
                                        '<option value="">Pilih SubKategori Aspek</option>');
                                    $.each(data, function(key, subkategori_aspek) {
                                        $('#subkategori_aspek').append(
                                            '<option value="' + subkategori_aspek.id +
                                            '">' +
                                            subkategori_aspek.nama + '</option>'
                                        );
                                    });
                                } else {
                                    $('#subkategori_aspek').empty();
                                }
                            }
                        });
                    } else {
                        $('#subkategori_aspek').empty();
                    }
                });

                $('#subkategori_aspek').append('<option value="">Pilih Kategori Aspek Terlebih Dahulu</option>');
                $('#kategori_aspek').on('change', function() {
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
                                    $('#subkategori_aspek').empty();
                                    $('#subkategori_aspek').append(
                                        '<option value="">Pilih SubKategori Aspek</option>');
                                    $.each(data, function(key, subkategori_aspek) {
                                        $('#subkategori_aspek').append(
                                            '<option value="' + subkategori_aspek.id +
                                            '">' +
                                            subkategori_aspek.nama + '</option>'
                                        );
                                    });
                                } else {
                                    $('#subkategori_aspek').empty();
                                }
                            }
                        });
                    } else {
                        $('#subkategori_aspek').empty();
                    }
                });
            });
        </script>
        @include('sweetalert::alert')
    </x-slot:topmenu>
</x-app>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('./assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('./assets/img/logodpmd.png')}}">
  <title>
    BUM Desa
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('./assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('./assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('./assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('./assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
</head>
@php
        $counter = 1;
        @endphp
<body class="">
    <div class="card-title">
        <h6 class="mb-0 p-4 text-center">PEMERINGKATAN HASIL PEMBINAAN DAN PEMBERDAYAAN
            BADAN USAHA MILIK DESA DAN LEMBAGA KERJA SAMA ANTAR DESA <br> KABUPATEN BADUNG
            TAHUN 2023</h6>
    </div>
    <main class="main-content  mt-0">

        <div class="container-fluid py-4">

            <div class="row">
                @foreach ($bumdesa as $bumdesa)
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <h4 class="text-center">{{ $counter }}</h4>
                                @php
                                    $counter++;
                                @endphp
                                <h4 class="text-center">DATA REKAPITULASI </h4><h5 class="text-center">Badan Usaha Milik Desa
                                    <b>{{ $bumdesa->nama_bumdes }}</b> </h5><h6 class="text-center"> Tahun {{ $tahun }}</h6>
                                    <h6 class="text-center">Total Penilaian {{$bumdesa->total_nilai}}</h6><br>
                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
            @include('sweetalert::alert')
    </main>
</body>
</html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<script type="text/javascript">

    $(document).ready(function () {
        window.print();
    });

</script>

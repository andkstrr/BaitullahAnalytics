@extends('layouts.navbar')

@section('content')
    <div class="background-section">
        <div class="container-fluid">
            <div class="row">

                {{-- LEFT COLUMN --}}
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card p-4 rounded-4 shadow-lg">
                        <div class="card-content">
                            {{ $totalVisitorChart->container() }}
                        </div>
                    </div>
                </div>

               {{-- RIGHT COLUMN --}}
               <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-3"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
                        <div class="card p-4 rounded-4 shadow-lg">
                            <p class="fw-semibold text-muted">Terdaftar</p>
                            <h2 class="fw-normal text-black">1320</h2>
                            {{-- PLUS --}}
                            <small class="text-muted"><span class="text-success">3.75% </span>(7 Hari)</small>
                            {{-- MINUS --}}
                            {{-- <small class="text-muted"><span class="text-danger">-3.75% </span>(7 Hari)</small> --}}
                        </div>
                    </div>
                    <div class="col-md-6 mb-3"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
                        <div class="card p-4 rounded-4 shadow-lg">
                            <p class="fw-semibold text-muted">Tidak Terdaftar</p>
                            <h2 class="fw-normal text-black">325</h2>
                            <small class="text-muted"><span class="text-danger">21.30% </span>Pengunjung</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
                        <div class="card p-4 rounded-4 shadow-lg">
                            <p class="fw-semibold text-muted">Sedang Aktif</p>
                            <h2 class="fw-normal text-black">14</h2>
                            <small><a href="{{ route('analytics.pengunjung_aktif') }}" class="text-muted">Lihat di sini</a></small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
                        <div class="card p-4 rounded-4 shadow-lg">
                            <p class="fw-semibold text-muted">Sumber Trafik</p>
                            <h2 class="fw-normal text-black">4</h2>
                            <small><a href="{{ route('analytics.trafik') }}" class="text-muted">Lihat di sini</a></small>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ $totalVisitorChart->cdn() }}"></script>

    {{ $totalVisitorChart->script() }}
@endsection

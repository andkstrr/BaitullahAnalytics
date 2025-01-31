@extends('layouts.navbar')

@section('content')
    <div class="background-section">
        <div class="container-fluid">
            <div class="row">

                {{-- LEFT COLUMN --}}
                <div class="col-md-9 mb-5" data-aos="fade-up" data-aos-duration="1700">
                    <div class="card p-4 rounded-4 shadow-lg">
                        <div class="card-content">
                            {{-- CHART LINE PERBANDINGAN KUNJUNGAN --}}
                            <div class="card-title p-2">
                                <h4 class="fw-semibold fs-4 text-black">Perbandingan Kunjungan</h4>
                            </div>
                            {{ $visitCompare->container() }}
                        </div>
                    </div>
                </div>

                {{-- RIGHT COLUMN --}}
                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1700" data-aos-delay="250">
                    <div class="card p-4 mb-5 rounded-4 shadow-lg">
                        <div class="card-content">
                            {{ $trafficChart->container() }}
                        </div>
                    </div>

                    <div class="card p-4 mb-5 rounded-4 shadow-lg" data-aos="fade-up" data-aos-duration="1700" data-aos-delay="450">
                        <div class="card-content">
                            <p class="fw-semibold text-muted">Total Pengunjung</p>
                            <h2 class="fw-normal text-black">1526</h2>
                        </div>
                    </div>

                    <div class="card p-4 mb-5 rounded-4 shadow-lg" data-aos="fade-up" data-aos-duration="1700" data-aos-delay="650">
                        <div class="card-content">
                            <p class="fw-semibold text-muted">Pengunjung Hari Ini</p>
                            <h2 class="fw-normal text-black">14</h2>
                        </div>
                    </div>

                    <div class="card p-4 mb-5 rounded-4 shadow-lg" data-aos="fade-up" data-aos-duration="1700" data-aos-delay="850">
                        <div class="card-content">
                            <p class="fw-semibold text-muted">Pengunjung Mendaftar</p>
                            <h2 class="fw-normal text-black">8</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ $visitCompare->cdn() }}"></script>
    <script src="{{ $trafficChart->cdn() }}"></script>

    {{ $visitCompare->script() }}
    {{ $trafficChart->script() }}
@endsection

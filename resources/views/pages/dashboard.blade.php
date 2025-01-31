@extends('layouts.navbar')

@section('content')
    <div class="background-section">
        <div class="container-fluid">
            <div class="row mb-5">
                {{-- NAVIGASI & INFORMASI --}}
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card pt-7 mb-5 rounded-4 shadow-lg" style="background-color: #3C7447; opacity: 70%;">
                        <div class="card-body">
                            <div class="card-content text-white mt-10">
                                <img src="{{ asset('assets/images/icon/Users Group White.png') }}" alt="Users Icon">
                                <h3 class="card-text fw-semibold fs-2 mb-0">1526</h3>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title mb-0 fs-6 fw-normal">Pengunjung</h5>
                                    <a href="{{ route('analytics.pengunjung') }}">
                                        <i class="fa-solid fa-up-right-from-square" style="color: #d9d9d9"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                    <div class="card pt-7 mb-5 rounded-4 shadow-lg" style="background-color: #205529; opacity: 80%;">
                        <div class="card-body">
                            <div class="card-content text-white mt-10">
                                <img src="{{ asset('assets/images/icon/Users Group White.png') }}" alt="Users Icon">
                                <h3 class="card-text fw-semibold fs-2 mb-0">14</h3>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title mb-0 fs-6 fw-normal">Pengunjung Aktif</h5>
                                    <a href="{{ route('analytics.pengunjung_aktif') }}">
                                        <i class="fa-solid fa-up-right-from-square" style="color: #d9d9d9"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
                    <div class="card pt-7 mb-5 rounded-4 shadow-lg" style="background-color: #123419; opacity: 90%;">
                        <div class="card-body">
                            <div class="card-content text-white mt-10">
                                <img src="{{ asset('assets/images/icon/Users Group White.png') }}" alt="Users Icon">
                                <h3 class="card-text fw-semibold fs-2 mb-0">4</h3>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title mb-0 fs-6 fw-normal">Sumber Lalu Lintas</h5>
                                    <a href="{{ route('analytics.trafik')}}">
                                        <i class="fa-solid fa-up-right-from-square" style="color: #d9d9d9"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- WAKTU & DURASI KUNJUNGAN --}}
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
                    <div class="card mb-5 rounded-4 shadow-lg">
                        <div class="card-header text-black">
                            <h5 class="fw-semibold fs-5">Waktu Kunjungan</h5>
                            <hr class="my-4">
                            <div class="card-body">
                                {{-- CHART BAR WAKTU KUNJUNGAN --}}
                                {{ $visitTimeChart->container() }}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- KATEGORI PAKET --}}
                <div class="col-md-6"  data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700">
                    <div class="card mb-5 rounded-4 shadow-lg">
                        <div class="card-header text-black">
                            <h5 class="fw-semibold fs-5">Kategori Paket</h5>
                            <hr class="my-4">
                        </div>
                        <div class="card-body">
                            {{-- CHART PIE KATEGORI PAKET --}}
                            {{ $categoryChart->container() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ $categoryChart->cdn() }}"></script>
    <script src="{{ $visitTimeChart->cdn() }}"></script>

    {{ $categoryChart->script() }}
    {{ $visitTimeChart->script() }}
@endsection

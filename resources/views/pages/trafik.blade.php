@extends('layouts.breadcrumb')

@section('content')
    <div class="background-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1700">
                    <div class="card shadow-lg p-4 rounded-4">
                          {{-- GAUGE CHART --}}
                          <div id="" class="d-flex justify-content-center position-relative">
                          </div>
                          <div class="card-title position-absolute bottom-0 left-0 p-4">
                            <h4 class="fw-semibold fs-3 text-black">Performa Website</h4>
                            <p class="fw-normal fs-6 text-muted">Kecepatan loading halaman dalam persentase</p>
                          </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1700" data-aos-delay="300">
                            <div class="card p-4 mb-3 shadow-lg" style="border-top-left-radius: 18px">
                                <div class="card-content">
                                    <p class="text-muted fw-semibold fs-sm">Avg Time (m)</p>
                                    <div class="d-flex align-items-end gap-1">
                                        <h6 class="fw-normal fs-3 mb-0">23</h6>
                                        {{-- PLUS --}}
                                        <small class="fs-xs mb-1 text-success">(7.82%)</small>
                                        {{-- MINUS --}}
                                        {{-- <small class="fs-xs mb-1 text-danger">(-7.82%)</small> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="card p-4 mb-3 shadow-lg">
                                <div class="card-content">
                                    <p class="text-muted fw-semibold fs-sm">Bounce Rate (%)</p>
                                    <div class="d-flex align-items-end gap-1">
                                        <h6 class="fw-normal fs-3 mb-0">34.2</h6>
                                        {{-- PLUS --}}
                                        <small class="fs-xs mb-1 text-success">(3.54%)</small>
                                        {{-- MINUS --}}
                                        {{-- <small class="fs-xs mb-1 text-danger">(-7.82%)</small> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="card p-4 mb-3 shadow-lg">
                                <div class="card-content">
                                    <p class="text-muted fw-semibold fs-sm">Sering Dikunjungi</p>
                                    <div class="d-flex align-items-end gap-1">
                                        <h6 class="fw-normal fs-5 mb-0">/umroh-plus</h6>
                                        <small class="fs-xs text-success">(378K)</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1700" data-aos-delay="500">
                            <div class="card p-4 mb-3 shadow-lg">
                                <p class="text-muted fw-semibold fs-sm">Jumlah Kunjungan Halaman</p>
                                <h6 class="fw-normal fs-3 mb-0">721K</h6>
                            </div>

                            <div class="card p-4 mb-3 shadow-lg">
                                <p class="text-muted fw-semibold fs-sm">Pengguna Sedang Aktif</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="fw-normal fs-3 mb-0">14</h6>
                                    <a href="{{ route('analytics.pengunjung.aktif' )}}">
                                        <i class="fa-solid fa-up-right-from-square text-muted"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="card p-4 mb-3 shadow-lg">
                                <p class="text-muted fw-semibold fs-sm">Sumber Trafik Terbanyak</p>
                                <h6 class="fw-normal fs-5 mb-0">Direct</h6>
                            </div>
                        </div>

                        <div class="col-12" data-aos="fade-up" data-aos-duration="1700" data-aos-delay="700">
                            <div class="card p-4 shadow-lg">
                                <div class="card-content">
                                    {{-- CHART DEVICE --}}
                                    <div class="device-count">
                                        <p class="progress-title">Mobile</p>
                                        <div class="progress mb-3" style="height: 20px;">
                                            <div class="progress-bar bg-success" role="progressbar"
                                             style="width: 90%;" aria-valuenow="90" aria-valuemin="0">843</div>
                                        </div>

                                        <p class="progress-title">Tablet</p>
                                        <div class="progress mb-3" style="height: 20px;">
                                            <div class="progress-bar bg-success" role="progressbar"
                                             style="width: 50%;" aria-valuenow="90" aria-valuemin="0">523</div>
                                        </div>

                                        <p class="progress-title">Dekstop</p>
                                        <div class="progress mb-3" style="height: 20px">
                                            <div class="progress-bar bg-success" role="progressbar"
                                             style="width: 30%;" aria-valuenow="" aria-valuemin="0">283</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

    <script nonce="undefined" src="https://cdn.zingchart.com/zingchart.min.js"></script>

@endsection

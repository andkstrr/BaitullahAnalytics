@extends('layouts.navbar')

@section('content')
    <div class="background-section">
        <div class="container-fluid">
            <div class="row">
                {{-- DEVICE & PENGUNJUNG AKTIF --}}
                <div class="col-md-6">
                    <div class="card mb-5 rounded-4 shadow-lg">
                        <div class="card-header text-black py-5">
                            <h5 class="fw-semibold fs-5">Device</h5>
                            <hr class="my-3">
                        </div>
                        <div class="card-body"></div>
                    </div>

                    <div class="card mb-5 rounded-4 shadow-lg">
                        <div class="card-body">
                            <div class="card-content text-black p-3 mt-10">
                                <img src="{{ asset('assets/images/icon/Users Group Black.png') }}" alt="Users Icon">
                                <h3 class="card-text fw-semibold fs-2">14</h3>
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title mb-0 fs-6 fw-normal">Pengunjung Sedang Aktif</h5>
                                    <a href="{{ route('analytics.total_pengunjung_aktif') }}">
                                        <i class="fa-solid fa-up-right-from-square" style="color: black"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- TOTAL PENGUNJUNG --}}
                <div class="col-md-6">
                    <div class="card mb-5 rounded-4 shadow-lg">
                        <div class="d-flex justify-content-between text-black p-5">
                            <h5 class="fw-semibold fs-5">Total Pengunjung</h5>
                            <div class="dropdown dropdown-hover">
                                <a class="btn btn-default dropdown-toggle" href="#" role="button">
                                  Bulan Ini
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a class="dropdown-item" href="#">Bulan Kemarin</a></li>
                                  <li><a class="dropdown-item" href="#">3 Bulan Terakhir</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- TABLE HISTORY AKTIVITAS --}}
        <div class="container-fluid bg-white p-5 shadow-lg rounded-4">
            <div class="table-header d-flex justify-content-between mb-8">
                <h3 class="fw-semibold text-black">Aktivitas Terakhir</h3>
                <div class="d-flex gap-3">
                    <div class="dropdown dropdown-hover">
                        {{-- EXPORT BUTTON --}}
                        <a class="btn btn-success dropdown-toggle" href="#" role="button">
                          Export (.xslx)
                        </a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a class="dropdown-item" href="#">Seluruh Data</a></li>
                          <li>
                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exportByDate">
                                Berdasarkan Tanggal
                            </button>
                          </li>
                        </ul>
                    </div>
                    {{-- SEARCH PENGUNJUNG BUTTON --}}
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#searchUser">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </div>
            </div>

            {{-- TABLE HISTORY KUNJUNGAN --}}
            <div class="table-responsive">
                <table class="table table-hover table-borderless">
                    <thead>
                        <tr>
                            <th>Nama Pengguna</th>
                            <th>Tanggal</th>
                            <th>Jumlah Kunjungan</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach (range(1, 3) as $item)
                            <tr>
                                <td>
                                    <a href="#" class="text-black">Andika Satrio</a>
                                </td>
                                <td>21 Januari 2025</td>
                                <td>20</td>
                                <td>
                                    <div class="dropdown dropdown-hover">
                                        <a class="btn btn-default dropdown-toggle" href="#" role="button">
                                          Profile
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                          <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showProfile">
                                                    Andika Satrio
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- MODAL EXPORT EXCEL BY DATE --}}
    <div class="modal fade" tabindex="-1" id="exportByDate" aria-labelledby="exportByDateLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exportByDateLabel">Pilih Tanggal</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="date" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success">Export</button>
            </div>
          </div>
        </div>
    </div>

    {{-- MODAL SEARCH USER --}}
    <div class="modal fade" tabindex="-1" id="searchUser" aria-labelledby="searchUserLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" placeholder="Cari Nama Pengunjung">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success">Cari</button>
            </div>
          </div>
        </div>
    </div>

    {{-- MODAL DETAIL PROFILE PENGUNJUNG --}}
    <div class="modal fade" tabindex="-1" id="showProfile" aria-labelledby="showProfileLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title fs-3 mb-4" id="showProfileLabel">Detail User</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-content">
                    <div class="header-content d-flex align-items-center gap-5 mb-3">
                        <i class="fa-solid fa-search"></i><h5 class="fw-semibold fs-5 mb-0"> Penelusuran</h5>
                    </div>
                    <p class="fs-6 mb-0">Menelusuri https.baitullah.co.id/umroh-plus/</p>
                    <hr class="mb-6">
                    <div class="main-content">
                        <h5 class="fw-semibold fs-5 mb-4">Detail</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-solid fa-user"></i>
                                <span>Andika Satrio</span>
                            </li>
                            <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-regular fa-calendar"></i>
                                <span>21 Januari 2025, 15.57 WIB</span>
                            </li>
                            <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                                <span>Samsung A04S</span>
                            </li>
                            <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-solid fa-globe"></i>
                                <span>IP Address : 12309526</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection

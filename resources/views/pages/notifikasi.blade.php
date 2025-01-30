@extends('layouts.navbar')

@section('content')
    <div class="background-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-5 rounded-4 shadow-lg">
                        <div class="card-header text-black p-5 px-7 text-start">
                            <h5 class="fw-semibold fs-4">Notifikasi</h5>
                        </div>
                        <div class="card-body px-16 text-black">
                            <table class="table table-hover align-middle">
                                <tbody>
                                    @foreach (range(1, 3) as $item)
                                    {{-- TABLE ROW PENGGUNA BARU --}}
                                    <tr>
                                        <div class="table-responsive">
                                            <td>
                                                <div class="d-flex justify-content-between table-hover " data-bs-toggle="modal" data-bs-target="#showDetailUser">
                                                    <div class="table-content">
                                                        <div class="d-flex gap-8">
                                                            <span class="avatar"><i class="fa-solid fa-user"></i></span>
                                                            <div class="mb-0">
                                                                <a href="#" class="btn btn-success mb-2 p-1 fs-xs rounded-3">PENGGUNA BARU</a>
                                                                <h4 class="title-notification fw-semibold fs-6 mb-0">Andika Satrio Nurcahyo, baru saja bergabung dengan baitullah.co.id</h4>
                                                                <p class="content-notification text-muted fs-xs">Lihat profil <a href="#" class="text-muted">Andika Satrio</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-time">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <i class="fa-regular fa-clock fa-xs"></i>
                                                            <span class="text-muted fs-xs">21 Jan 2025, 15.57 WIB</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </div>
                                    </tr>
                                    
                                    {{-- TABLE ROW PEMBELIAN --}}
                                    <tr>
                                        <div class="table-responsive">
                                            <td>
                                                <div class="d-flex justify-content-between table-hover " data-bs-toggle="modal" data-bs-target="#showDetailPurchase">
                                                    <div class="table-content">
                                                        <div class="d-flex gap-8">
                                                            <span class="avatar"><i class="fa-solid fa-user"></i></span>
                                                            <div class="mb-0">
                                                                <a href="#" class="btn btn-warning mb-2 p-1 fs-xs rounded-3">PEMBELIAN</a>
                                                                <h4 class="title-notification fw-semibold fs-6 mb-0">Andika Satrio Nurcahyo, baru saja membeli Paket Umroh Ramadhan</h4>
                                                                <p class="content-notification text-muted fs-xs">Lihat detail <a href="#" class="text-muted">Pembelian</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-time">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <i class="fa-regular fa-clock fa-xs"></i>
                                                            <span class="text-muted fs-xs">21 Jan 2025, 15.57 WIB</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </div>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL NOTIFIKASI PENGGUNA BARU --}}
    <div class="modal fade" tabindex="-1" id="showDetailUser" aria-labelledby="showDetailUserLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header text-black">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="modal-content">
                    <div class="header-content d-flex align-items-center gap-5 mb-3">
                        <i class="fa-solid fa-user fa-xl"></i><h5 class="fw-semibold fs-5 mb-0"> Andika Satrio</h5>
                    </div>
                    <p class="text-tertiary fs-6 mb-7">andikasatrionurcahyo@gmail.com</p>
                </div>
            </div>
          </div>
        </div>
    </div>

    {{-- MODAL DETAIL NOTIFIKASI PEMBELIAN --}}
    <div class="modal fade" tabindex="-1" id="showDetailPurchase" aria-labelledby="showDetailPurchaseLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header text-black">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="modal-content">
                    <div class="header-content d-flex align-items-center gap-5 mb-3">
                        <i class="fa-solid fa-user fa-xl"></i><h5 class="fw-semibold fs-5 mb-0"> Andika Satrio</h5>
                    </div>
                    <p class="text-tertiary fs-6 mb-0">andikasatrionurcahyo@gmail.com</p>
                    <hr class="mb-6">
                    <div class="main-content mb-5">
                        <h5 class="fw-semibold fs-5 mb-4">Detail</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>Paket Umroh Ramadhan</span>
                            </li>
                            <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-solid fa-calendar"></i>
                                <span>28 Februari - 30 Maret 2025</span>
                            </li>
                            <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-solid fa-plane"></i>
                                <span>Saudi Airlines</span>
                            </li>
                            <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-solid fa-hotel"></i>
                                <span>Makkah Towers</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection

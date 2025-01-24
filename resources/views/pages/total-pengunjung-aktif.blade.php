@extends('layout.navbar')

@section('content')
    <div class="background-section">
        <div class="container-fluid">
            <div class="row">
                {{-- PENGUNJUNG AKTIF --}}
                <div class="col-md-6">
                    <div class="card mb-5 rounded-4 shadow-lg">
                        <div class="card-header text-black">
                            <h5 class="fw-semibold fs-3 pt-3">Pengguna Aktif</h5>
                        </div>
                        <div class="table-responsive px-5">
                            <table class="table table-hover table-borderless">
                              <thead>
                                <tr>
                                  <th>Nama Pengguna</th>
                                  <th>Link URL</th>
                                </tr>
                              </thead>
                              <tbody class="table-group-divider">
                                @foreach (range(1, 3) as $item)
                                <tr>
                                  <td>
                                    <button type="button" class="btn text-decoration-underline text-black fw-regular" data-bs-toggle="modal" data-bs-target="#showProfile">
                                        Andika Satrio
                                    </button>
                                  </td>
                                  <td class="text-decoration-underline">https.baitullah.co.id/umroh-plus/</td>
                                </tr>
                                @endforeach

                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- HALAMAN URL YANG SEDANG DIKUNJUNGI  --}}
                <div class="col-md-6">
                    <div class="card mb-5 pb-20 rounded-4 shadow-lg">
                        <div class="card-header text-black">
                            <h5 class="fw-semibold fs-5 pt-2">Halaman URL</h5>
                            <hr class="my-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL PENGUNJUNG --}}
    <div class="modal fade" tabindex="-1" id="showProfile" aria-labelledby="showProfileLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header text-black">
              <h5 class="modal-title fs-3 mb-4" id="showProfileLabel">Detail User</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-black">
                <div class="modal-content">
                    <div class="header-content d-flex align-items-center gap-5 mb-3">
                        <i class="fa-solid fa-search"></i><h5 class="fw-semibold fs-5 mb-0"> Penelusuran</h5>
                    </div>
                    <p class="fs-6 mb-0">Menelusuri https.baitullah.co.id/umroh-plus/</p>
                    <hr class="mb-6">
                    <div class="main-content mb-5">
                        <h5 class="fw-semibold fs-5 mb-4">Detail</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-solid fa-user"></i>
                                <span>Andika Satrio</span>
                            </li>
                            <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-regular fa-envelope"></i>
                                <span>andikasatrionurcahyo@gmail.com</span>
                            </li>
                            <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-regular fa-calendar"></i>
                                <span>21 Januari 2025, 15.57 WIB</span>
                            </li>
                            {{-- DEVICE DESKTOP --}}
                            {{-- <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-solid fa-laptop"></i>
                                <span>ASUS TUF Gaming F15</span>
                            </li> --}}
                            {{-- DEVICE TABLET --}}
                            {{-- <li class="d-flex align-items-center mb-3 gap-5">
                                <i class="fa-solid fa-tablet-screen-button"></i>
                                <span>Advan Tablet Series</span>
                            </li> --}}
                            {{-- DEVICE MOBILE --}}
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

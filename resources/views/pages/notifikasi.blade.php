@extends('layouts.navbar')

@section('content')
    <div class="background-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-5 rounded-4 shadow-lg">
                        <div class="card-header text-black p-5 text-center">
                            <h5 class="fw-semibold fs-4">Notifikasi</h5>
                        </div>
                        <div class="card-body px-16">
                            <table class="table table-hover align-middle">
                                <tbody>
                                    @foreach (range(1, 2) as $item)
                                    <tr data-bs-toggle="modal" data-bs-target="#showDetailNotification">
                                        <td class="fw-semibold">Andika Satrio</td>
                                        <td class="text-muted text-center"><b>Andika, </b>Telah melakukan pembelian Paket Umroh Ramadhan</td>
                                        <td class="text-muted">21 Jan</td>
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

    {{-- MODAL DETAIL NOTIFIKASI --}}
    <div class="modal fade" tabindex="-1" id="showDetailNotification" aria-labelledby="showDetailNotificationLabel" aria-hidden="true">
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

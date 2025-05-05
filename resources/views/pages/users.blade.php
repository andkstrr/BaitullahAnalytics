@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Users Monitoring')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('pict', 'logo_baitullah.png')
@section('app-name', 'baitullah.co.id')

@section('content')
    {{-- SECTION 1 --}}
    <h6 class="section-title fw-semisemibold text-black fs-5">Overview</h6>
    <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <x-monitoring-card icon="fa-user" title="Total Visitors" href="" icon="fa-up-right-from-square" value="376K" content="" percentage="12%" />
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <x-monitoring-card icon="fa-user" title="Visitors is Active" href="" icon="fa-up-right-from-square" value="149" content="User" percentage="12%" />
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <x-monitoring-card icon="fa-user" title="Visit Time (m)" href="" icon="fa-up-right-from-square" value="13" content="Minute" percentage="12%" />
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <x-monitoring-card icon="fa-user" title="Duration of Visit (m)" href="" icon="fa-up-right-from-square" value="10" content="minute" percentage="12%" />
        </div>
    </div><hr class="my-2">

    {{-- SECTION 2 --}}
    <div class="row mt-7 mb-9">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 mb-4">
            <div class="card rounded-3 shadow">
                <div class="card-title px-5 pt-4">
                    <div class="d-flex justify-content-between align-items center">
                        <div><p class="fw-semibold text-gray fs-5 mb-0">Activities</p></div>
                        <div class="d-flex align-items-center gap-3">
                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked />
                                <label class="label" for="flexRadioDefault1">Daily</label>
                            </div>
                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                                <label class="label" for="flexRadioDefault2">Monthly</label>
                            </div>
                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />
                                <label class="label" for="flexRadioDefault3">Yearly</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-content p-6 mb-5">
                    <x-line-chart />
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4 mb-4">
            <div class="card rounded-3 shadow">
                <x-pie-chart title="Browser Usage" />
            </div>
        </div>
    </div>

    {{-- <div class="row mt-4">
        <div class="col-12">
            <div class="card p-3">
                <div class="table-responsive">
                    <table class="table table-striped table-border">
                      <thead>
                        <tr class="fw-bold fs-6">
                          <th>#</th>
                          <th>Name</th>
                          <th>Date</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody class="table-group-divider">
                        @foreach (range(1, 2) as $history) {
                            <tr class="fw-normal fs-sm">
                          <td>1</td>
                          <td>
                            <a href="#" class="text-black">andkstrr@gmail.com</a>
                          </td>
                          <td>17 Feb 2025</td>
                          <td>Guest</td>
                          <td><span class="status-active">• Active</span></td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button"
                               data-bs-toggle="dropdown" aria-expanded="false">More</button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a class="dropdown-item" href="#">George Washington</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                              <a href="#" class="text-black">sanmorafd@gmail.com</a>
                            </td>
                            <td>17 Feb 2025</td>
                            <td>Unknown</td>
                            <td><span class="status-inactive">• Inactive</span></td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">More</button>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="#">George Washington</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        }
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

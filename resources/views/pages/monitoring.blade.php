@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Monitoring')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('pict', 'logo_baitullah.png')
@section('app-name', 'baitullah.co.id')

@section('content')
    {{-- SECTION 1 --}}
    <h6 class="section-title fw-semisemibold text-black fs-5 mt-14">Overview</h6>
    <div class="row mt-4">
        {{-- CARD --}}
        <div class="col-12 col-sm-6 col-lg-3">
            <x-monitoring-card title="Total Visitors" href="{{ route('BCI.analytics.monitoring.users') }}" icon="fa-up-right-from-square" content="" value="1,500" percentage="12%" />
        </div>
        {{-- CARD --}}
        <div class="col-12 col-sm-6 col-lg-3">
            <x-monitoring-card title="Visitor is Active" href="{{ route('BCI.analytics.monitoring.users') }}" icon="fa-up-right-from-square" content="" value="1,500" percentage="12%" />
        </div>
        {{-- CARD --}}
        <div class="col-12 col-sm-6 col-lg-3">
            <x-monitoring-card title="Page Views" href="{{ route('BCI.analytics.monitoring.application') }}" icon="fa-up-right-from-square" content="" value="1,500" percentage="12%" />
        </div>
        {{-- CARD --}}
        <div class="col-12 col-sm-6 col-lg-3">
            <x-monitoring-card title="Traffic Website" href="{{ route('BCI.analytics.monitoring.application') }}" icon="fa-up-right-from-square" content="" value="1,500" percentage="12%" />
        </div>
    </div>

    {{-- HR --}}
    <hr class="my-3">

    {{-- SECTION 2 --}}
    <div class="row my-6">
        {{-- LEFT COL --}}
        <div class="col-12 col-md-6 col-lg-9 mb-4">
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

        {{-- RIGHT COL --}}
        <div class="col-12 col-md-6 col-lg-3">
            <x-tab-content
                title=""
                object=""
                href=""
                icon=""
                information=""
                :tabs="[
                    'users' => ['label' => 'Users', 'value' => '17.5K'],
                    'page' => ['label' => 'Page Views', 'value' => '520K'],
                ]"
                :percentages="[
                    'users' => '+5.12%',
                    'page' => '+12.30%',
                ]"
            />
        </div>
    </div>
@endsection

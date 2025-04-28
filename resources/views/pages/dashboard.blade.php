@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Dashboard')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('pict', 'logo_baitullah.png')
@section('app-name', 'baitullah.co.id')

@section('content')
    {{-- SECTION 1 --}}
    <div class="d-flex flex-column flex-lg-row gap-6 mt-6">
        {{-- LEFT COL --}}
        <div class="flex-grow-1">
            <h6 class="section-title fw-semisemibold text-black fs-5 mt-7">Overview</h6>
            <div class="row mt-4">
                {{-- CARDS --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Audience" value="1,500" percentage="12%" />
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Visitors" value="1,500" percentage="12%" />
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Merchant" value="1,500" percentage="12%" />
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Page Views" value="1,500" percentage="12%" />
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Traffic" value="1,500" percentage="12%" />
                </div>
            </div>
        </div>

        {{-- RIGHT COL --}}
        <div class="col-12 col-lg-4 mt-9">
            {{-- TOTAL ALL USERS CARD --}}
            <x-tab-content
                title="Users"
                object="User"
                href=""
                icon="fa-user"
                information=""
                :tabs="[
                    'Daily' => ['label' => 'Daily', 'value' => '1,403'],
                    'Monthly' => ['label' => 'Monthly', 'value' => '18,3K'],
                    'Yearly' => ['label' => 'Yearly', 'value' => '520K'],
                ]"
                :percentages="[
                    'Daily' => '+5.12%',
                    'Monthly' => '+12.30%',
                    'Yearly' => '+12.30%',
                ]"
            />
        </div>
    </div><hr class="my-3">

    {{-- SECTION 2 --}}
    <div class="row mt-7 mb-9">
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
        <div class="col-12 col-md-12 col-lg-3 mb-4">
            <div class="card-content">
                <x-pie-chart title="Browser Usage" />
            </div>
        </div>
    </div>
@endsection

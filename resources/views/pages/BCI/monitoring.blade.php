@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Monitoring')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('app-name', 'baitullah.co.id')

@section('content')
    {{-- SECTION 1 --}}
    <h6 class="section-title fw-semisemibold text-black fs-5 mt-14">Overview</h6>
    <div class="row mt-4">
        {{-- CARD --}}
        <div class="col-12 col-sm-6 col-lg-3">
            <x-card-monitoring icon="fa-user" title="Total Visitors" value="1,500" percentage="12%"></x-card-monitoring>
        </div>
        {{-- CARD --}}
        <div class="col-12 col-sm-6 col-lg-3">
            <x-card-monitoring icon="fa-cart-shopping" title="Visitor is Active" value="1,500" percentage="12%"></x-card-monitoring>
        </div>
        {{-- CARD --}}
        <div class="col-12 col-sm-6 col-lg-3">
            <x-card-monitoring icon="fa-user" title="Total Visitors" value="1,500" percentage="12%"></x-card-monitoring>
        </div>
        {{-- CARD --}}
        <div class="col-12 col-sm-6 col-lg-3">
            <x-card-monitoring icon="fa-cart-shopping" title="Visitor is Active" value="1,500" percentage="12%"></x-card-monitoring>
        </div>
    </div>

    {{-- HR --}}
    <hr class="my-3">

    {{-- SECTION 2 --}}
    <div class="row my-6">
        {{-- LEFT COL --}}
        <div class="col-12 col-md-6 col-lg-9 mb-4">
            <div class="card rounded-3 shadow">
                <div class="card-title px-4 pt-4">
                    <p class="fw-semibold text-gray fs-6 mb-0">Chart</p>
                </div>
                <div class="card-content p-6 mb-5">
                    <div style="width: 100%; height: 263px;">
                        <canvas id="userChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        {{-- RIGHT COL --}}
        <div class="col-12 col-md-6 col-lg-3">
            <x-tab-content
                title="Monitoring"
                object="txt"
                :tabs="[
                    'unread' => ['label' => 'Unread', 'value' => '234'],
                    'read' => ['label' => 'Read', 'value' => '520'],
                ]"
                :percentages="[
                    'unread' => '+5.12%',
                    'read' => '+12.30%',
                ]"
            />
        </div>
    </div>
@endsection

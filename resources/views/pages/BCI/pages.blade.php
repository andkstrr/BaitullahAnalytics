@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Pages')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('app-name', 'baitullah.co.id')

@section('content')
    {{-- SECTION 1 --}}
    <div class="d-flex flex-column flex-lg-row gap-6 mt-6">
        {{-- LEFT COL --}}
        <div class="flex-grow-1">
            <h6 class="section-title fw-semisemibold text-black fs-5 mt-7">Overview</h6>
            <div class="row mt-4">
                {{-- CARD --}}
                <div class="col-12 col-sm-6 col-lg-6">
                    <x-card-monitoring icon="fa-user" title="Total Visitors" value="1,500" percentage="12%"></x-card-monitoring>
                </div>

                {{-- CARD --}}
                <div class="col-12 col-sm-6 col-lg-6">
                    <x-card-monitoring icon="fa-cart-shopping" title="Visitor is Active" value="1,500" percentage="12%"></x-card-monitoring>
                </div>

                {{-- CARD --}}
                <div class="col-12 col-sm-6 col-lg-6">
                    <x-card-monitoring icon="fa-cart-shopping" title="Traffic Website" value="1,500" percentage="12%"></x-card-monitoring>
                </div>
            </div>
            <div class="row mt-4">
                {{-- CHART --}}
                <div class="col-12">
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
            </div>
        </div>

        {{-- RIGHT COL --}}
        <div class="col-12 col-lg-4 mt-9">
            {{-- TOTAL ALL USERS CARD --}}
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

            <div class="card rounded-3 shadow">
                <div class="card-title">

                </div>
                <div class="card-content p-4">
                    <x-card-dashboard title="Traffic" value="1,500" percentage="12%"></x-card-dashboard>
                    <x-card-dashboard title="Traffic" value="1,500" percentage="12%"></x-card-dashboard>
                    <x-card-dashboard title="Traffic" value="1,500" percentage="12%"></x-card-dashboard>
                </div>
            </div>
        </div>
    </div>
@endsection

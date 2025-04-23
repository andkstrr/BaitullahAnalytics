@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Notification')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('pict', 'logo_baitullah.png')
@section('app-name', 'baitullah.co.id')

@section('content')
    <h6 class="section-title fw-semisemibold text-black fs-5 mt-14">Overview</h6>
    <div class="row mt-4">
        <div class="col-12 col sm-6 col-md-4">
            <x-monitoring-card title="New Users" href="{{ route('analytics.monitoring.users') }}" icon="fa-users" value="376K" content="" percentage="12%" />
        </div>

        <div class="col-12 col sm-6 col-md-4">
            <x-monitoring-card title="Recent Purchase" href="" icon="fa-cart-shopping" value="376K" content="" percentage="12%" />
        </div>

        <div class="col-12 col sm-6 col-md-4">
            <x-monitoring-card title="Traffic Website" href="{{ route('analytics.monitoring.application') }}" icon="fa-magnifying-glass-chart" value="376K" content="" percentage="12%" />
        </div>
    </div><hr class="my-3">

    {{-- TABLE NOTIFICATION --}}

@endsection

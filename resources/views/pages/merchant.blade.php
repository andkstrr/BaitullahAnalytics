@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Merchants')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('pict', 'logo_baitullah.png')
@section('app-name', 'baitullah.co.id')

@section('content')
    <h6 class="section-title fw-semisemibold text-black fs-5 mt-14">Overview</h6>
    <div class="row mt-4">
        <div class="col-12 col sm-6 col-md-4">
            <x-monitoring-card title="Not Merchant" href="{{ route('analytics.monitoring.users') }}" icon="fa-users-line" value="{{ number_format($notMerchant) }}" content="" percentage="12%" />
        </div>

        <div class="col-12 col sm-6 col-md-4">
            <x-monitoring-card title="Pending Merchant" href="" icon="fa-users-line" value="{{ number_format($pendingMerchant) }}" content="" percentage="12%" />
        </div>

        <div class="col-12 col sm-6 col-md-4">
            <x-monitoring-card title="Active Merchant" href="{{ route('analytics.monitoring.application') }}" icon="fa-users-line" value="{{ number_format($activeMerchant) }}" content="" percentage="12%" />
        </div>
    </div><hr class="my-3">

    <div class="table-responsive rounded-3 my-5">
        <table class="table table-custom table-borderless">
        <thead>
            <tr class="table-light">
                <th>Name</th>
                <th>City</th>
                <th>PPIU</th>
                <th>PIHK</th>
                <th>isMerchant</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($merchants as $merchant)
            <tr>
                <td>{{ $merchant->name }}</td>
                <td>{{ $merchant->city->name }}</td>
                <td>{{ $merchant->ppiu ?: '-' }}</td>
                <td>{{ $merchant->pihk ?: '-' }}</td>
                <td>
                    @if ($merchant->isMerchant === 'not')
                        <p class="badge py-1 px-2 mb-0 bg-red fs-sm fw-semibold text-uppercase">
                            Not Merchant
                        </p>
                    @elseif ($merchant->isMerchant === 'pending')
                        <p class="badge py-1 px-2 mb-0 bg-yellow fs-sm fw-semibold text-uppercase">
                            Pending
                        </p>
                    @elseif ($merchant->isMerchant === 'merchant')
                        <p class="badge py-1 px-2 mb-0 bg-green fs-sm fw-semibold text-uppercase">
                            Active
                        </p>
                    @else
                        <p class="badge fs-sm bg-secondary">
                            Unknown
                        </p>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>

        <div class="mt-7 d-flex justify-content-between align-items-center">
            <div class="text-muted small">
                Showing {{ $merchants->firstItem() }} to {{ $merchants->lastItem() }} of {{ $merchants->total() }} entries
            </div>

            <div>
                {{ $merchants->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection

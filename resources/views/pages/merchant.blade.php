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
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-custom table-borderless">
        <thead>
            <tr class="table-light">
                <th>
                    <div class="dropdown">
                        <a class="dropdown text-decoration-none text-black  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Name
                        </a>
                        <div class="dropdown-menu p-3" style="min-width: 250px;">
                            <form method="GET" action="{{ route('analytics.merchant.dashboard') }}">
                                <input type="text" name="search_name" class="form-control mb-2" placeholder="Search merchant name" value="{{ request('search_name') }}">
                                <button type="submit" class="btn btn-success
                                 btn-sm w-100">Search</button>
                            </form>
                        </div>
                    </div>
                </th>
                <th>
                    <div class="dropdown">
                        <a class="dropdown text-decoration-none text-black  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            City
                        </a>
                        <div class="dropdown-menu p-3" style="min-width: 250px;">
                            <form method="GET" action="{{ route('analytics.merchant.dashboard') }}">
                                <input type="text" name="search_city" class="form-control mb-2"
                                    placeholder="Search city name" value="{{ request('search_city') }}">
                                <button type="submit" class="btn btn-success btn-sm w-100">Search</button>
                            </form>
                        </div>
                    </div>
                </th>
                <th>PPIU</th>
                <th>PIHK</th>
                <th class="position-relative">
                    isMerchant
                    <div class="dropdown d-inline">
                        <a class="text-dark" data-bs-toggle="dropdown" role="button">
                            <i class="px-2 fa-solid fa-sort"></i>
                        </a>
                        <div class="dropdown-menu p-2">
                            <form action="{{ route('analytics.merchant.dashboard') }}" method="GET">
                                <select name="merchant_status" class="form-select mb-2">
                                    <option value="">All</option>
                                    <option value="not" {{ request('merchant_status') == 'not' ? 'selected' : '' }}>Not Merchant</option>
                                    <option value="pending" {{ request('merchant_status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="merchant" {{ request('merchant_status') == 'merchant' ? 'selected' : '' }}>Merchant</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-success w-100">Filter</button>
                            </form>
                        </div>
                    </div>
                </th>
                <th>
                    <a href="{{ route('analytics.merchant.dashboard') }}" class="text-decoration-none text-dark" title="Reset Filters">
                        <i class="fa-solid fa-rotate"></i>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($merchants as $merchant)
            <tr>
                <td>{{ $merchant->name }}</td>
                <td>{{ $merchant->city_name }}</td>
                <td>{{ $merchant->ppiu ?: '-' }}</td>
                <td>{{ $merchant->pihk ?: '-' }}</td>
                <td>
                    <div class="dropdown">
                        <a class="badge py-1 px-2 mb-0 fs-sm fw-semibold text-uppercase dropdown-toggle
                            {{ $merchant->isMerchant === 'not' ? 'bg-red' : ($merchant->isMerchant === 'pending' ? 'bg-yellow' : ($merchant->isMerchant === 'merchant' ? 'bg-green' : 'bg-secondary')) }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ ucfirst($merchant->isMerchant ?? 'Unknown') }}
                        </a>
                        <ul class="dropdown-menu">
                            @foreach(['not' => 'Not Merchant', 'pending' => 'Pending', 'merchant' => 'Merchant'] as $status => $label)
                                <li>
                                    <form action="{{ route('analytics.merchant.update-status', $merchant->id) }}" method="POST" onsubmit="return confirmUpdate('{{ $merchant->name }}', '{{ ucfirst($label) }}')">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="isMerchant" value="{{ $status }}">
                                        <button type="submit" class="dropdown-item" type="submit">
                                            {{ ucfirst($label) }}
                                        </button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </td>

            </tr>
            @endforeach
        </tbody>
        </table>

        <div class="mt-7 d-flex justify-content-between align-items-center">
            <div class="text-gray fw-medium">
                Showing {{ $merchants->firstItem() }} to {{ $merchants->lastItem() }} of {{ $merchants->total() }} merchant
            </div>

            <div>
                {{ $merchants->appends(request()->query())->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>

        <script>
            function confirmUpdate(merchantName, newStatusLabel) {
                return confirm(`Apakah Anda yakin ingin mengubah status ${merchantName} menjadi "${newStatusLabel}"?`);
            }
        </script>
    </div>
@endsection

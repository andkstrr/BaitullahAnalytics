@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Dashboard')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('pict', 'logo_baitullah.png')
@section('app-name', 'baitullah.co.id')

@section('content')
    <h6 class="section-title fw-semisemibold text-black fs-5">Overview</h6>

    </div>
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

    <div class="table-responsive rounded-3 my-7">
        @if (Session::get('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @elseif (Session::get('failed'))
            <div class="alert alert-danger mt-3">
                {{ session('failed') }}
            </div>
        @endif

        <div class="card rounded-4">
            <div class="d-flex justify-content-between align-items-center mx-5">
                <h6 class="section-title fw-semibold text-black fs-4 my-4">Merchants</h6>

                <div class="d-flex gap-3">
                    {{-- SEARCH NAME --}}
                    <form method="GET" action="{{ route('analytics.merchant.dashboard') }}">
                        <div class="search-box btn btn-outline-default d-flex align-items-center px-2 py-2 rounded-3 my-5">
                            <i class="fas fa-search px-1"></i>
                            <input type="text" id="searchInput" name="search_name" value="{{ request('search_name') }}" placeholder="Merchant Name" class="text-black">
                        </div>

                        @if (request('search_city') || request('merchant_status'))
                            <input type="hidden" name="search_city" value="{{ request('search_city') }}">
                            <input type="hidden" name="merchant_status" value="{{ request('merchant_status') }}">
                        @endif
                    </form>

                    {{-- CITY DROPDOWN FILTER --}}
                    <div class="dropdown">
                        <button class="btn btn-outline-default rounded-3 my-5" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 50px; height: 40px;" title="Filter City">
                            <i class="ri-filter-3-line fs-4 text-black"></i>
                        </button>
                        <ul class="dropdown-menu p-2" style="max-height: 300px; overflow-y: auto;">
                            @if (request('search_name') || request('search_city'))
                                <input type="hidden" name="search_name" value="{{ request('search_name') }}">
                                <input type="hidden" name="search_city" value="{{ request('search_city') }}">
                            @endif

                            @foreach ($cities as $city)
                                <li>
                                    <a class="dropdown-item"
                                    href="{{ route('analytics.merchant.dashboard', array_merge(request()->query(), ['search_city' => $city->name])) }}">
                                        {{ $city->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- STATUS DROPDOWN FILTER --}}
                    <div class="dropdown">
                        <button class="btn btn-outline-default rounded-3 my-5 text-black fw-normal" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 90px; height: 40px;" title="Filter Status">
                            Filter
                        </button>
                        <ul class="dropdown-menu p-2" style="max-height: 300px; overflow-y: auto;">
                            @if (request('search_name'))
                                <input type="hidden" name="search_name" value="{{ request('search_name') }}">
                            @endif
                            @if (request('search_city'))
                                <input type="hidden" name="search_city" value="{{ request('search_city') }}">
                            @endif

                            <li>
                                <a class="dropdown-item"
                                   href="{{ route('analytics.merchant.dashboard', collect(request()->query())->except('merchant_status')->toArray()) }}">
                                    View All
                                </a>
                            </li>

                            @foreach (['not' => 'Not Verified', 'pending' => 'Pending', 'merchant' => 'Merchant'] as $statusValue => $statusLabel)
                                <li>
                                    <a class="dropdown-item"
                                       href="{{ route('analytics.merchant.dashboard', array_merge(request()->query(), ['merchant_status' => $statusValue])) }}">
                                        {{ $statusLabel }}
                                    </a>
                                </li>
                            @endforeach
                    </div>
                </div>
            </div>

            <table class="table table-responsive table-custom table-borderless">
                <thead>
                    <tr>
                        <th class="fw-normal">Name</th>
                        <th class="fw-normal">City</th>
                        <th class="fw-normal">PPIU</th>
                        <th class="fw-normal">PIHK</th>
                        <th class="fw-normal">Status</th>
                        <th>
                            <a href="{{ route('analytics.merchant.dashboard') }}" class="text-decoration-none text-dark" title="Reset Filters">
                                <i class="fa-solid fa-rotate"></i>
                            </a>
                        </th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    @if($merchants->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center fw-semibold text-danger fs-6">Data tidak ditemukan!</td>
                        </tr>
                    @else
                        @foreach ($merchants as $merchant)
                        <tr>
                            <td>{{ $merchant->name }}</td>
                            <td>{{ $merchant->city_name }}</td>
                            <td>{{ $merchant->ppiu ?: '-' }}</td>
                            <td>{{ $merchant->pihk ?: '-' }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="badge py-1 px-2 mb-0 fs-sm fw-semibold text-uppercase text-decoration-none dropdown-toggle
                                        {{ $merchant->isMerchant === 'not' ? 'bg-red' : ($merchant->isMerchant === 'pending' ? 'bg-yellow' : ($merchant->isMerchant === 'merchant' ? 'bg-green' : 'bg-secondary')) }}"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    @endif
                </tbody>
            </table>
        </div>

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

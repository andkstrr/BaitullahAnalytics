@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Add Merchant')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('pict', 'logo_baitullah.png')
@section('app-name', 'baitullah.co.id')

@section('content')
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('analytics.merchant.store') }}" method="POST">
                @csrf

                <div class="row">
                    <!-- KIRI -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Merchant</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="pt" class="form-label">Nama PT</label>
                            <input type="text" class="form-control" name="pt" required>
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label">Kota</label>
                            <select name="city" class="form-select" required>
                                <option disabled selected>Pilih Kota</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="contact" class="form-label">Kontak</label>
                            <input type="text" class="form-control" name="contact" required>
                        </div>
                    </div>

                    <!-- KANAN -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="latitude" class="form-label">Latitude</label>
                                <input type="text" class="form-control" name="latitude">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="longitude" class="form-label">Longitude</label>
                                <input type="text" class="form-control" name="longitude">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="ppiu" class="form-label">PPIU</label>
                                <input type="text" class="form-control" name="ppiu">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="pihk" class="form-label">PIHK</label>
                                <input type="text" class="form-control" name="pihk">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="rate" class="form-label">Rating</label>
                            <input type="number" step="0.1" class="form-control" name="rate">
                        </div>

                        <div class="mb-3">
                            <label for="isMerchant" class="form-label">Status Merchant</label>
                            <select name="isMerchant" class="form-select" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="not">Not Verified</option>
                                <option value="pending">Pending</option>
                                <option value="merchant">Merchant</option>
                            </select>
                        </div>
                    </div>

                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-success     px-4">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

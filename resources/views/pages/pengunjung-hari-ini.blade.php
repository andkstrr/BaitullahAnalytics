@extends('layouts.navbar')

@section('content')
    <div class="background-section">
        <div class="container-fluid">
            <div class="row">

                {{-- LEFT COLUMN --}}
                <div class="col-md-9" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card p-4 rounded-4 shadow-lg">
                        <div class="card-content">
                            {{-- CHART LINE PERBANDINGAN KUNJUNGAN --}}
                            
                        </div>
                    </div>
                </div>

                {{-- RIGHT COLUMN --}}
                <div class="col-md-3">
                    <div class="card p-4 rounded-4 shadow-lg">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

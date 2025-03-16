@extends('template.template')

@section('page-title')
    Dashboard
@endsection

@section('content')

    <div class="row gy-4">
        <div class="col-xxl-3 col-sm-6">
            <div class="card radius-12 bg-gradient-purple">
                <div class="card-body p-24">
                    <div class="d-flex justify-content-between">
                        <div
                            class="w-64-px h-64-px d-inline-flex align-items-center justify-content-center bg-lilac-600 text-white mb-16 radius-12">
                            <iconify-icon icon="solar:medal-ribbons-star-bold" class="h5 mb-0"></iconify-icon>
                        </div>
                        <h2>{{$total_laporan}}</h2>
                    </div>
                    <h6 class="mb-8">Total Laporan</h6>
                    <p class="card-text mb-8 text-secondary-light">
                        Semua data laporan masuk.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="card radius-12 bg-gradient-success">
                <div class="card-body p-24">
                    <div class="d-flex justify-content-between">
                        <div
                            class="w-64-px h-64-px d-inline-flex align-items-center justify-content-center bg-success-600 text-white mb-16 radius-12">
                            <iconify-icon icon="solar:medal-ribbons-star-bold" class="h5 mb-0"></iconify-icon>
                        </div>
                        <h2>{{$pending}}</h2>
                    </div>
                    <h6 class="mb-8">Laporan Pending</h6>
                    <p class="card-text mb-8 text-secondary-light">
                        Data laporan yang belum direspon.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="card radius-12 bg-gradient-primary">
                <div class="card-body p-24">
                    <div class="d-flex justify-content-between">
                        <div
                            class="w-64-px h-64-px d-inline-flex align-items-center justify-content-center bg-primary-600 text-white mb-16 radius-12">
                            <iconify-icon icon="solar:medal-ribbons-star-bold" class="h5 mb-0"></iconify-icon>
                        </div>
                        <h2>{{$proses}}</h2>
                    </div>
                    <h6 class="mb-8">Laporan Diproses</h6>
                    <p class="card-text mb-8 text-secondary-light">
                        Semua laporan yang sedang diproses.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="card radius-12 bg-gradient-danger">
                <div class="card-body p-24">
                    <div class="d-flex justify-content-between">
                        <div
                            class="w-64-px h-64-px d-inline-flex align-items-center justify-content-center bg-danger-600 text-white mb-16 radius-12">
                            <iconify-icon icon="solar:medal-ribbons-star-bold" class="h5 mb-0"></iconify-icon>
                        </div>
                        <h2>{{$ditolak}}</h2>
                    </div>
                    <h6 class="mb-8">Laporan Ditolak</h6>
                    <p class="card-text mb-8 text-secondary-light">
                        Semua laporan yang ditolak.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
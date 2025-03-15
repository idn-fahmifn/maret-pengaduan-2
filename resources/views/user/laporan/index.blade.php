@extends('template.template')

@section('page-title')
    Laporan Saya
@endsection

@section('content')
    <div class="card basic-data-table">
        <div class="card-header">
            <h5 class="card-title mb-0">Data Laporan Saya</h5>
        </div>
        <div class="card-body">

            <div class="alert alert-success bg-success-100 text-success-600 border-success-100 px-24 py-11 mb-0 fw-semibold text-lg radius-8 mb-5"
                role="alert">
                <div class="d-flex align-items-center justify-content-between text-lg">
                    This is a Success alert
                    <button class="remove-button text-success-600 text-xxl line-height-1"> <iconify-icon
                            icon="iconamoon:sign-times-light" class="icon"></iconify-icon></button>
                </div>
                <p class="fw-medium text-success-600 text-sm mt-8">Lorem Ipsum&nbsp;is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
            </div>

            <div class="table-responsive">
                <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                    <thead>
                        <tr>
                            <th scope="col">Judul Laporan</th>
                            <th scope="col">Dibuat pada</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->judul_laporan}}</td>
                                <td>{{$item->tanggal_laporan->diffForHumans()}}</td>
                                <td>
                                    @if ($item->status == 'pending')
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="w-8-px h-8-px bg-dark rounded-circle"></span>
                                            <span class="text-dark fw-medium">pending</span>
                                        </div>
                                    @elseif ($item->status == 'diproses')
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="w-8-px h-8-px bg-primary-600 rounded-circle"></span>
                                            <span class="text-primary-600 fw-medium">diproses</span>
                                        </div>
                                    @elseif ($item->status == 'selesai')
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="w-8-px h-8-px bg-success-600 rounded-circle"></span>
                                            <span class="text-success-600 fw-medium">selesai</span>
                                        </div>
                                    @else
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="w-8-px h-8-px bg-danger-600 rounded-circle"></span>
                                            <span class="text-danger-600 fw-medium">ditolak</span>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    button
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
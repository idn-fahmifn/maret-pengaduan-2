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
            <div class="table-responsive">
                <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                    <thead>
                        <tr>
                            <th scope="col">Judul Laporan</th>
                            <th scope="col">Tanggal Dibuat</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
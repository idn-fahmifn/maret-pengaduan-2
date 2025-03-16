@extends('template.template')

@section('page-title')
    Edit laporan saya
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Edit laporan saya</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('laporan.update', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row gy-3">
                            <div class="col-12">
                                <label class="form-label">Judul laporan</label>
                                <input type="text" name="judul_laporan" value="{{$data->judul_laporan}}" required
                                    class="form-control" placeholder="Masukan judul laporan anda">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Jenis Laporan</label>
                                <select name="jenis" class="form-control" required>
                                    <option value="{{$data->jenis}}">- {{$data->jenis}} -</option>
                                    <option value="kerusakan">Kerusakan</option>
                                    <option value="kehilangan">Kehilangan</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold text-neutral-900">Detail Laporan </label>
                                <div class="border border-neutral-200 radius-8">
                                    <div class="height-200">
                                        <textarea name="detail_laporan" class="form-control">
                                            {{$data->detail_laporan}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold text-neutral-900">Upload Dokumentasi </label>
                                <div class="upload-image-wrapper">
                                    <div
                                        class="uploaded-img d-none position-relative h-160-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                        <button type="button"
                                            class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex bg-danger-600 w-40-px h-40-px justify-content-center align-items-center rounded-circle">
                                            <iconify-icon icon="radix-icons:cross-2"
                                                class="text-2xl text-white"></iconify-icon>
                                        </button>
                                        <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                            src="{{asset('storage/images/laporan/' . $data->dokumentasi)}}" alt="image">
                                    </div>
                                    <label
                                        class="upload-file h-160-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                        for="upload-file">
                                        <iconify-icon icon="solar:camera-outline"
                                            class="text-xl text-secondary-light"></iconify-icon>
                                        <span class="fw-semibold text-secondary-light">Upload</span>
                                        <input id="upload-file" name="dokumentasi" value="{{$data->dokumentasi}}"
                                            type="file" hidden>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary-600">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
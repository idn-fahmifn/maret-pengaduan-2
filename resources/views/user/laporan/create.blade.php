@extends('template.template')

@section('page-title')
    Buat laporan baru
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Buat laporan baru</h5>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        @csrf

                        <div class="row gy-3">
                            <div class="col-12">
                                <label class="form-label">Judul laporan</label>
                                <input type="text" name="judul_laporan" required class="form-control"
                                    placeholder="Masukan judul laporan anda">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Jenis Laporan</label>
                                <select name="jenis" class="form-control" required>
                                    <option value="">- Pilih jenis laporan -</option>
                                    <option value="kerusakan">Kerusakan</option>
                                    <option value="kehilangan">Kehilangan</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold text-neutral-900">Detail Laporan </label>
                                <div class="border border-neutral-200 radius-8 overflow-hidden">
                                    <div class="height-200">
                                        <!-- Editor Toolbar Start -->
                                        <div id="toolbar-container">
                                            <span class="ql-formats">
                                                <select class="ql-font"></select>
                                                <select class="ql-size"></select>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-strike"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <select class="ql-color"></select>
                                                <select class="ql-background"></select>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-script" value="sub"></button>
                                                <button class="ql-script" value="super"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-header" value="1"></button>
                                                <button class="ql-header" value="2"></button>
                                                <button class="ql-blockquote"></button>
                                                <button class="ql-code-block"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-list" value="ordered"></button>
                                                <button class="ql-list" value="bullet"></button>
                                                <button class="ql-indent" value="-1"></button>
                                                <button class="ql-indent" value="+1"></button>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-direction" value="rtl"></button>
                                                <select class="ql-align"></select>
                                            </span>
                                            <span class="ql-formats">
                                                <button class="ql-clean"></button>
                                            </span>
                                        </div>
                                        <!-- Editor Toolbar Start -->

                                        <!-- Editor start -->
                                        <textarea name="detail_laporan" class="form-control" id="editor"></textarea>
                                    </div>
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
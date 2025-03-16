@extends('template.template')

@section('page-title')
    Dashboard
@endsection

@section('content')

    <div class="row gy-4">
        <div class="col-xxl-3 col-sm-6">
            <div class="card h-100 radius-12 bg-gradient-purple">
                <div class="card-body p-24">
                    <div
                        class="w-64-px h-64-px d-inline-flex align-items-center justify-content-center bg-lilac-600 text-white mb-16 radius-12">
                        <iconify-icon icon="solar:medal-ribbons-star-bold" class="h5 mb-0"></iconify-icon>
                    </div>
                    <h6 class="mb-8">Brand Identity</h6>
                    <p class="card-text mb-8 text-secondary-light">Random Text gateway to the Origin al the Works Platform,
                        & your unique block chain gateway identity.</p>
                    <a href="javascript:void(0)"
                        class="btn text-lilac-600 hover-text-lilac px-0 py-0 mt-16 d-inline-flex align-items-center gap-2">
                        Read More <iconify-icon icon="iconamoon:arrow-right-2" class="text-xl"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="card h-100 radius-12 bg-gradient-primary text-center">
                <div class="card-body p-24">
                    <div
                        class="w-64-px h-64-px d-inline-flex align-items-center justify-content-center bg-primary-600 text-white mb-16 radius-12">
                        <iconify-icon icon="ri:computer-fill" class="h5 mb-0"></iconify-icon>
                    </div>
                    <h6 class="mb-8">UI/UX Designer</h6>
                    <p class="card-text mb-8 text-secondary-light">Random Text gateway to the Origin al the Works Platform,
                        & your unique block chain gateway identity.</p>
                    <a href="javascript:void(0)"
                        class="btn text-primary-600 hover-text-primary px-0 py-10 d-inline-flex align-items-center gap-2">
                        Read More <iconify-icon icon="iconamoon:arrow-right-2" class="text-xl"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="card h-100 radius-12 bg-gradient-success text-end">
                <div class="card-body p-24">
                    <div
                        class="w-64-px h-64-px d-inline-flex align-items-center justify-content-center bg-success-600 text-white mb-16 radius-12">
                        <iconify-icon icon="fluent:toolbox-20-filled" class="h5 mb-0"></iconify-icon>
                    </div>
                    <h6 class="mb-8">Business Strategy</h6>
                    <p class="card-text mb-8 text-secondary-light">Random Text gateway to the Origin al the Works Platform,
                        & your unique block chain gateway identity.</p>
                    <a href="javascript:void(0)"
                        class="btn text-success-600 hover-text-success px-0 py-10 d-inline-flex align-items-center gap-2">
                        Read More <iconify-icon icon="iconamoon:arrow-right-2" class="text-xl"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="card h-100 radius-12 bg-gradient-danger text-center">
                <div class="card-body p-24">
                    <div
                        class="w-64-px h-64-px d-inline-flex align-items-center justify-content-center bg-danger-600 text-white mb-16 radius-12">
                        <iconify-icon icon="ph:code-fill" class="h5 mb-0"></iconify-icon>
                    </div>
                    <h6 class="mb-8">Business Strategy</h6>
                    <p class="card-text mb-8 text-secondary-light">Random Text gateway to the Origin al the Works Platform,
                        & your unique block chain gateway identity.</p>
                    <a href="javascript:void(0)"
                        class="btn text-danger-600 hover-text-danger px-0 py-10 d-inline-flex align-items-center gap-2">
                        Read More <iconify-icon icon="iconamoon:arrow-right-2" class="text-xl"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
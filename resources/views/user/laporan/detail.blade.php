@extends('template.template')

@section('page-title')
    Detail Laporan
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card p-0 radius-12 overflow-hidden">
                <div class="card-body p-0">
                    <img src="{{asset('storage/images/laporan/' . $data->dokumentasi)}}" alt=""
                        class="w-100 h-100 object-fit-cover">
                    <div class="p-32">
                        <div class="d-flex align-items-center gap-16 justify-content-between flex-wrap mb-24">
                            <div class="d-flex align-items-center gap-8">
                                <div class="d-flex flex-column">
                                    <h6 class="text-lg mb-0">{{$data->user->name}}</h6>
                                    <span
                                        class="text-sm text-neutral-500">{{$data->tanggal_laporan->diffForHumans()}}</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-md-3 gap-2 flex-wrap">
                                <div class="d-flex align-items-center gap-8 text-neutral-500 text-lg fw-medium">
                                    @if ($data->status == 'pending')
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="w-8-px h-8-px bg-dark rounded-circle"></span>
                                            <span class="text-dark fw-medium">pending</span>
                                        </div>
                                    @elseif ($data->status == 'diproses')
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="w-8-px h-8-px bg-primary-600 rounded-circle"></span>
                                            <span class="text-primary-600 fw-medium">diproses</span>
                                        </div>
                                    @elseif ($data->status == 'selesai')
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
                                </div>
                                <div class="d-flex align-items-center gap-8 text-neutral-500 text-lg fw-medium">
                                    <i class="ri-chat-3-line"></i>
                                    15 respon
                                </div>
                                <div class="d-flex align-items-center gap-8 text-neutral-500 text-lg fw-medium">
                                    <i class="ri-calendar-2-line"></i>
                                    {{date($data->tanggal_laporan->format('d-m-Y H:i:s'))}}
                                </div>
                            </div>
                        </div>
                        <h3 class="mb-16"> {{$data->judul_laporan}} </h3>
                        <div class="text-neutral-500 mb-16">
                            {{$data->detail_laporan}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-24">
                <div class="card-header border-bottom">
                    <h6 class="text-xl mb-0">Respon</h6>
                </div>
                <div class="card-body p-24">
                    <div class="comment-list d-flex flex-column">
                        <div class="comment-list__item">
                            <div class="d-flex align-items-start gap-16">
                                <div class="flex-grow-1 border-bottom pb-40 mb-40 border-dashed">
                                    <h6 class="text-lg mb-4">Judul Respon</h6>
                                    <span class="text-neutral-500 text-sm">16 mar 2025 17:00:00</span>
                                    <p class="text-neutral-600 text-md my-16">Lorem ipsum dolor sit amet consectetur. Nec
                                        nunc
                                        pellentesque massa pretium. Quam sapien nec venenatis vivamus sed cras faucibus mi
                                        viverra. Quam
                                        faucibus morbi cras vitae neque. Necnunc pellentesque massa pretium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
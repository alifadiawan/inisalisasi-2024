@extends('layout.main')
@section('page-heading', 'Dashboard | Berita & Pengumuman')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-12">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                            <div class="stats-icon blue mb-2">
                                <i class="fa-solid fa-newspaper fa-2xl"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Berita</h6>
                            <h6 class="font-extrabold mb-0">{{ $countBerita }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                            <div class="stats-icon green mb-2">
                                <i class="fa-solid fa-envelope fa-2xl"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Pengumuman</h6>
                            <h6 class="font-extrabold mb-0">{{ $countPengumuman }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Berita & Pengumuman</h5>
                    <a href="{{ route('berita-dan-pengumuman.create') }}" class="btn btn-primary">Add</a>
                </div>
                <div class="card-body">
                    <livewire:news-table theme="bootstrap-5" />
                </div>
            </div>
        </div>
    </div>
@endsection

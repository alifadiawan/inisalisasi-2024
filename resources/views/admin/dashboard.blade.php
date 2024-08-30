@extends('layout.main')
@section('page-heading', 'Dashboard')
@section('content')
    <section class="row">
        <div class="col-12 col-lg-4">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <i class="fa-solid fa-circle-user fa-2xl"></i>
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">Hallo, {{ Auth::user()->name }}</h5>
                            <form action="{{ route('logout') }}" method="GET">
                                @csrf
                                <input type="submit" class="btn btn-sm btn-danger mb-0" value="Logout" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

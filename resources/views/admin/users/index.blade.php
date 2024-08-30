@extends('layout.main')
@section('page-heading', 'List Mahasiswa Baru')
@section('content')
    <div class="card">
        <div class="card-body">
            <livewire:users-table theme="bootstrap-5"/>
        </div>
    </div>
@endsection
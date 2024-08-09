@extends('layout.main')
@section('page-heading', 'Penugasan | Dashboard Tugas')
@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="d-flex align-items-center justify-content-between card-header">
                    <h5 class="m-0 p-0">Nama Sub Tugas</h5>
                    <a href="" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#SubTugas">+</a>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @foreach ($taskGroups as $taskGroup)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-{{ $loop->iteration }}" aria-expanded="false"
                                        aria-controls="panelsStayOpen-{{ $loop->iteration }}">
                                        {{ $taskGroup->task_group_name }}
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-{{ $loop->iteration }}" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <ol>
                                            @if ($taskGroup->subTasks->isEmpty())
                                                <p style="color: gray">Belum Ada Tugas</p>
                                            @endif
                                            @foreach ($taskGroup->subTasks as $subTask)
                                                <div class="d-flex justify-content-between">
                                                    <li class="fw-bold" style="color: black">{{ $subTask->task_name }}</li>
                                                    <div class="control">
                                                        <a href="{{ route('task.show', $subTask->id) }}"
                                                            class="text-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="" class="text-secondary"><i class="fa-solid fa-trash-can"></i></a>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <ol style="color: gray">{{ $subTask->task_description }}</ol>
                                                    <ol class="text-danger">{{ $subTask->task_due }}</ol>
                                                </div>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="d-flex align-items-center justify-content-between card-header">
                    <h5 class="p-0 m-0">Nama Tugas</h5>
                    <a href="" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#Tugas">+</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            @foreach ($taskGroups as $item)
                                <tr>
                                    <td>{{ $item->task_group_name }}</td>
                                    <td class="text-end">
                                        <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5>aijwiaj </h5>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="Tugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Tugas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('task-group.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Tugas</label>
                            <input type="text" class="form-control" name="task_group_name"
                                placeholder="INISIALISASI DAY - 1">
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Save changes">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="SubTugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Tugas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('task.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Group</label>
                            <select name="task_group_id" id="task_group_id" class="form-select">
                                <option value="">Pilih</option>
                                @foreach ($taskGroups as $item)
                                    <option value="{{ $item->id }}">{{ $item->task_group_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama Tugas</label>
                            <input type="text" class="form-control" name="task_name"
                                placeholder="membawa snack minuman">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Deskripsi</label>
                            <input type="text" class="form-control" name="task_description"
                                placeholder="aawidjawidjaiwjiajdiajwi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Batas Pengumpulan</label>
                            <input type="datetime-local" class="form-control" name="task_due"
                                placeholder="INISIALISASI Day 4">
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

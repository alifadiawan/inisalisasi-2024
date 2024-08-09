@extends('layout.main')
@section('page-heading', 'Penugasan | Task Manager')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card px-3 py-3">
                <livewire:Task-table theme="bootstrap-5" />
            </div>
        </div>
    </div>

    <!-- Images Modal -->
    @foreach ($images as $item)
        <div class="modal fade" id="exampleModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        {{-- @if ($item == '.jpg')
                            <img src="{{ asset('path/to/your/image.jpg') }}" alt="Image description">
                        @elseif ($fileType === 'video')
                            <video width="320" height="240" controls>
                                <source src="{{ asset('path/to/your/video.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @else
                            <p>File type not supported.</p>
                        @endif --}}
                        <img src="{{ asset('tugas/' . $item) }}" alt="{{ $item }}" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

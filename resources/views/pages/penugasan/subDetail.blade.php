<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>{{ $subTask->task_name }}</title>
    @include('pages.penugasan.layout.css2')
</head>

<body>
    <div class="header">
        <button class="btn-back" onclick="window.history.back()">
            <i class="bi bi-arrow-left"></i>
        </button>
        <h1>Penugasan {{ Request::segment(3) }}</h1>
    </div>
    <div class="container mt-4">
        <div data-v-373b54c8=""
            class="col-12 d-flex justify-content-between align-items-center gap-3 flex-wrap flex-sm-nowrap mb-0">
            <h2 data-v-373b54c8="" class="font-semibold text-limit limit-1 ">
                {{ $subTask->task_name }}
            </h2>
        </div>
        <div class="forum-card accordion card-body">

            {!! $subTask->task_description !!}


                <h2>Pengumpulan Tugas</h2>
                <p>Tugas paling lambat dikumpulkan pada <span
                        class="highlight">{{ \Carbon\Carbon::parse($subTask->task_due)->format('l, d F Y, h:i A') }}</span>
                </p>
                @if (!$uploadedFiles->isEmpty())
                    <div class="alert alert-primary">
                        <p class="text-center">Sudah Mengumpulkan</p>
                    </div>
                @elseif ($subTask->isLinks == 'on')
                    <form action="{{ route('upload.link', $subTask->id) }}" method="post">
                        @csrf
                        <input type="text" name="isLinks" class="form-control" placeholder="www.linktugasanda.com">
                        <input type="submit" class="btn btn-sm btn-success mt-3" value="Upload">
                    </form>
                @else
                    <div class="form-group">
                        <input type="file" id="content" class="form-control">
                        <div class="progress" id="progress" role="progressbar" aria-label="Basic example"
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" id="progress-bar" style="width: 0%; display: none;"></div>
                        </div>
                    </div>
                @endif
        </div>
        <div class="footer">
            &copy; 2024 INISIALISASI - D4 Teknik Informatika
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/resumablejs@1.1.0/resumable.min.js"></script>
    <script type="text/javascript">
        // input file id
        let content = $('#content');

        // progress bar id
        let progress = $('#progress-bar');

        // resumable inisialitation
        let resumable = new Resumable({
            target: '{{ route('file.upload', $subTask->id) }}', // Upload files url
            query: {
                _token: '{{ csrf_token() }}'
            },
            fileType: ['mp4', 'jpg', 'png', 'jpeg'],
            headers: {
                'Accept': 'application/json'
            },
            testChunks: false,
            throttleProgressCallbacks: 1,
        });

        resumable.assignBrowse(content[0]);

        resumable.on('fileAdded', function(file) { // file sudah dipilih
            ShowProgress();
            resumable.upload();
        });
        resumable.on('fileProgress', function(file) { // update progress upload file
            updateProgress(Math.floor(file.progress() * 100));
        });
        resumable.on('fileSuccess', function(file) { // file sudah terupload
            location.reload();
        });
        resumable.on('fileError', function(file) { // error ketika upload
            alert('error while uploading file')
        });

        function ShowProgress() {
            progress.css('width', '0%').html('0%').show();
        }

        function updateProgress(value) {
            progress.css('width', value + '%').html(value + '%');
        }

        function hideProgress() {
            progress.hide();
        }
    </script>
</body>

</html>

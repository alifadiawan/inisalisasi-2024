<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Essay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            border: 1px solid #e9ecef!important;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            border-radius: .375rem;
            background-color: #fff;
            background-clip: border-box;
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #6c63ff;
            color: white;
            padding: 20px;
            text-align: center;
            text-align: center;
            margin-bottom: 20px;
        }
        .accordion {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .card-body {
            padding: 1.5rem;
            flex: 1 1 auto;
        }
        h2 {
            color: #2980b9;
            margin-bottom: 20px;
            border-bottom: 2px solid #2980b9;
            padding-bottom: 10px;
        }
        p, ul {
            margin-bottom: 20px;
        }
        ul {
            list-style: disc;
            margin-left: 20px;
        }
        ul li {
            margin-bottom: 10px;
        }
        .highlight {
            color: #e74c3c;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
        }
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4025d9;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Penugasan</h1>
    </div>
    <div class="container mt-4">
        <div data-v-373b54c8="" class="col-12 d-flex justify-content-between align-items-center gap-3 flex-wrap flex-sm-nowrap mb-0"><h2 data-v-373b54c8="" class="font-semibold text-limit limit-1 ">
            Essay
        </h2>
        </div>
        <div class="forum-card accordion card-body">
        <h2>Ketentuan:</h2>
        <ul>
            <li>Mahasiswa baru wajib membuat esai yang berisi:
                <ul>
                    <li>Rangkuman FGD yang telah kalian lakukan.</li>
                    <li>Sudut pandang kalian mengenai persoalan FGD yang telah diangkat.</li>
                    <li>Pendapat tentang hasil FGD yang telah diputuskan.</li>
                </ul>
            </li>
            <li>Esai ditulis menggunakan font <span class="highlight">Times New Roman</span> ukuran 12, margin 3,3,3,3, dan rata kanan kiri.</li>
            <li>Minimal <span class="highlight">700 kata</span>.</li>
            <li>Esai tidak boleh copy paste dari sumber manapun ataupun mencontek milik teman.</li>
        </ul>

        <h2>Pengumpulan:</h2>
        <p>Esai dikumpulkan dalam bentuk PDF dengan format nama: <span class="highlight">NAMAKELOMPOK_3digitNIMterakhir_Nama_Essay.pdf</span></p>
        <p>Tugas paling lambat dikumpulkan pada <span class="highlight">...</span></p>
        <div class="container mt-5">
            <h2 class="text-center">Upload File</h2>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
                <div class="alert alert-info">
                    <strong>Uploaded File:</strong> {{ Session::get('file') }}
                </div>
            @endif
            <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="file" class="form-label">Choose File</label>
                    <input class="form-control" type="file" id="file" name="file" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
        <div class="footer">
            &copy; 2024 INISIALISASI - D4 Teknik Informatika
        </div>
        </div>
    </div>
</body>
</html>
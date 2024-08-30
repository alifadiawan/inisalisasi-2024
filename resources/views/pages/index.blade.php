<!-- /*
* Template Name: Financing
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="inis/images/logoangkatan.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('home/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('home/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('home/css/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{ asset('home/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('home/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('home/css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('home/css/flatpickr.min.css')}}">

    <link rel="stylesheet" href="{{ asset('inis/css/app.css')}}">


    <title>Inisalisasi 2024</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 justify-content-between align-items-center">
                        <div class="col-lg-3 col-8">
                            <a href="/" class="logo m-0 float-start">INISIALISASI 2024<span
                                    class="text-primary">.</span></a>
                        </div>
                        <div class="col-lg-9 col-4 text-end ">
                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="#tatatertib">Tata Tertib</a></li>
                                <li><a href="/berita-&-Pengumuman">Berita & Pengumuman</a></li>
                                @auth
                                    <li><a href="/penugasan/index">Penugasan</a></li>
                                @endauth
                                @auth
                                    @if (Auth::user()->isAdmin === 1)
                                        <li><a href="/dashboard">Dashboard Admin</a></li>
                                    @endif
                                @endauth
                                @if (!Auth::check())
                                    <li><a href="/login">Login</a></li>
                                @else
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <input type="submit" class="" value="Logout" class="btn btn-sm">
                                        </form>
                                    </li>
                                @endif
                            </ul>
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="hero overlay">
        <img src="home/images/blob.svg" alt="" class="img-fluid blob">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5">
                <div class="col-lg-6 text-center text-lg-start pe-lg-5">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">INISIALISASI 2024</h1>
                    <p class="text-white mb-5" data-aos="fade-up" data-aos-delay="100">Situs resmi kegiatan INISIALISASI
                        Mahasiswa Baru D4 Teknik Informatika Angkatan 2024.</p>
                    <div class="align-items-center mb-5 mm text-center text-lg-start" data-aos="fade-up"
                        data-aos-delay="200">
                        <a href="#about" class="btn btn-outline-white-reverse me-4">Apa itu INISIALISASI ?</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="img-wrap">
                        <img src="inis/images/logokertas.png" alt="Image" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="about">
        <div class="container">
            <div class="row mb-5">
                <div class="d-flex gap-2 justify-content-center">
                    <h2 class="heading">Apa itu</h2>
                    <h2 class="heading text-primary mb-3" data-aos="fade-up" data-aos-delay="0">INISIALISASI ?</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-start">
                <div class="col-lg-7 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="inis/images/fotbar-2.jpg" class="d-block w-100"
                                    alt="foto-inis">
                            </div>
                            <div class="carousel-item">
                                <img src="inis/images/IMG_7779.jpg}" class="d-block w-100"
                                    alt="foto-inis">
                            </div>
                            <div class="carousel-item">
                                <img src="inis/images/IMG_8923.jpg" class="d-block w-100"
                                    alt="foto-inis">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 ps-lg-2" data-aos="fade-left" data-aos-delay="500">
                    <div class="mb-5">
                        <h2 class="text-black h4"><strong>INISIALISASI</strong></h2>
                        <p>merupakan serangkaian
                            kegiatan yang rutin diselenggarakan setiap tahunnya oleh Himpunan Mahasiswa Teknik
                            Informatika (HIMTI) Universitas Airlangga yang bertujuan untuk memberikan bekal awal kepada
                            Mahasiswa Baru D4 Teknik Informatika baik dalam hal akademik dan non-akademik.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="section sec-features" id="tatatertib">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature d-flex gap-2 justify-content-center">
                        <h2 class="heading text-white mb-3">Peraturan INISIALISASI 2024</h2>
                    </div>
                    <div class="feature d-flex justify-text">
                        <ul class="mb-4 text-white ul-1">
                            <li class="li-1">1. Peserta wajib datang ke tempat 30 menit sebelum acara dimulai</li>
                            <li class="li-1">2. Peserta wajib memakai seragam sesuai ketentuan</li>
                            <li class="li-1">3. Peserta wajib memakai atribut dan id card sesuai ketentuan</li>
                            <li class="li-1">4. Peserta yang tidak memakai seragam dan atribut sesuai ketentuan akan
                                dikenakan pengurangan poin</li>
                            <li class="li-1">5. Peserta yang terlambat hadir akan dikenakan pengurangan poin sesuai
                                ketentuan dan hukuman yang berlaku</li>
                            <li class="li-1">6. Peserta wajib untuk mengikuti semua kegiatan inisialisasi yang telah
                                ditentukan</li>
                            <li class="li-1">7. Kedatangan 80% dari setiap kelompok, jika kedatangan anggota kelompok
                                tidak mencapai 80% maka akan dikenakan pengurangan poin kecuali bagi mahasiswa yang
                                sudah izin ke kakak asuh bahwa tidak bisa mengikuti inisialisasi</li>
                            <li class="li-1">8. Peserta dilarang membawa senjata tajam dan senjata api</li>
                            <li class="li-1">9. Peserta dilarang membawa rokok, miras, vape beserta liquid nya, serta
                                obat-obatan terlarang lainnya</li>
                            <li class="li-1">10. Peserta dilarang memakai aksesoris dan make up yang berlebihan</li>
                            <li class="li-1">11. Peserta tidak diperbolehkan meninggalkan kegiatan yang sedang
                                berlangsung tanpa seizin panitia/kakak asuh</li>
                            <li class="li-1">12. Pada saat waktu menyanyikan lagu Indonesia Raya dan Hymne Airlangga
                                peserta dimohon wajib berdiri dengan sikap sempurna serta menampakkan seragam yang
                                dikenakan dan meletakkan tangan kanan di bagian dada sebelah kiri</li>
                            <li class="li-1">13. Peserta wajib untuk memperhatikan dan mencatat seluruh materi yang
                                disampaikan selama kegiatan berlangsung di booklet yang sudah ditentukan</li>
                            <li class="li-1">14. Peserta wajib menjaga kekondusifan selama materi berlangsung saat
                                pemateri menyampaikan materi. Tidak diperkenankan untuk membahas hal yang diluar topik.
                                Saat ingin bertanya, peserta diwajibkan meminta izin kepada pemateri dengan angkat
                                tangan terlebih dahulu dan setelah diizinkan peserta diperbolehkan bertanya</li>
                            <li class="li-1">15. Peserta diperbolehkan ke kamar mandi di sela-sela rangkaian kegiatan
                                dengan meminta izin terlebih dahulu kepada panitia/kakak asuh, apabila sudah diizinkan
                                peserta diperbolehkan ke kamar mandi</li>
                            <li class="li-1">16. Peserta diwajibkan untuk menyelesaikan penugasan yang telah
                                diberikan sesuai waktu yang telah ditentukan. Apabila terlambat / tidak menyelesaikan
                                penugasan, maka akan dikenakan pengurangan poin</li>
                            <li class="li-1">17. Untuk mahasiswa baru yang berhalangan dan tidak bisa mengikuti
                                rangkaian kegiatan diharapkan izin 3 - 4 hari sebelum acara dimulai kepada kakak asuh
                                dengan menyertakan alasannya</li>
                            <li class="li-1">18. Untuk mahasiswa baru yang sakit pada saat sebelum / saat acara
                                INISIALISASI 2024 berlangsung, dihimbau untuk segera izin kepada kakak asuh. Apabila
                                tidak menghubungi kakak asuh, maka akan dianggap tidak hadi</li>
                            <li class="li-1">19. Peserta wajib menjaga barang pribadinya, jika terdapat kehilangan
                                bukan termasuk tanggung jawab panitia</li>
                            <li class="li-1">20. Peserta dianjurkan membawa obat-obatan pribadi (apabila membutuhkan)
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- <div class="section sec-portfolio bg-light pb-5	" id="about">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center ">
                    <div class="d-flex gap-2 justify-content-center">
                        <h2 class="heading">Apa itu</h2>
                        <h2 class="heading text-primary mb-3" data-aos="fade-up" data-aos-delay="0">INISIALISASI ?</h2>
                    </div>
                    <p class="mb-4" data-aos="fade-up" data-aos-delay="100">INISIALISASI merupakan serangkaian
                        kegiatan yang rutin diselenggarakan setiap tahunnya oleh Himpunan Mahasiswa Teknik
                        Informatika (HIMTI) Universitas Airlangga yang bertujuan untuk memberikan bekal awal kepada
                        Mahasiswa Baru D4 Teknik Informatika baik dalam hal akademik dan non-akademik.</p>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="section sec-testimonial bg-light">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="d-flex gap-2 text-center">
                    <h2 class="heading text-primary" data-aos="fade-up" data-aos-delay="0">Peraturan Berpakaian
                        INISIALISASI 2024</h2>
                </div>
            </div>

            <div class="testimonial-slider-wrap">
                <div class="testimonial-slider" id="testimonial-slider">
                    <div class="item">
                        <div class="testimonial-half d-lg-flex bg-white">
                            <div class="img" style="background-image: url('home/images/img-1.jpg')">

                            </div>
                            <div class="text justify-text">
                                <blockquote>
                                    <p>
                                    <h3>Mahasiswa Baru Putra :</h3>
                                    1. Memakai kemeja putih (rapi, tidak ketat, dan tidak transparan).<br>
                                    2. Memakai celana kain panjang warna hitam (bukan jeans atau chino,rapi, tidak
                                    ketat, tidak transparan, tidak bermotif, bukan cutbray atau skinny).<br>
                                    3. Memakai ikat pinggang berwarna hitam<br>
                                    4. Rambut rapi dan tidak boleh dicat/diwarnai, apabila rambut panjang harap dikuncir
                                    rapi.<br>
                                    5. Memakai ID CARD<br>
                                    6. Memakai kaos kaki berwarna putih<br>
                                    7. Memakai sepatu bebas berwarna hitam<br>
                                    </p>
                                </blockquote>
                                {{-- <div class="author">
                                    <strong class="d-block text-black">John Campbell</strong>
                                    <span>CEO & Co-founder</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial-half d-lg-flex bg-white">
                            <div class="img" style="background-image: url('home/images/img-2.jpg')">

                            </div>
                            <div class="text justify-text">
                                <blockquote>
                                    <p>
                                    <h3>Mahasiswa Baru Putri Berkerudung:</h3>
                                    1. Memakai kemeja putih (rapi, tidak ketat, dan tidak transparan).<br>
                                    2. Memakai rok panjang kain warna hitam model wiru/rample (rapi, tidak ketat, tidak
                                    transparan, tidak bermotif, tanpa belahan)<br>
                                    3. Memakai kerudung warna hitam segiempat simetris (tidak transparan, tidak
                                    bermotif, tidak berenda, tanpa aksesoris tambahan kecuali peniti ataupun jarum
                                    pentul).<br>
                                    4. Memakai ID CARD<br>
                                    5. Memakai ikat pinggang berwarna hitam<br>
                                    6. Memakai kaos kaki berwarna putih<br>
                                    7. Memakai sepatu bebas berwarna hitam<br>
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial-half d-lg-flex bg-white">
                            <div class="img" style="background-image: url('home/images/img-3.jpg')">

                            </div>
                            <div class="text justify-text">
                                <blockquote>
                                    <p>
                                    <h3>Mahasiswa Baru Putri :</h3>
                                    1. Memakai kemeja putih (rapi, tidak ketat, dan tidak transparan).<br>
                                    2. Memakai rok panjang kain warna hitam model wiru/rample (rapi, tidak ketat, tidak
                                    transparan, tidak bermotif, tanpa belahan)<br>
                                    3. Rambut dikuncir rapi dan tidak boleh dicat/diwarnai.<br>
                                    4. Memakai ID CARD<br>
                                    5. Memakai ikat pinggang berwarna hitam<br>
                                    6. Memakai kaos kaki berwarna putih<br>
                                    7. Memakai sepatu bebas berwarna hitam<br></p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-cta overlay" style="background-image: url('inis/images/fotbar-2.jpg')">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature d-flex gap-2 justify-content-center">
                        <h2 class="heading text-white mb-3">Ketentuan Point INISIALISASI 2024</h2>
                    </div>
                    <div class="feature d-flex gap-2 justify-content-center justify-text text-white">
                        <ul class="ul-2">
                            <li>Setiap bentuk pelanggaran akan dikenakan pengurangan poin dengan rincian sebagai
                                berikut: Terlambat mengikuti akan dikenakan pengurangan sebagai berikut :
                                <ul class="ul-3">
                                    <li class="li-1">Apabila terlambat 5 - 15 menit dari dimulainya acara maka akan
                                        dikenakan pengurangan sebesar 5 poin.</li>
                                    <li class="li-1">Apabila terlambat lebih dari 15 menit dari dimulainya acara,
                                        maka akan dikenakan pengurangan sebesar 10 poin.</li>
                                    <li class="li-1">Apabila telat mengumpulkan resume lebih dari 15 menit dari waktu
                                        yang ditentukan maka akan dikenakan pengurangan sebesar 5 poin.</li>
                                    <li class="li-1">Apabila tidak mengumpulkan resume maka akan dikenakan
                                        pengurangan sebesar 10 poin.</li>
                                </ul>
                            </li>
                            <li>Setiap bentuk pelanggaran selama acara INISIALISASI 2024 berlangsung akan dikenakan
                                pengurangan poin dengan rincian sebagai berikut:
                                <ul class="ul-3">
                                    <li class="li-1">Apabila seragam dan atribut tidak sesuai dengan ketentuan maka
                                        akan dikenakan pengurangan poin sebesar 100 poin.</li>
                                    <li class="li-1">Apabila Mahasiswa Baru terdeteksi membawa barang-barang yang
                                        dilarang seperti senjata tajam, senjata api, rokok, vape beserta liquidnya,
                                        miras, dan obat-obatan terlarang, maka akan dikenakan pengurangan sebesar 500
                                        point.</li>
                                    <li class="li-1">Apabila Mahasiswa Baru terdeteksi melakukan joki dalam
                                        mengerjakan tugas atau melakukan kecurangan yang serupa maka tidak akan
                                        mendapatkan poin penugasan.</li>
                                    <li class="li-1">Mahasiswa baru diwajibkan untuk mengumpulkan minimal 3000 poin
                                        agar dapat lulus dan dikukuhkan.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                        <h4>Instagram Inisialisasi</h4>
                        <ul class="list-unstyled social">
                            <li><a href="https://www.instagram.com/inisialisasi2024/" target="_blank"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-4 -->
            </div> <!-- /.row -->

            <div class="row mt-5">
                <div class="col-12 text-center">
                    &copy; 2024 INISIALISASI - D4 Teknik Informatika
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


    <script src="home/js/bootstrap.bundle.min.js"></script>
    <script src="home/js/tiny-slider.js"></script>

    <script src="home/js/flatpickr.min.js"></script>


    <script src="home/js/aos.js"></script>
    <script src="home/js/glightbox.min.js"></script>
    <script src="home/js/navbar.js"></script>
    <script src="home/js/counter.js"></script>
    <script src="home/js/custom.js"></script>
</body>

</html>

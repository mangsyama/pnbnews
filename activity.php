<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNBNews - Berita Kegiatan Mahasiswa</title>
    <link rel="shortcut icon" href="img/pnb.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="./pagecopy.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
        <div class="container nav-container">
            <a class="navbar-brand" href="#"><img src="logo2.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item"><a class="nav-link" href="./index.php">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Berita Kampus <i class="dropdown-toggle" width="20px"></i></a>
                        <ul class="dropdown-menu" data-aos="fade-down">
                            <li><a class="dropdown-item" href="./academicnews.php">Akademik</a></li>
                            <li><a class="dropdown-item" href="./noacademicnews.php">Non - Akademik</a></li>
                            <li><a class="dropdown-item" href="./activity.php">Mahasiswa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="./event.php">Event Kampus</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="./about.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a href="./login.php" target="_blank" class="btn btn-primary" id="login-admin">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   <!-- Offcanvas Menu -->
   <div class="offcanvas offcanvas-start custom-offcanvas" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasMenuLabel">PNB News</h5>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body custom-offcanvas-body">
            <ul class="navbar-nav custom-navbar-nav">
                <li class="nav-item custom-item-nav" data-aos="fade-right"><a class="custom-link-nav" href="./index.php">Beranda</a></li>
                <li class="nav-item custom-item-nav dropdown custom-dropdown" data-aos="fade-right">
                    <a class="custom-link-nav dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Berita Kampus</a>
                    <ul class="custom-dropdown-menu">
                        <li><a class="custom-dropdown-item" href="./academicnews.php">Akademik</a></li>
                        <li><a class="custom-dropdown-item" href="./noacademicnews.php">Non - Akademik</a></li>
                        <li><a class="custom-dropdown-item" href="./activity.php">Mahasiswa</a></li>
                    </ul>
                </li>
                <li class="nav-item custom-item-nav" data-aos="fade-right"><a class="custom-link-nav" href="./event.php">Event Kampus</a></li>
                <li class="nav-item custom-item-nav" data-aos="fade-right">
                    <a class="custom-link-nav" href="./about.php">Tentang Kampus</a>
                </li>
                <li class="nav-item custom-item-nav" data-aos="fade-right">
                    <a href="./login.php" target="_blank" class="btn btn-primary custom-btn-primary" id="login-offcanvas">Login</a>
                </li>
            </ul>
        </div>
    </div>

    <br/><br/>
    <!-- Berita Mahasiswa -->
    <section id="berita-terkini" class="container mt-5" data-aos="fade-up">
        <h2 class="section-title">Berita Mahasiswa</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./img/BeritaMahasiswa/berita1.jpg" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:10px;" >Mahasiswa</button>
                        <h5 class="card-title">MENEGUHKAN NILAI TRI KAYA PARISUDHA: RISET TIM PKM RSH POLITEKNIK NEGERI BALI SEBAGAI UPAYA MENGIKIS PANDANGAN NEGATIF TERHADAP MAHASISWA AKUNTANSI</h5>
                                <i class="fa-solid fa-calendar-days"></i> 12/07/2024
                                <i style="margin-left:20px;" class="fa-solid fa-user" ></i> Admin
                                <i style="margin-left:20px;" class="fa-solid fa-comment"></i> Comments Off
                                <br><br>
                        <p class="card-text">Pandangan mengkhawatirkan tentang generasi muda saat ini semakin meramaikan percakapan di masyarakat. Keraguan muncul karena maraknya budaya instan dan kemudahan teknologi di kalangan mahasiswa.</p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./img/BeritaMahasiswa/berita2.png" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:10px;" >Mahasiswa</button>
                        <h5 class="card-title">SEBANYAK 2067 CAMABA MENGIKUTI PKKMB: MEMULAI PENGENALAN KEHIDUPAN KAMPUS DENGAN LATIHAN DASAR KEDISIPLINAN YANG PENUH SEMANGAT</h5>
                                <i class="fa-solid fa-calendar-days"></i> 26/08/2023
                                <i style="margin-left:20px;" class="fa-solid fa-user" ></i> Admin
                                <i style="margin-left:20px;" class="fa-solid fa-comment"></i> Comments Off
                                <br><br>
                        <p class="card-text">Pada hari pertama Sabtu 26 Agustus 2023, Pengenalan Kehidupan Kampus Bagi  Mahasiswa Baru (PKKMB XXXIV), suasananya dipenuhi semangat dan antusiasme peserta di GOR Kesatrian Rakcaka KODAM IX/Udayana.</p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./img/BeritaMahasiswa/berita3.png" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:10px;" >Mahasiswa</button>
                        <h5 class="card-title">MAHASISWA PRODI BISNIS DIGITAL PNB RAIH PRESTASI NASIONAL DALAM AJANG FOTOGRAFI</h5>
                                <i class="fa-solid fa-calendar-days"></i> 01/01/2023
                                <i style="margin-left:20px;" class="fa-solid fa-user" ></i> Admin
                                <i style="margin-left:20px;" class="fa-solid fa-comment"></i> Comments Off
                                <br><br>
                        <p class="card-text">Prestasi demi prestasi diraih Civitas akademika Politeknik Negeri Bali, Prodi Sarjana Terapan Bisnis Digital. Salah satu mahasiswa kelas 4A Prodi Bisnis Digital, I Kadek Adi Mahendra Putra berhasil mendapatkan Juara 1 Nasional Fotografi Jurnalistik dalam kegiatan National Visi Journalistic Competition</p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./img/BeritaMahasiswa/berita4.png" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:10px;" >Mahasiswa</button>
                        <h5 class="card-title">MAHASISWA PNB MEMBANGUN DESA</h5>
                                <i class="fa-solid fa-calendar-days"></i> 01/01/2022
                                <i style="margin-left:20px;" class="fa-solid fa-user" ></i> Admin
                                <i style="margin-left:20px;" class="fa-solid fa-comment"></i> Comments Off
                                <br><br>
                        <p class="card-text">Bukan “generasi gadget”dan tak hanya ”duduk manis” di bangku kuliah, mahasiswa Politeknik Negeri Bali juga harus bergerak untuk meningkatkan kapasitas diri agar bermanfaat bagi sesama.</p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./img/BeritaMahasiswa/berita5.png" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:10px;" >Mahasiswa</button>
                        <h5 class="card-title">MAHASISWA POLITEKNIK NEGERI BALI JUARA DUA (II) PUTRA PUTRI KAMPUS AJEG BALI 2022</h5>
                                <i class="fa-solid fa-calendar-days"></i> 01/01/2022
                                <i style="margin-left:20px;" class="fa-solid fa-user" ></i> Admin
                                <i style="margin-left:20px;" class="fa-solid fa-comment"></i> Comments Off
                                <br><br>
                        <p class="card-text">Mahasiswa Jurusan Administrasi Niaga Prodi D III Administrasi Bisnis Politeknik Negeri Bali, I Kadek Riko Antara meraih (Juara II)</p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./img/BeritaMahasiswa/berita7.png" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:10px;" >Mahasiswa</button>
                        <h5 class="card-title">51 MAHASISWA BERPRESTASI PNB MENDAPATKAN PENGHARGAAN/APRESIASI</h5>
                                <i class="fa-solid fa-calendar-days"></i> 01/01/2021
                                <i style="margin-left:20px;" class="fa-solid fa-user" ></i> Admin
                                <i style="margin-left:20px;" class="fa-solid fa-comment"></i> Comments Off
                                <br><br>
                        <p class="card-text">51 mahasiswa PNB yang mendapatkan penghargaan merupakan mahasiswa Politeknik Negeri Bali (PNB) yang berhasil</p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br/><br/><br/>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white">
        <div class="container p-4">
            <div class="row">
                <!-- Quick Link -->
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h5>Quick Link</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.php" class="text-white">Beranda</a></li>
                        <li><a href="./academicnews.php" class="text-white">Berita Kampus</a></li>
                        <li><a href="./event.php" class="text-white">Event Kampus</a></li>
                        <li><a href="./login.php" class="text-white">Login</a></li>
                    </ul>
                </div>
                <!-- Politeknik Negeri Bali -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Portal PNB News</h5>
                    <p>
                        Uluwatu St No.45, Jimbaran, South Kuta,<br>
                        Badung Regency, Bali 80361<br>
                        <i class="fas fa-phone"></i> +62 (0361)701981<br>
                        <i class="fas fa-envelope"></i> poltek@pnb.ac.id
                    </p>
                </div>
                <!-- Follow Us -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Follow Us</h5>
                    <div class="social-icons">
                        <a href="https://web.facebook.com/PoltekBali" class="text-white" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/politeknik_negeri_bali/" class="text-white" target="_blank" ><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/school/politeknik-negeri-bali/" class="text-white" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- Google Maps -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.865570572184!2d115.15991207556634!3d-8.798697991253734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244c13ee9d753%3A0x6c05042449b50f81!2sPoliteknik%20Negeri%20Bali!5e0!3m2!1sid!2sid!4v1720873274473!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 All rights reserved by <b>Kelompok 4 Desain Web 2C MI</b>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <script src="./js/landingpage.js"></script>
</body>
</html>

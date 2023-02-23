<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style-berandaWeb.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>RTC Dojang 88</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="berandaWeb.php">
                <img class="logo-beranda" src="img/logoDojang88.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end menu-utama" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kelas-latihan">Kelas Latihan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#FAQ">FAQ</a>
                    </li>
                </ul>
          </div>
        </div>
    </nav>
    <section class="banner d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-white">
                        Join Bersama Kami<br>
                        Di RTC Dojang 88
                    </h1>
                    <p class="text-white">
                    </p>
                    <a href="formPendaftaran.php">
                        <button type="button" class="btn btn-primary btn-lg">Mulai Daftar!</button>
                    </a>
                    <a href="#tentang">
                        <button type="button" class="btn btn-outline-light btn-lg rounded-1">Tentang</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="tentang" id="tentang">
        <div class="container text-center">
            <h1>Tentang RTC Dojang 88</h1>
            <div class="row">
                <center>
                    <img class="logo-tentang-rtc" src="img/logo-rtc.png" alt="">
                    <img class="logo-tentang" src="img/logoDojang88.png" alt="">
                </center>
            </div>
            <p>Revolution Taekwondo Club (RTC) Dojang 88 merupakan unit latihan beladiri 
                Taekwondo yang berdiri pada tanggal 1 November 2020 serta berlokasi di 
                Jalan Pondok Kelapa Barat Blok B8 No. 8, Jakarta Timur. 
            </p>
            <p>
                Dojang ini, memiliki 4 (empat) kelas latihan yaitu kelas Reguler Anak, 
                Reguler Remaja & Dewasa, Prestasi, dan Private. Selain itu, unit ini memiliki 3 (tiga) 
                orang pelatih yang telah berpengalaman serta berprestasi dibidangnya. Dengan hadirnya
                Dojang ini, dapat memberikan wadah untuk berlatih Taekwondo serta mencetak 
                atlet - atlet yang berprestasi yang dilatih oleh para pelatih kami.
            </p>
        </div>
    </section>
    <section class="kelas-latihan" id="kelas-latihan">
        <div class="container">
            <div class="text-center">
                <h1>Kelas Latihan</h1>
                <p>Kelas dan jadwal latihan yang tersedia di RTC Dojang 88</p>
            </div>
            <div class="row py-5">
                <div class="col-md-6 macam-kelas-latihan">
                    <div class="kelas-reguler-anak">
                        <h4>Kelas Reguler Anak</h4>
                        <h5>Jadwal Latihan</h5>
                        <ul>
                            <li>Selasa (16.00 - 17.30)</li>
                            <li>Kamis (16.00 - 17.30)</li>
                            <li>Minggu (09.30 - 11.00)</li>
                        </ul>
                    </div>
                    <div class="kelas-reguler-remaja">
                        <h4>Kelas Reguler Remaja & Dewasa</h4>
                        <h5>Jadwal Latihan</h5>
                        <ul>
                            <li>Rabu (18.45 - 21.00)</li>
                            <li>Kamis (09.30 - 11.30)</li>
                        </ul>
                    </div>
                    <div class="kelas-prestasi">
                        <h4>Kelas Prestasi*</h4>
                        <h5>Jadwal Latihan</h5>
                        <ul>
                            <li>Rabu (18.45 - 21.00)</li>
                            <li>Kamis (18.45 - 21.00)</li>
                            <li>Jumat (18.45 - 21.00)</li>
                            <li>Minggu (07.30 - 09.30)</li>
                        </ul>
                        <p>* (Syarat & Ketentuan Berlaku)</p>
                    </div>
                    <div class="kelas-private">
                        <h4>Kelas Private</h4>
                    </div>
                </div>
                <div class="col-md-6 gambar-kelas-latihan">
                    <img src="img/gambar-taekwondo.png" class="img-fluid gambar-kelas-latihan" alt="image">
                </div>
            </div>
        </div>
    </section>

    <section class="FAQ" id="FAQ">
        <div class="container">
            <div class="text-center">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row">
                <div class="col-md-6 accordion-faq1">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-heading_1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_1" aria-expanded="false" aria-controls="flush-collapse_1">
                                <b>Mulai dari umur berapa belajar beladiri Taekwondo?</b>
                            </button>
                          </h2>
                          <div id="flush-collapse_1" class="accordion-collapse collapse" aria-labelledby="flush-heading_1" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    Untuk kelas Reguler, umur minimum yang ideal adalah 5 tahun. Terbuka untuk umur dibawah 5 tahun dengan kemampuan 
                                    komunikasi yang sudah cukup baik dengan lingkungan yang ada.
                                </p>
                                <p>
                                    Lalu, umur yang ideal untuk masuk kelas Remaja & Dewasa dan kelas Prestasi adalah 13 tahun. Selebihnya tidak ditentukan,
                                    selama sehat jasmani dan rohani, tentunya bisa bergabung dengan Taekwondo. 
                                </p>                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-heading_2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_2" aria-expanded="false" aria-controls="flush-collapse_2">
                                <b>Berapa biayanya?</b>
                            </button>
                          </h2>
                          <div id="flush-collapse_2" class="accordion-collapse collapse" aria-labelledby="flush-heading_2" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Untuk total biaya sebesar <b>Rp400.000</b> (sudah termasuk biaya pendaftaran dan biaya iuran bulan pertama). 
                                Selain itu, untuk iuran bulanan (dibayar di bulan kedua dan seterusnya) sebesar <b>Rp200.000</b>/bulan.
                                <br>
                                <p class="py-2">Total biaya di atas belum termasuk seragam dobok (bisa beli di luar atau pesan kepada kami di Dojang).</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-heading_3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_3" aria-expanded="false" aria-controls="flush-collapse_3">
                                <b>Apakah ada Free Trial/coba gratis?</b>
                            </button>
                          </h2>
                          <div id="flush-collapse_3" class="accordion-collapse collapse" aria-labelledby="flush-heading_3" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Setiap calon member yang ingin bergabung, dipersilahkan mengikut free trial di waktu dan tempat latihan berlangsung dengan kesempatan 1 (satu) kali. 
                                Untuk latihannya bisa menggunakan pakaian yang nyaman untuk berolahraga. 
                                Setelah mencoba ikut latihan, bisa mendaftarkan diri di admin kami yang sedang bertugas atau melalui website ini.
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 accordion-faq2">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-heading_4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_4" aria-expanded="false" aria-controls="flush-collapse_4">
                                <b>Saya pernah ikut Taekwondo sebelumnya, apakah bisa lanjut?</b>
                            </button>
                          </h2>
                          <div id="flush-collapse_4" class="accordion-collapse collapse" aria-labelledby="flush-heading_4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Bagi yang yang sudah punya pengalaman Taekwondo sebelumnya, dapat bergabung dengan membawa sertifikat ujian yang sudah pernah dilewati dan bisa langsung mengikuti latihan tanpa harus memulai lagi dari 
                                grade awal.
                        </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-heading_5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_5" aria-expanded="false" aria-controls="flush-collapse_5">
                                <b>Apa syarat mengikuti kelas prestasi Taekwondo?</b>
                            </button>
                          </h2>
                          <div id="flush-collapse_5" class="accordion-collapse collapse" aria-labelledby="flush-heading_5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Persyaratan:</p> 
                                <ol>
                                    <li>Memiliki keterampilan teknik dasar Taekwondo yang baik</li>
                                    <li>Pernah mengikuti turnamen baik internal maupun eksternal</li>
                                    <li>Memiliki motivasi yang tinggi untuk berprestasi & dukungan dari orang tua</li>
                                    <li>Bersedia mengikuti seluruh program dengan baik & maksimal</li>
                                </ol>                            
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading_6">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_6" aria-expanded="false" aria-controls="flush-collapse_6">
                                  <b>Untuk doboknya apakah diperbolehkan beli sendiri?</b>
                              </button>
                            </h2>
                            <div id="flush-collapse_6" class="accordion-collapse collapse" aria-labelledby="flush-heading_6" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                  Untuk doboknya diperbolehkan beli sendiri atau bisa beli langsung kepada kami dengan menghubungi pengurus atau pelatih yang berada di Dojang 88
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark p-5">
        <div class="container">
            <div class="row">
                <!-- Footer alamat Dojang 88 dan media sosial -->
                <div class="col-lg-4 mb-5 mb-lg-0 text-light">
                    <h4 class=" text-uppercase text-heading mb-3 fw-bold text-warning">RTC Dojang 88</h4>
                    <p>Jalan Pondok Kelapa Barat Blok B8 no 8, RT.007/RW.004, Kel. Pondok Kelapa, 
                        Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13450
                    </p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-icon" href="https://www.youtube.com/rtcdojang88/" title="Youtube"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-icon" href="https://www.instagram.com/rtc_dojang88" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-icon" href="https://www.facebook.com/rtcdojang88" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-icon" href="https://www.tiktok.com/@rtcdojang88" title="Tiktok"><i class="fa-brands fa-tiktok"></i></a>
                        </li>
                    </ul>
                    <p class="copywright">&copy <script>document.write(new Date().getFullYear())</script> RTC Dojang 88</p>
                </div>
                <!-- Footer About -->
                <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                    <h4 class="text-uppercase text-heading mb-3 text-warning fw-bold">About</h4>
                    <ul class="list-unstyled text-light">
                        <li><a class="text-para" href="berandaWeb.php">Home</a></li>
                        <li><a class="text-para" href="#tentang">Tentang</a></li>
                        <li><a class="text-para" href="#kelas-latihan">Kelas Latihan</a></li>
                        <li><a class="text-para" href="#FAQ">FAQ</a></li>
                    </ul>
                </div>
                <!-- Footer Program kelas yang ada di RTC Dojang 88 -->
                <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                    <h4 class="text-uppercase text-heading mb-3 text-warning fw-bold">kelas</h4>
                    <ul class="list-unstyled text-light">
                        <li>Reguler Anak</li>
                        <li>Remaja & Dewasa</li>
                        <li>Prestasi</li>
                        <li>Private</li>
                    </ul>
                </div>
                <!-- Footer Our Contact -->
                <div class="col-lg-2 col-md-8 mb-5 mb-lg-0">
                    <h4 class="text-uppercase text-heading mb-3 text-warning fw-bold">Contact Us</h4>
                    <div class="text-light">
                        <p>
                            <a class="text-icon" href="https://api.whatsapp.com/send/?phone=6281511000747&text=Halo%21+Saya+mau+bertanya+terkait+latihan+taekwondo+di+Dojang+88&type=phone_number&app_absent=0"><i class="fa-brands fa-whatsapp"></i></a>&nbsp;&nbsp;Sbm. Hardi Firman
                        </p>
                        <p>
                            <a class="text-icon" href="https://api.whatsapp.com/send/?phone=6281286513909&text=Halo%21+Saya+mau+bertanya+terkait+latihan+taekwondo+di+Dojang+88&type=phone_number&app_absent=0"><i class="fa-brands fa-whatsapp"></i></a>&nbsp;&nbsp;Ibu Yuli
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
</html>
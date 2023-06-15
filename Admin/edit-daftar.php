<?php
    session_start();
    include 'koneksi.php';

    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="loginAdmin.php"</script>';
    }

    $update = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE
        id_daftar = '$_GET[id]' ");
    
    $data = mysqli_fetch_array($update);

    if(isset($_POST['edit'])){
        mysqli_query($conn, "UPDATE tb_pendaftaran SET  
            nama_anggota = '$_POST[nama_anggota]',
            tempat_lahir = '$_POST[tempat_lahir]',
            tanggal_lahir = '$_POST[tanggal_lahir]',
            alamat_lengkap = '$_POST[alamat_lengkap]',
            nomor_telepon = '$_POST[nomor_telepon]',
            email_anggota = '$_POST[email_anggota]',
            inst_anggota = '$_POST[inst_anggota]',
            pil_anggota = '$_POST[pil_anggota]',
            tngkt_sabuk = '$_POST[tngkt_sabuk]',
            pil_kelas = '$_POST[pil_kelas]'
        WHERE id_daftar = '$_GET[id]'");

        echo '<script>window.location="dataPendaftar.php"</script>';;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Dojang 88</title>
</head>
<body>
<div>
    <!-- Sidebar Akun Admin -->
    <section class="sidebar p-4 bg-warning sidebar" id="sidebar">
        <center>
            <img class="logo" src="img/logoDojang88.png" alt="Logo">
            <!-- <img class="logo p-4" src="img/logo-taekwondo.png" alt="Logo"> -->
            <h3 class="mb-5 text-black nama-dojang">RTC Dojang 88</h3>
        </center>
        <!-- Fitur Beranda -->
        <li>
            <a class="text-white" name="" href="berandaAdmin.php">
                <i class="bi bi-beranda mr-2"></i>Beranda
            </a>
        </li>
        <!-- Fitur Data Anggota Baru -->
        <li>
            <a class="text-white" name="" href="dataPendaftar.php">
                <i class="bi bi-dataPendaftar mr-2"></i>Data Pendaftar
            </a>
        </li>
        <!-- Fitur Logout -->
        <li>
            <a class="text-white" href="logout.php">
                <i class="bi bi-logout mr-2"></i>Logout
            </a>
        </li>
    </section>
    <!-- Isi Beranda Admin -->
    <section class="p-4" id="main-content">
        <button class="btn btn-warning" id="button-toggle">
            <i class="bi bi-list">
                <img src="img/btn-menu.png" alt="menu">
            </i>
        </button>
        <div class="card mt-5">
            <div class="card-body">
                <center><h2>Edit Data Pendaftar</h2></center>
                <br>
                <form action="" method="POST" enctype="multipart/form-data"> 
                    <br>
                    <!-- Input Nama Anggota -->
                    <div class="form-group">
                        <label>Nama Anda</label>
                        <input type="text" class="form-control nama_anggota" name="nama_anggota" value="<?php echo $data['nama_anggota']; ?>"> 
                    </div>
                        <div class="row">
                            <!-- Input Tempat Lahir Anggota -->
                            <div class="col-md-6"><br>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control tempat_lahir" name="tempat_lahir" value="<?php echo 
                                    $data['tempat_lahir']; ?>">                        
                                </div>
                            </div>
                            <!-- Input Tanggal Lahir Anggota -->
                            <div class="col-md-6"><br>
                                <div class="form-group">
                                    <label>Tanggal lahir</label>
                                    <input type="date" class="form-control tanggal_lahir" name="tanggal_lahir" value="<?php 
                                    echo $data['tanggal_lahir']; ?>">            
                                </div>
                            </div>
                        </div>
                    <!-- Input Alamat Lengkap Anggota -->
                    <div class="form-group"><br>
                        <label>Alamat Lengkap</label><br>
                        <input type="text" class="form-control alamat_lengkap" name="alamat_lengkap" value="<?php echo $data['alamat_lengkap']; ?>">             
                    </div>
                    <!-- Input Nomor Telepon Anggota -->
                    <div class="form-group"><br>
                        <label>Nomor Telepon</label>
                        <input type="tel" class="form-control nomor_telepon" name="nomor_telepon" value="<?php echo $data['nomor_telepon'];?>">    
                    </div>
                    <!-- Input Email Anggota -->
                    <div class="form-group"><br>
                        <label>Email Anda</label>
                        <input type="email" class="form-control email_anggota" name="email_anggota" value="<?php echo $data['email_anggota']; ?>">         
                    </div>
                    <!-- Input Asal Sekolah/Instansi Anggota -->
                    <div class="form-group"><br>
                        <label>Asal Sekolah / Instansi Anda</label>
                        <input type="text" class="form-control inst_anggota" name="inst_anggota" value="<?php echo $data['inst_anggota']; ?>">
                    </div>
                    <!-- Pilihan Anggota tentang Pengalaman Latihan Taekwondo -->
                    <div class="form-group"><br>
                        <label>Sudah Pernah Latihan Taekwondo Sebelumnya?</label><br>
                        <div class="form-check">
                            <input type="radio" class="form-check-input pil_anggota" name="pil_anggota" value="Sudah">
                            <label class="form-check-label" for="sudah-pernah">Sudah Pernah</label>                  
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input pil_anggota" name="pil_anggota" value="Belum">
                            <label class="form-check-label" for="belum-pernah">belum Pernah</label>                
                        </div>
                    </div>
                    <br>
                    <!-- Tingkat Sabuk Anggota -->
                    <div class="form-group">
                        <label>Pilih Tingkatan Warna Sabuk Anda (Bagi yang sudah pernah latihan Taekwondo Sebelumnya)</label>
                        <select class="form-select tngkt_sabuk" name="tngkt_sabuk"  value="<?php echo $data['tngkt_sabuk']; ?>">
                            <option selected>--- Pilih Tingkatan Sabuk ---</option>
                            <option value="Putih / Geup 10">Putih / Geup 10</option>
                            <option value="Kuning / Geup 9">Kuning / Geup 9</option>
                            <option value="Kuning Strip Hijau / Geup 8">Kuning Strip Hijau / Geup 8</option>
                            <option value="Hijau / Geup 7">Hijau / Geup 7</option>
                            <option value="Hijau Strip Biru / Geup 6">Hijau Strip Biru / Geup 6</option>
                            <option value="Biru / Geup 5">Biru / Geup 5</option>
                            <option value="Biru Strip Merah / Geup 4">Biru Strip Merah / Geup 4</option>
                            <option value="Merah / Geup 3">Merah / Geup 3</option>
                            <option value="Merah Strip / Geup 2">Merah Strip / Geup 2</option>
                        </select>
                    </div>
                    <br>
                    <!-- Kelas Latihan -->
                    <div class="form-group">
                        <label>Kelas Latihan yang ingin diikuti</label>
                        <select class="form-select pil_kelas" name="pil_kelas" value="<?php echo $data['pil_kelas']; ?>">
                            <option value="">--- Pilih Kelas Latihan yang ingin diikuti ---</option>
                            <option value="reguler anak (selasa & kamis)">Reguler Anak (Selasa & Kamis)</option>
                            <option value="reguler anak (selasa & minggu)">Reguler Anak (Selasa & Minggu)</option>
                            <option value="reguler anak (kamis & minggu)">Reguler Anak (Kamis & Minggu)</option>
                            <option value="reguler remaja & dewasa">Reguler Remaja & Dewasa</option>
                            <option value="prestasi">Prestasi</option>
                            <option value="private">Private</option>
                        </select>          
                    </div>
                    <br>
                    <!-- Button Daftar dan Reset -->
                    <br>
                    <button type="submit" class="btn btn-primary" name="edit">Simpan Data</button>
                    <a href="dataPendaftar.php" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ?')">Kembali</a>
                </form>
            </div>
        </div>
    </section>
    <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.min"></script>
    <script>
        // event will be executed when the toggle-button is clicked
        document.getElementById("button-toggle").addEventListener("click", () => {

        // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");

        // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
        });
    </script>
</body>
</html>
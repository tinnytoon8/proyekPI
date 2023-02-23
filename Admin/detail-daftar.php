<?php
    session_start();
    include "koneksi.php";

    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="loginAdmin.php"</script>';
    }

    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE
        id_daftar = '".$_GET['id']."' ");
    
    $p = mysqli_fetch_object($peserta);
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
    <!-- Isi Data Pendaftar Latihan di RTC Dojang 88 -->
    <section class="p-4 data-pendaftar" id="main-content">
        <button class="btn btn-warning" id="button-toggle">
            <i class="bi bi-list">
                <img src="img/btn-menu.png" alt="menu">
            </i>
        </button>
        <div class="card mt-5">
            <div class="card-body">
                <center><h2>Detail Data Pendaftar RTC Dojang 88</h2></center>
                <br><br>
                <table>
                    <tr>
                        <td>Kode Pendaftaran</td>
                        <td>:</td>
                        <td><?php echo $p->id_daftar ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $p->nama_anggota ?></td>            
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>:</td>
                        <td><?php echo $p->tempat_lahir.', '.$p->tanggal_lahir ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $p->alamat_lengkap ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td><?php echo $p->nomor_telepon ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $p->email_anggota ?></td>
                    </tr>
                    <tr>
                        <td>AsalSekolah/Instansi</td>
                        <td>:</td>
                        <td><?php echo $p->inst_anggota ?></td>
                    </tr>
                    <tr>
                        <td>Sudah Pernah Latihan Taekwondo Sebelumnya</td>
                        <td>:</td>
                        <td><?php echo $p->pil_anggota ?></td>
                    </tr>
                    <tr>
                        <td>Tingkat Warna Sabuk Terakhir</td>
                        <td>:</td>
                        <td><?php echo $p->tngkt_sabuk ?></td>
                    </tr>
                    <tr>
                        <td>Pilihan Kelas Latihan</td>
                        <td>:</td>
                        <td><?php echo $p->pil_kelas ?></td>
                    </tr>
                </table>        
            </div>
        </div>
        <br>
        <a href="dataPendaftar.php" class="btn btn-sm btn-primary">Kembali</a>
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
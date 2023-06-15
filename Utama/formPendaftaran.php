<?php
    include 'koneksi.php';
    
    if(isset($_POST['submit'])){

        // Membuat nomor kode pendaftaran user pendaftar
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_daftar, 5)) AS id FROM
            tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);

        $namaAnggota = $_POST['nama_anggota'];
        $tempatLahir = $_POST['tempat_lahir'];
        $tanggalLahir = $_POST['tanggal_lahir'];
        $alamatLengkap = $_POST['alamat_lengkap'];
        $nomorTelepon = $_POST['nomor_telepon'];
        $emailAnggota = $_POST['email_anggota'];
        $instAnggota = $_POST['inst_anggota'];
        $pilAnggota = $_POST['pil_anggota'];
        $tingkatSabuk = $_POST['tngkt_sabuk'];
        $pilKelas = $_POST['pil_kelas'];
        
        // Masukan Input data diri User pendaftar ke dalam MySQL
        if($namaAnggota != "" && $tempatLahir != "" && $tanggalLahir != "" && $alamatLengkap != "" && $nomorTelepon != "" && 
            $emailAnggota != "" && $instAnggota != "" && $pilAnggota != "" && $pilKelas != ""){
                $insert = "INSERT INTO tb_pendaftaran VALUES (
                    '".$generateId."',
                    '".$namaAnggota."',
                    '".$tempatLahir."',
                    '".$tanggalLahir."',
                    '".$alamatLengkap."',
                    '".$nomorTelepon."',
                    '".$emailAnggota."',
                    '".$instAnggota."',
                    '".$pilAnggota."',
                    '".$tingkatSabuk."',
                    '".$pilKelas."'
                )";

                $data = mysqli_query($conn,$insert);

                if($data){
                    echo '<script>window.location="berhasilDaftar.php?id='.$generateId.'"</script>';
                }else{
                    echo 'Failed';
                    
                }
        }else{
            echo '<script>alert(Mohon Isikan Formulirnya Terlebih Dahulu!)</script>';
        }  
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
    <title>Formulir Daftar</title>
</head>
<body class="bg-warning">
    <center><img class="logo" src="img/logoDojang88.png" alt="Logo"></center>
    <section class="container p-3 my-3 border mb-2 bg-white text-dark">
        <h2 class="alert alert-secondary text-center">Formulir Pendaftaran Latihan Taekwondo RTC Dojang 88</h2>
        <form action="" method="POST" enctype="multipart/form-data"> 
            <!-- Input Nama Anggota -->
            <br>
            <div class="form-group">
                <label>Nama Anda</label>
                <input type="text" class="form-control nama_anggota" name="nama_anggota" placeholder="Masukan Nama Lengkap Anda!" required> 
            </div>
                <div class="row">
                    <!-- Input Tempat Lahir Anggota -->
                    <div class="col-md-6"><br>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Lahir Anda" required>                        
                        </div>
                    </div>
                    <!-- Input Tanggal Lahir Anggota -->
                    <div class="col-md-6"><br>
                        <div class="form-group">
                            <label>Tanggal lahir</label>
                            <input type="date" class="form-control tanggal_lahir" name="tanggal_lahir" required>            
                        </div>
                    </div>
                </div>
            <!-- Input Alamat Lengkap Anggota -->
            <div class="form-group"><br>
                <label>Alamat Lengkap</label><br>
                <input type="text" class="form-control alamat_lengkap" name="alamat_lengkap" placeholder="Masukan Alamat Lengkap Anda!" required>             
            </div>
            <!-- Input Nomor Telepon Anggota -->
            <div class="form-group"><br>
                <label>Nomor Telepon</label>
                <input type="tel" class="form-control nomor_telepon" name="nomor_telepon" placeholder="Masukan Nomor Telepon Anda!" required>    
            </div>
            <!-- Input Email Anggota -->
            <div class="form-group"><br>
                <label>Email Anda</label>
                <input type="email" class="form-control email_anggota" name="email_anggota" placeholder="Masukan Email Anda!" required>         
            </div>
            <!-- Input Asal Sekolah/Instansi Anggota -->
            <div class="form-group"><br>
                <label>Asal Sekolah / Instansi Anda</label>
                <input type="text" class="form-control inst_anggota" name="inst_anggota" placeholder="Masukan Asal Sekolah / Instansi Anda!" required>
            </div>
            <!-- Pilihan Anggota tentang Pengalaman Latihan Taekwondo -->
            <div class="form-group"><br>
                <label>Sudah Pernah Latihan Taekwondo Sebelumnya?</label><br>
                <div class="form-check">
                    <input type="radio" class="form-check-input pil_anggota" name="pil_anggota" value="Sudah" required>
                    <label class="form-check-label" for="sudah-pernah">Sudah Pernah</label>                  
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input pil_anggota" name="pil_anggota" value="Belum" required>
                    <label class="form-check-label" for="belum-pernah">belum Pernah</label>                
                </div>
            </div>
            <br>
 
            <!-- Tingkat Sabuk Anggota -->
            <div class="form-group">
                <label>Pilih Tingkatan Warna Sabuk Anda (Bagi yang sudah pernah latihan Taekwondo Sebelumnya)</label>
                <select class="form-select tngkt_sabuk" name="tngkt_sabuk">
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
                <select class="form-select pil_kelas" name="pil_kelas" required>
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
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Daftar Sekarang</button>
            <button type="reset" class="btn btn-danger btn-sm" name="btn_reset">Reset</button>
            <a href="index.php" onclick="return confirm('Yakin ?')" class="btn btn-sm btn-warning">Kembali</a>
        </form>
    </section>
    <script src="bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
</html>
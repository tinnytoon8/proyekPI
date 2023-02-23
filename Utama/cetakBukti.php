<?php
    include 'koneksi.php';

    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran 
        WHERE id_daftar = '".$_GET['id']."' ");
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
    <script>
        window.print();
    </script>
    <title>Cetak Bukti</title>
</head>
<body>
    <section class="header">
        <img class="logo" src="img/logoDojang88.png" alt="Logo">
    </section>
    
    <section class="form-bukti">
        <center><h2>Bukti Pendaftaran Latihan</h2></center>
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
    </section>
    <link rel="text/javascript" href="bootstrap-5.2.0-dist/js/bootstrap.js">
</body>
</html>
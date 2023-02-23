<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Berhasil Daftar</title>
</head>
<body class="bg-warning">
    <center><img class="logo" src="img/logoDojang88.png" alt="Logo"></center>
    <section class="container p-3 my-3 border mb-2 bg-white text-dark">
        <center>
            <h2>Pendaftaran Berhasil</h2>
            <h4>Kode Pendaftaran Anda adalah</h4>
            <br>
            <!-- Menampilkan kode pendaftaran user pendaftar -->
            <h4 class="kode-daftar"><?php echo $_GET['id'] ?></h4>
            <br>
            <p>Silahkan foto atau screenshoot kode pendaftaran ini sebagai bukti pendaftaran saat melakukan proses konfirmasi 
                kepada pengurus Dojang 88 atau jika ingin mencetak hasil bukti pendaftarannya, dapat klik tombol di bawah ini
            </p>
            <!-- Melakukan cetak pembuktian pendaftaran -->
            <a href="cetakBukti.php?id=<?php echo $_GET['id'] ?>" class="btn btn-sm btn-primary">Cetak Bukti Daftar</a>
            <br>
        </center>
        <br>
        <!-- Tombol kembali ke halaman beranda -->
        <a href="formPendaftaran.php" onclick="return confirm('Yakin ?')" class="btn btn-sm btn-danger">Kembali</a>
    </section>
    <!-- http://localhost/project/berhasilDaftar.php?id=P202200011 -->
</body>
</html> 
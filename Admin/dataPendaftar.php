<?php
    session_start();
    include "koneksi.php";
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="loginAdmin.php"</script>';
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
    <!-- Isi Data Pendaftar Latihan di RTC Dojang 88 -->
    <section class="p-4 data-pendaftar" id="main-content">
        <button class="btn btn-warning" id="button-toggle">
            <i class="bi bi-list">
                <img src="img/btn-menu.png" alt="menu">
            </i>
        </button>
        <div class="card mt-5">
            <div class="card-body">
                <center><h2>Data Pendaftar RTC Dojang 88</h2></center>
                <br><br>
                <!-- Fitur Tampilan Search  -->
                <form action="" method="POST">
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="search" name="pencarian" class="form-control" size="20" autofocus placeholder="Masukan id pendaftaran..." autocomplete="off"/>
                        </div>
                        <button type="submit" class="btn btn-primary" name="cari">
                            <i class="fas fa-search">Cari</i>
                        </button>
                    </div>
                </form>
                <table class="table table-striped table-hover table-bordered mt-5 data-pendaftar">
                    <tr class="table-dark">
                        <th>No</th>
                        <th>ID Pendaftaran</th>
                        <th>Nama Anggota</th>
                        <th>Pengalaman Latihan</th>
                        <th>Pilihan Kelas Latihan</th>
                        <th>Aksi</th>
                    </tr>
                    <tbody>
                        <?php
                            // Fitur Search
                            $batas = 10;
                            $hal = @$_GET['hal'];
                            if(empty($hal)){
                                $posisi = 0;
                                $hal = 1;
                            }else{
                                $posisi = ($hal-1) * $batas;
                            }
                            
                            $previous = $hal - 1;
                            $next = $hal + 1;

                            $no = 1;
                            if($_SERVER['REQUEST_METHOD'] == "POST"){
                                $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                                if($pencarian !=''){
                                    $sql = "SELECT * FROM tb_pendaftaran WHERE id_daftar LIKE '%$pencarian'";
                                    $query = $sql;
                                    $queryJml = $sql;
                                }else{
                                    $query = "SELECT * FROM tb_pendaftaran LIMIT $posisi, $batas";
                                    $queryJml = "SELECT * FROM tb_pendaftaran";
                                    $no = $posisi + 1;
                                }
                            }else{
                                $query = "SELECT * FROM tb_pendaftaran LIMIT $posisi, $batas";
                                $queryJml = "SELECT * FROM tb_pendaftaran";
                                $no = $posisi + 1;
                            }
                            
                            // $list_peserta = mysqli_query($conn, "SELECT * FROM 
                            //     tb_pendaftaran");
                            $list_peserta = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($list_peserta)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?>.</td>
                            <td><?php echo $row['id_daftar'] ?></td>
                            <td><?php echo $row['nama_anggota'] ?></td>
                            <td><?php echo $row['pil_anggota'] ?></td>
                            <td><?php echo $row['pil_kelas'] ?></td>
                            <td>
                                <a href="detail-daftar.php?id=<?php echo $row['id_daftar'] ?>" class="btn btn-sm btn-primary">Detail</a>
                                <a href="edit-daftar.php?id=<?php echo $row['id_daftar'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="hapus-daftar.php?id=<?php echo $row['id_daftar'] ?>" onclick="return confirm('Yakin ?')" 
                                    class="btn btn-sm btn-danger">Hapus
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
            if(@$_POST['pencarian'] == ''){ 
        ?>
            <div style="float:left;">
                <?php
                $jml = mysqli_num_rows(mysqli_query($conn, $queryJml));
                echo "Jumlah Data : <b>$jml</b>";
                ?>
            </div>
            <div class="pagination p-4" style="float:right;">
                <ul class="pagination pagination-sm" style="margin:0">
                    <?php
                    $jml_hal = ceil($jml / $batas);
                    for($i=1; $i<=$jml_hal; $i++){
                        if($i != $hal){
                            // echo "<li><a href=\"?hal=$i\">$i</a></li>";
                            echo "<li><button><a href=\"?hal=$i\">$i</a></button></li>";
                        }else{
                            // echo "<li class=\"active\"><a>$i</a></li>";
                            echo "<li class=\"active\"><button><a>$i</a></button></li>";
                        }
                    }
                    ?>
                    </ul>
                </div>
                <?php
            }else { 
                echo "<div style=\"float:left;\">";
                $jml = mysqli_num_rows(mysqli_query($conn, $queryJml));
                echo "Data Hasil Pencarian : <b>$jml</b>";
                echo "<div>";
            }
        ?>
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
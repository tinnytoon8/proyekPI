<?php
    session_start();
    include 'koneksi.php';

    if(isset($_POST['login'])){

        $cek = mysqli_query($conn, "SELECT * FROM tb_loginadmin
            WHERE usrnm_admin = '".$_POST['user-admin']."' AND pswrd_admin = '".$_POST['pass-admin']."'
            ");
        
        if(mysqli_num_rows($cek) > 0){
            $a = mysqli_fetch_object($cek);

            $_SESSION['stat_login'] = true;
            $_SESSION['id'] = $a->id_admin;
            $_SESSION['nama'] = $a->nm_admin;
            echo '<script>window.location="berandaAdmin.php"</script>';
        }else{
            echo '<script>alert("Gagal, Username atau Password Salah!")</script>';
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
    <title>Login Admin</title>
</head>
<body class="bg-warning">
    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class=".col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <!-- <center><img class="logo" src="img/logoDojang88.png" alt="Logo"></center> -->
                            <center><img class="logo" src="img/logoDojang88.png" alt="Logo"></center>
                            <h3 class="text-center">Login Admin</h3><br>
                            <form action="" method="post">
                                <input type="text" name="user-admin" class="form-control my-2 py-2 user-admin" placeholder="Username" required>
                                <input type="password" name="pass-admin" class="form-control my-2 py-2 pass-admin" placeholder="Password" required><br>
                                <button type="submit" name="login" class="btn btn-primary login" value="login">Login</button>
                            </form>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
</body>
</html>
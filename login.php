<?php
session_start();
$hasil = true;
if (!empty($_POST)) {
    $pdo = require 'koneksi.php';
    $sql = "select * from users where email = :email";
    $query = $pdo -> prepare($sql);
    $query->execute(array('email' => $_POST['email']));
    $user = $query->fetch();
    if (!$user) {
        $hasil = false;
    } elseif (sha1($_POST['password']) !=$user['password']) {
        $hasil = false;
    } else {
        $hasil = true;
        $_SESSION['user']=array(
            'id'=>$user['id'],
            'nama'=>$user['nama'],
            'email'=>$user['email']
        );

        header("Location: index.php");
        exit;
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="./css/forum.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Masuk</title>
    </head>
    
    <body>
        <?php
        $__menuAktif = 'login';
        include 'menu.php';
        ?>
        <div class="container">
            <div class="row">
            <h1>Masuk</h1>
            <p>Silahkan masuk dengan akun Anda.</p>
            <hr/>
                <div class="col-md-4">
                    <?php
                    if (!$hasil) {
                        echo '<p class="text-danger">Email atau password salah</p>';
                    }
                    ?>
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required/>
                        </div>
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </form>

                </div>
                <p style= "padding-top: 20px">Belum punya akun? <a href="daftar.php">Daftar</a></p>
            </div>

        </div>


        <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

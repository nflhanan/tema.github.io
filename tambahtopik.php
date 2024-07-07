<?php
require_once 'cekakses.php';
if (!empty($_POST)) {
    $pdo = require 'koneksi.php';
    $sql = "insert into topik (judul, deskripsi, tanggal, id_user)
    values (:judul, :deskripsi, now(), :id_user)";
    $query = $pdo->prepare($sql);
    $query->execute(array(
        'judul' => $_POST['judul'],
        'deskripsi' => $_POST['deskripsi'],
        'id_user' => $_SESSION['user']['id'],
    ));
    header("Location: tambahtopik.php?sukses=1");
    exit;
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

    <title>Forum: Login</title>
    </head>
    
    <body>
        <?php
        $__menuAktif = 'tambah_topik';
        include 'menu.php';
        ?>
        <div class="container">
            <?php
            if (isset($_GET['sukses']) && $_GET['sukses'] =='1') {
                echo '<p class="text-success">Topik berhasil dikirim </p>';
            }
            ?>
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" require/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>

            </div>
        </div>
    </div>



        <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>


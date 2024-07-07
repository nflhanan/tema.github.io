<?php
require_once 'cekakses.php';
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

    <title>Tema kolom komentar</title>
</head>
<body>
    <?php
    include 'menu.php';
    ?>

    <div class="container">
        <?php
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $pdo = require 'koneksi.php';
            $sql = "SELECT topik3.*, users.nama, users.email FROM topik3
            INNER JOIN users ON topik3.id_user=users.id
            WHERE topik3.id=:id";
            $query = $pdo->prepare($sql);
            $query->execute(array('id' => $_GET['id']));
            $topik3 = $query->fetch();
            if (empty($topik3)) {
                echo '<p class="text-warning">Topik tidak ditemukan</p>';
            } else {
                ?>
                <div class="row mb-3">
                    <div class="col-auto">
                        <img style="width: 50px; height: 50px; border-radius: 50%;" src="//gravatar.com/avatar/<?php echo md5($topik3['email']); ?>?s=200&d=monsterid" />
                    </div>
                    <div class="col">
                        <div class="fw-bold"><?php echo htmlentities($topik3['nama']); ?></div>
                    </div>
                </div>
                <h2><?php echo htmlentities($topik3['judul']); ?></h2>
                <p><?php echo nl2br(htmlentities($topik3['deskripsi'])); ?></p>
                <hr/>
                
                <?php
                // Cek apakah user sudah pernah mengirim komentar di topik ini
                $sqlCheckComment = "SELECT COUNT(*) FROM komentar3 WHERE id_user=:id_user AND id_topik3=:id_topik3";
                $queryCheckComment = $pdo->prepare($sqlCheckComment);
                $queryCheckComment->execute(array(
                    'id_user' => $_SESSION['user']['id'],
                    'id_topik3' => $_GET['id']
                ));
                $hasCommented = $queryCheckComment->fetchColumn() > 0;

                if ($hasCommented) {
                    $sql = "SELECT komentar3.*, users.nama, users.email FROM komentar3
                    INNER JOIN users ON users.id = komentar3.id_user
                    WHERE id_topik3=:id_topik3";
                    $query2 = $pdo->prepare($sql);
                    $query2->execute(array(
                        'id_topik3' => $_GET['id']
                    ));
                    while ($komentar3 = $query2->fetch()) {
                        ?>
                        <div class="row">
                            <div class="col-auto">
                                <img style="width: 50px; height: 50px; border-radius: 50%;" src="//gravatar.com/avatar/<?php echo md5($komentar3['email']); ?>?s=200&d=monsterid" />
                            </div>
                            <div class="col">
                                <div class="bg-light py-3 px-3 rounded">
                                    <div class="row gx-2">
                                        <div class="col">
                                            <?php echo htmlentities($komentar3['nama']); ?>
                                        </div>
                                        <?php
                                        if ($_SESSION['user']['id'] == $komentar3['id_user']) {
                                        ?>
                                        <div class="col-auto">
                                            <a href="hapuskomentar3.php?id=<?php echo $komentar3['id']; ?>" 
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus komentar')"
                                            class="text-muted"><small>Hapus</small></a>
                                        </div>
                                        <?php } ?>
                                        <div class="col-auto">
                                            <small class="text-muted"><?php echo date('d M Y H:i', strtotime($komentar3['tanggal'])); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <?php echo nl2br(htmlentities($komentar3['komentar3'])); ?>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <?php
                    }
                } else {
                    echo '<p class="text-warning"></p>';
                }
                ?>
                <div class="row">
                    <div class="col-auto">
                        <img style="width: 50px; height: 50px; border-radius: 50%;" src="//gravatar.com/avatar/<?php echo md5($_SESSION['user']['email']); ?>?s=200&d=monsterid" />
                    </div>
                    <div class="col">
                        <form method="POST" action="jawab3.php">
                            <div class="mb-3">
                                <textarea class="form-control" name="komentar3" placeholder="Jawab" required></textarea>
                                <input type="hidden" value="<?php echo $topik3['id']; ?>" name="id_topik3" />
                            </div>
                            <div class="text-end">
                                <button class="btn btn-primary" type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <!-- custom js link -->
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$error = '';
$hasil = false;
if (!empty($_POST)) {
  $pdo = require 'koneksi.php';
  if ($_POST['password'] != $_POST['password2']) {
    $error = 'Password dan Ketik Ulang Password harus sama';
  } else if (strlen($_POST['password']) <6 ) {
      $error = 'Password harus minimal 6 karakter';
  }else {
    //validasi email
    $sql = "select count(*) from users where email=:emailUser";
    $query = $pdo -> prepare($sql);
    $query->execute(array('emailUser' => $_POST['email']));
    $count = $query->fetchColumn();
    if ($count > 0) {
      $error = 'Gunakan email lain';
    } else {
      $sql = "insert into users (nama, email, password)
      values (:nama, :email, :password)";
      $query2 = $pdo -> prepare($sql);
      $query2->execute(array(
        'nama' => $_POST['nama'],
        'email' => $_POST['email'],
        'password' => sha1($_POST['password']),
      ));
        $hasil = true;
        unset($_POST);
    }
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

    <title>Forum: Daftar User</title>
  </head>
  <body>
    <?php
      $__menuAktif = '';
      include 'menu.php';
    ?>
    <div class="container">
      <div class="row">
        <h1>Daftar</h1>
        <p>Silahkan mendaftar terlebih dahulu.</p>
        <hr/>
        <?php if ($hasil == true) {?>
        <p class="text-success">
          Registrasi berhasil, silahkan <a href="login.php">Masuk!</a>.
        </p>
        <?php }?>
        <?php
        if ($error !=''){
          echo '<p class="text-danger">', $error, '</p>';
        }
        ?>
        <div class="col-md-4">
          <form method="POST" action="">
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input class="form-control" type="text" name="nama" required value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';?>">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input class="form-control" type="email" name="email" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : '';?>">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input class="form-control" type="password" name="password" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Ketik Ulang Password</label>
              <input class="form-control" type="password" name="password2" required>
            </div>
            <button class="btn btn-primary">Daftar</button>

          </form>
        </div>
        <p style= "padding-top: 20px">Sudah punya akun? <a href="login.php">Masuk</a></p>
      </div>
    </div>   

    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
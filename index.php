<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    

    <title>Tema</title>
    </head>
    
    <body>

<header>
    <a href="#" class="logo">
        <img src="./img/logo.png">
    </a>

    <ul class="navbar">
    <li class="nav-item">
          <a class="nav-link <?php echo $__menuAktif == 'beranda' ? 'active' : ''?>" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $__menuAktif == 'tentang' ? 'active' : ''?>" href="tentang.php">Tentang</a>
        </li>
        <?php
        if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
        ?>
        <li class="nav-item">
          <a class="nav-link <?php echo $__menuAktif == 'daftar' ? 'active' : ''?>" href="daftar.php">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $__menuAktif == 'login' ? 'active' : ''?>" href="login.php">Masuk</a>
        </li>
       
        <?php } else {?>
        <li class="nav-item">
          <a class="nav-link" href="kelas.php">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="logout.php">Keluar</a>
        </li>
        
        <?php }?>
    </ul>

    <div class="header-icons">
        <a href="#"><i class='bx bx-user'></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
</header>
    
<section class="home" id="home">
    <div class="home-text" style="padding-left: 100px; margin-top: 60px">
        <h1 style=" font-size: 70px; padding-left: 130px;">TEMA</h1>
        <h6 style=" padding-left: 80px;">Website Edukasi Matematika</h6>
        <h1>Temukan Kemudahan dan Kecerdasan bersama Kami!</h1>
        <p style=" padding-left: 25px;">Dapatkan keterampilan matematika Anda secara online</p>
    </div>

    <div class="home-img">
        <img src="./img/home.png" alt="Deskripsi gambar" style="width: 400px; height: auto;">
    </div>
</section>

<section class="container">
    <div class="container-box">
        <div class="container-text">
            <p>Membawa Matematika dari Dunia Nyata ke Ujung Jari Anda</p>
        </div>
    </div>

    <div class="container-box">
        <div class="container-text">
            <p>Menginspirasi Belajar Matematika dengan Pengalaman Pembelajaran yang Interaktif</p>
        </div>
    </div>

    <div class="container-box">
        <div class="container-text">
            <p>Telusuri Kecerdasan Matematika di Setiap Halaman</p>
        </div>
    </div>

</section>

<!-- start about section-->
<section class="tentang" id="tentang">
    <div class="tentang-img">
        <img src="./img/logotentang.png" style="width: 400px; height: 400px;">
    </div>

    <div class="tentang-text" style="padding-right: 100px">
        <h2>Pengen Belajar jadi Lebih Seru? Yuk Belajar Bareng TEMA</h2>
        <p>Selamat datang di TEMA (Tentang Matematika), destinasi pembelajaran matematika yang inovatif dan ramah pengguna. Kami berkomitmen untuk membantu Anda menjelajahi keindahan matematika dengan cara yang menyenangkan, interaktif, dan mudah dipahami.</p>
    </div>
    <div class="main-btn">
        <a href="./tentang.php" class="btn">Baca lebih lanjut</a>
    </div>
</section>


<!-- start class section -->
<section class="kelas" id="kelas">
    <div class="center-text">
        <h5>KELAS</h5>
        <h2>Pilih Kelas</h2>
    </div>

    <div class="kelas-content">
        <div class="box">
           <img src="./img/seven.png" style="width: 100px; height: 100px;">
           <h3>Kelas VII</h3>
        </div>

        <div class="box">
            <img src="./img/eight.png" style="width: 100px; height: 100px;">
            <h3>Kelas VIII</h3>
         </div>

         <div class="box">
            <img src="./img/nine.png" style="width: 100px; height: 100px;">
            <h3>Kelas IX</h3>
         </div>

         <div class="box">
            <img src="./img/ten.png" style="width: 100px; height: 100px;">
            <h3>Kelas X</h3>
         </div>

         <div class="box">
            <img src="./img/eleven.png" style="width: 100px; height: 100px;">
            <h3>Kelas XI</h3>
         </div>

         <div class="box">
            <img src="./img/twelve.png" style="width: 100px; height: 100px;">
            <h3>Kelas XII</h3>
         </div>
    </div>

    <div class="main-btn">
        <a href="kelas.php" class="btn">Mulai</a>
    </div>

</section>

<!-- start practice section-->
<section class="latihan" id="latihan"> 
    <div class="center-text">
        <h5>LATIHAN</h5>
        <h2>Jelajahi Berbagai Latihan Soal</h2>
    </div>

    <div class="latihan-content">
        <div class="row">
            <img src="./img/logolatihan1.webp">
            <div class="latihan-text">
                <h5>SMA Kelas X</h5>
                <h3>Latihan Soal Persamaan dan Fungsi Kuadrat</h3>
                <h6>20 soal</h6>
            </div>
        </div>

        <div class="row">
            <img src="./img/logolatihan2.webp">
            <div class="latihan-text">
                <h5>SMP Kelas VIII</h5>
                <h3>Latihan Soal Persamaan Garis Lurus</h3>
                <h6>20 soal</h6>
            </div>
        </div>

        <div class="row">
            <img src="./img/logolatihan3.webp">
            <div class="latihan-text">
                <h5>SMA Kelas XII</h5>
                <h3>Latihan Soal Lingkaran dan Garis Singgung</h3>
                <h6>20 soal</h6>
            </div>
        </div>

        <div class="row">
            <img src="./img/logolatihan1.webp">
            <div class="latihan-text">
                <h5>SMA Kelas X</h5>
                <h3>Latihan Soal Persamaan dan Fungsi Kuadrat</h3>
                <h6>20 soal</h6>
            </div>
        </div>

        <div class="row">
            <img src="./img/logolatihan1.webp">
            <div class="latihan-text">
                <h5>SMA Kelas X</h5>
                <h3>Latihan Soal Persamaan dan Fungsi Kuadrat</h3>
                <h6>20 soal</h6>
            </div>
        </div>

        <div class="row">
            <img src="./img/logolatihan1.webp">
            <div class="latihan-text">
                <h5>SMA Kelas X</h5>
                <h3>Latihan Soal Persamaan dan Fungsi Kuadrat</h3>
                <h6>20 soal</h6>
            </div>
        </div>

    </div>

    <div class="main-btn">
        <a href="#-" class="btn">Segera Hadir</a>
    </div>
</section>

<!-- start contact section -->
<section class="contact" id="contact">
    <div class="main-contact">
        <div class="contact-content">
            <img src="./img/logo.png">
            <li><a href="https://www.facebook.com/profile.php?id=61561798719989">Facebook</a></li>
            <li><a href="https://www.instagram.com/tentangmatematika0/">Instagram</a></li>
            <li><a href="https://x.com/tema1394710">Twitter</a></li>
        </div>

        <div class="contact-content">
            <li><a href="./index.php">Beranda</a></li>
            <li><a href="./tentang.php">Tentang</a></li>
            <li><a href="./kelas.php">Kelas</a></li>
            <li><a href="#latihan">Latihan</a></li>
        </div>

        <div class="contact-content">
            <li><a href="#profil">Profil</a></li>
            <li><a href="./login.php">Masuk</a></li>
            <li><a href="./daftar.php">Daftar</a></li>
        </div>

        <div class="contact-content">
            <li><a href="https://maps.app.goo.gl/XrawmHRAB3B5c2rJ9">Sleman, <br> Yogyakarta, 2024</a></li>
            <li><a href="#email">tentangmatematika0@gmail.com</a></li>
        </div>
    </div>
</section>

<div class="last-text">
    <p>&copy; 2024 Tema. Hak Cipta Dilindungi.</p>
</div>

<!-- custom js link -->
        <script type="text/javascript" src="./js/script.js"></script>
        <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

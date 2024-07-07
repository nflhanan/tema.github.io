<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema Materi</title>
    
    <!-- custom css link -->
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
</head>
<body>
    
 <!-- start header -->
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
<!-- start materi page -->
<div class="center-text">
        <h2 style="margin-top: 150px; border: 2px solid #A7E6FF;
    padding: 10px;
    border-radius: 10px;
    display: inline-block;
    background-color: #F0F3FF;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    color: #333;
    font-weight: bold;">Materi Matematika Kelas X</h2>
    </div>
<section class="materi" style="padding-left: 130px;">
    

    <div class="main-materi">
        <h3>Statistika</h3>
        <a href="./penyajiandata.php">
            <div class="materi-box">
                <img src="./img/analysis.png" style="width: 100px; height: 100px;">
                <h5>Mengenal Box Plot</h5>
             </div>
        </a>
        <a href="./ukuranpemusatan.php">
            <div class="materi-box">
                <img src="./img/data-collection.png" style="width: 100px; height: 100px;">
                <h5>Dot Plot dan Histogram</h5>
             </div>
        </a>            
        <a href="diagrampencar.php">
            <div class="materi-box">
                <img src="./img/graph.png" style="width: 100px; height: 100px;">
                <h5>Diagram Pancar</h5>
             </div>
        </a>
         <a href="kuartil.php">
            <div class="materi-box">
                <img src="./img/statistics.png" style="width: 100px; height: 100px;">
                <h5>Kuartil dan Interkuartil</h5>
             </div>
         </a>
    </div>

    <div class="main-materi">
        <h3>Eksponen dan logaritma</h3>
        <div class="materi-box">
            <img src="./img/logarithm.png" style="width: 100px; height: 100px;">
            <h5>Belum Tersedia</h5>
         </div>
    </div>

    <div class="main-materi">
        <h3>Barisan dan Deret</h3>
        <div class="materi-box">
            <img src="./img/prioritize.png" style="width: 100px; height: 100px;">
            <h5>Belum Tersedia</h5>
         </div>
    </div>

    <div class="main-materi">
        <h3>Trigonometri</h3>
        <div class="materi-box">
            <img src="./img/trigonometry (3).png" style="width: 100px; height: 100px;">
            <h5>Belum Tersedia</h5>
         </div>
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

</body>
</html>

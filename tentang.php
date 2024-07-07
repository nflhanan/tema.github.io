<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema Tentang</title>
    
    <!-- custom css link -->
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    

</head>
        
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

<body>
    
<section class="tentang1" id="tentang1">
    <div class="main-tentang1">
        <div class="tentangkami-img">
            <img src="./img/tentang1.png" style="width: 400px; height: 400px;">
        </div>
        
        <div class="tentangkami-text">
            <h2>Tentang Kami</h2>
            <p>Selamat datang di TEMA (Tentang Matematika), destinasi pembelajaran matematika yang inovatif dan ramah pengguna. Kami berkomitmen untuk membantu Anda menjelajahi keindahan matematika dengan cara yang menyenangkan, interaktif, dan mudah dipahami. Kami adalah tim pengajar dan pengembang yang memiliki hasrat bersama untuk membuat matematika menjadi subjek yang menyenangkan dan dapat diakses oleh semua orang. Dengan pengalaman dalam pendidikan dan teknologi, kami bersatu untuk menciptakan platform pembelajaran matematika yang inspiratif.</p>
        </div>
        
        <div class="tawarkan-img">
            <img src="./img/tentang3.png" style="width: 400px; height: 400px;">
        </div>
        
        <div class="tawarkan-text">
            <h2>Apa Yang Kami Tawarkan?</h2>
            <p>Nikmati materi pembelajaran yang dirancang khusus untuk membuat konsep-konsep matematika menjadi jelas dan terjangkau. Asah keterampilan matematika Anda dengan latihan-latihan dan kuis interaktif yang disesuaikan dengan tingkat kesulitan Anda. Sertai komunitas kami dan berdiskusi dengan sesama penggemar matematika. Tanyakan pertanyaan, bagikan wawasan, dan raih pencapaian bersama-sama. dan simulasi try out: Asah keterampilan matematika Anda dengan mengikuti simulasi try out dengan batasan waktu yang sediakan.</p>
        </div>
        
        <div class="visimisi-text">
                <h2>Visi Kami</h2>
                <p>Membuat matematika dapat diakses oleh semua orang, membuka pintu ke dunia pengetahuan dan pemahaman</p>
                <br>
                <br>
                <h2>Misi Kami</h2>
                
            
            <div class="misi-box">
                <div class="misi-text">
                    <p>Memberikan materi pembelajaran berkualitas tinggi yang sesuai dengan kurikulum</p>
                </div>
                <div class="misi-text">
                    <p>Mendorong minat dan kecintaan terhadap matematika melalui pendekatan yang kreatif dan interaktif</p>
                </div>
                <div class="misi-text">
                    <p>Menyediakan platform pembelajaran yang ramah pengguna dan dapat diakses oleh semua lapisan masyarakat</p>
                </div>
                <div class="misi-text">
                    <p>Membangun komunitas pembelajar matematika yang saling mendukung dan berbagi pengetahuan</p>
                </div>
            </div>  
        </div>

        <div class="bergabung">
            <h2>Bagaimana Anda dapat Bergabung?</h2>
            <p>Bergabunglah dengan kami dalam petualangan matematika yang menyenangkan! Daftarkan akun Anda, jelajahi materi pembelajaran kami, dan ikut serta dalam komunitas kami. Kami percaya bahwa setiap orang dapat belajar matematika dengan cara yang menyenangkan dan kami siap membantu Anda meraih keberhasilan dalam pembelajaran. Terima kasih telah memilih TEMA sebagai mitra pembelajaran matematika Anda. Mari bersama-sama menjelajahi keajaiban matematika!</p>
        </div>
    </div>  
</section>

<section class="penyusun">
    <h2>Tim Penyusun</h2>
    <div class="main-penyusun">
        <div class="penyusun-img">
            <img src="./img/IMG_20240321_133845.jpg">
        </div>
        <div class="penyusun-text">
            <h5>Hallo, nama saya Naufal Hannan Rohmatulloh</h5>
            <p>Saya adalah pengembang dari website pembelajaran ini. Dengan dedikasi dan keahlian saya dalam dunia web desainer, saya bertekad untuk memberikan pengalaman pengguna yang optimal.</p>
            <div class="sosmed">
                <li><a href="https://www.instagram.com/nflhannan?igsh=MW9ocDhteHljZjBkbw=="><img src="./img/ig.png"></a></li>
                <li><a href="https://wa.me/6285640315239"><img src="./img/wa.png"></a></li>
                <li><a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=tentangmatematika0@gmail.com"><img src="./img/email.png"></a></li>
            </div>
        </div>
        
    </div>
    
</section>

<!-- start contact section -->
<section class="contact" id="contact"><section class="contact" id="contact">
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

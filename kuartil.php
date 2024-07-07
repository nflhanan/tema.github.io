<?php
require_once 'cekakses.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema</title>
    
    <!-- custom css link -->
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
/* Gaya untuk tombol */
.button {
  padding: 10px 20px;
  background-color: #3498db;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
  font-size: 16px;
  font-weight: bold;
  text-transform: uppercase;
}

.button:hover {
  background-color: #2980b9;
}

/* Gaya untuk popup */
.popup {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border: 2px solid #3498db;
  background-color: #f9f9f9;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
  padding: 20px;
  border-radius: 10px;
  z-index: 9999;
}

/* Gaya untuk tombol penutup */
.close {
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
  color: #777;
  font-size: 20px;
}

.close:hover {
  color: #333;
}

</style>

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
    
<!-- start penyajian data page -->
<section class="penyajian">
    <div class="main-penyajian">
        <div class="penyajian-text">
            <h2>Mengenal Kuartil dan Interkuartil</h2>
            
            <p style="margin-bottom: 20px;">Di halaman ini, kamu akan mempelajari bagaimana menggunakan jangkauan kuartil dan interkuartil untuk mempresentasi dan menginterpretasi data. Kamu akan belajar secara mandiri dengan mengikuti langkah-langkah pembelajaran yang interaktif dan menarik.</p>
            
            <div style="background-color: #E8DFCA; margin-left: 100px; margin-right: 100px; border-radius: 25px;"">
                
            <p style="padding-top: 20px; padding-bottom: 20px;">Sebelum lebih lanjut, pernahkah kalian memikirkan pertanyaan-perntanyaan berikut:</p>
            <p style="padding-bottom: 20px;">“Pernahkah kamu mengamati bagaimana data tersebar? Misalkan, bagaimana nilai ujian matematika di kelasmu? Atau, bagaimana tinggi badan siswa di sekolahmu?”</p>    
            <p style="padding-bottom: 20px;">Pikirkan contoh lain di mana kamu ingin mengetahui bagaimana data tersebar dan bagaimana interpretasi data tersebut.</p>
            
            </div>
            
            <h3 style="margin-top: 30px; border: 2px solid #83769c;
    padding: 10px;
    border-radius: 10px; max-width: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f5f5;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    color: #333;
    font-weight: bold;">Sekarang Bagaikan Ide Mu</h3>
            <h4>Tuliskan idemu</h4>
            <p style="padding-bottom: 25px; margin-left: 30px;">Catat ide-idemu di buku catatan atau buatlah diagram untuk memvisualisasikan bagaimana data tersebar.</p>
            
            <h3 style="padding-top: 20px;">Mari kita pelajari lebih dalam tentang jangkauan kuartil dan interkuartil:</h3>
            <hr style="margin-left: 100px; margin-right: 100px;">
            <br>
            <h4>Apa itu jangkauan kuartil?</h4>
            <p style="padding-top: 7px;">Jangkauan kuartil adalah ukuran statistik yang digunakan untuk menggambarkan sebaran data. Jangkauan kuartil dihitung dengan cara membagi data menjadi empat bagian yang sama besar (kuartil).</p>
            <br>
            <h4>Apa itu interkuartil?</h4>
            <p style="padding-top: 7px;">Jangkauan Interkuartil adalah rentang nilai yang mencakup 50% data tertengah. Interkuartil dihitung dengan cara menghitung selisih antara kuartil ketiga dan kuartil pertama.</p>
            <br>
            <h4>Bagaimana cara menghitung jangkauan kuartil dan interkuartil?</h4>
            <div style="padding: 5px">
            <p  style="padding-top: 7px; padding-bottom: 5px;">1. Urutkan data dari yang terkecil hingga terbesar.</p>
            <p>2. Hitung posisi kuartil:</p>
            <p style="margin-left: 20px;">• Q1: (n + 1) / 4</p>
            <p style="margin-left: 20px;">• Q2: n / 2</p>
            <p style="margin-left: 20px; padding-bottom: 5px;">• Q3: 3(n + 1) / 4</p>

            <p>3. Tentukan nilai kuartil:</p>
            <p style="margin-left: 20px;">• Q1: Nilai data pada posisi Q1</p>
            <p style="margin-left: 20px;">• Q2: Nilai data pada posisi Q2 (median)</p>
            <p style="margin-left: 20px; padding-bottom: 5px;">• Q3: Nilai data pada posisi Q3</p>
            
            <p>4. Hitung jangkauan interkuartil (IQR):</p>
            <p style="margin-left: 20px;">• IQR = Q3 - Q1</p>
            </div>
            
            <br>
            <h4>Apa yang bisa kita pelajari dari jangkauan kuartil dan interkuartil?</h4>
            <p  style="padding-top: 7px;">Jangkauan kuartil dan interkuartil dapat membantu kita untuk 1) Memahami sebaran data, jangkauan kuartil menunjukkan seberapa luas data tersebar. Interkuartil menunjukkan rentang nilai yang mencakup 50% data tertengah. 2) Mengidentifikasi outlier, data yang jauh dari jangkauan kuartil (outlier) mungkin perlu diinvestigasi lebih lanjut. 3) Membandingkan data, jangkauan kuartil dan interkuartil dapat digunakan untuk membandingkan sebaran data dari dua kelompok yang berbeda.</p>

            <h5 style="padding-top: 25px;">Untuk mempelajari jangkauan kuartil dan interkuartil lebih lanjut lagi</h5>
            <h5 style="padding-top: 7px;">Simak video berikut</h5>

            <iframe style="padding-top: 7px;" width="560" height="315" src="https://www.youtube.com/embed/UMMtJgmpwZc?si=5vnWcH2w93lhNzx_&amp;start=516" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
            

            <h3 style="color: #3C5B6F; padding-top: 40px;">Mari Berkreasi</h3>
            <div style="background-color: #E8DFCA; padding-bottom: 20px; margin-left: 100px; margin-right: 100px; border-radius: 25px;">
                <p style="padding-bottom: 10px; padding-top: 20px;">Data berikut menunjukkan nilai ujian matematika 10 siswa:</p>
                <img src="./img/jangkauan.png" alt="">
                <p style="padding-top: 20px; padding-bottom: 20px;">Hitung jangkauan kuartil dan interkuartil dari data nilai ujian matematika tersebut. Kemudian interpretasikan nilai kuartil dan interkuartil. Apa yang dapat kamu simpulkan tentang data sebaran nilai ujian matematika tersebut? Tuliskan di kolomentar berikut!</p>
            
                
<?php
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
  
    $pdo = require 'koneksi.php';
    $sql = "SELECT judul, tanggal, nama, email, topik4.id, id_user FROM topik4
            INNER JOIN users ON topik4.id_user = users.id
            ORDER BY tanggal DESC";
    $query = $pdo->prepare($sql);
    $query->execute();
    ?>

    <?php while ($data = $query->fetch()) { ?>
        <div class="d-flex flex-column align-items-center mb-1" style="background-color: #685f79; border-radius: 10px; padding: 10px; margin: 2px auto; max-width: 400px;">
            <div class="col-auto">
                <img style="width: 50px; height: 50px; border-radius: 50%;" src="//gravatar.com/avatar/<?php echo md5($data['email']); ?>?s=200&d=monsterid" />
            </div>
            <div class="col text-center">
                <figure class="figure" style="margin-bottom: 0;">
                    <blockquote class="blockquote" style="margin-bottom: 0;">
                        <p style="margin: 0;">
                            <a href="kolomkomentar4.php?id=<?php echo $data['id']; ?>" style="color: #e0e0e0; text-decoration: none; padding: 10px 20px; border: 2px solid #e0e0e0; border-radius: 5px; display: inline-block; background-color: #83769c;">
                                <?php echo htmlentities($data['judul']); ?> 
                                <?php
                            if ($_SESSION['user']['id'] == $data['id_user']) {?>
                            <!-- Tombol untuk membuka pop-up -->
                            <a href="hapustopik4.php?id=<?php echo $data['id'];?>" 
                                    onclick="return confirm ('Apakah Anda yakin ingin menghapus topik ini?')"
                                    class="text-muted"><small>Hapus</small></a>
                            <?php }?>
                            </a>
                        </p>
                    </blockquote>
                </figure>
            </div>
        </div>
    <?php } ?>
<?php } ?>
            
            </div>

      <div style="width:100%;display:flex;flex-direction:column;gap:8px;min-height:635px; padding-top: 50px"><iframe src="https://quizizz.com/embed/quiz/66667149411db85d69dbf6ca" title="Jangkauan - Quizizz" style="flex:1;" frameBorder="0" allowfullscreen></iframe><a href="https://quizizz.com/admin?source=embedFrame" target="_blank">Explore more at Quizizz.</a></div>

        <div class="content">
              <h1 style="padding-top:20px;">Good Job!!</h1>
              <p style="text-align: center; color= ##3C5B6F">Kamu telah berhasil menyelesaikan semua langkah dalam materi ini. Terima kasih telah mengikuti materi ini dengan baik. Selamat belajar dan semoga sukses dalam menerapkan pengetahuan yang telah diperoleh!</p>
        </div>

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
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>

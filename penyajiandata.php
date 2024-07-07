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

.content {
    text-align: center;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    background-color: #5c67f2;
    color: white;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background-color: #3f4ab8;
}

.content {
    text-align: center;
    margin-bottom: 20px;
}

/* styles.css */
.content {
    text-align: center;
    margin-bottom: 20px;
}
.review {
    background-color: #fff;
    border: 1px solid #888;
    border-radius: 10px;
    padding: 20px;
    max-width: 6000px;
    width: 100%;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.hidden {
    display: none;
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
            <h2>Statistika: Mengungkap Dunia di Sekitarmu!</h2>
            <img src="./img/shrug.png" style="width: 200px; height: 200px; padding-bottom: 10px;">
            <h3>Pernahkah kalian bertanya-tanya</h3>  
            <p style="margin-bottom: 10px;">Coba amatilah data di sekitarmu. Misalnya data nilai ulangan matematika teman sekelas, data tinggi badan anggota keluarga, atau data penjualan produk di toko. Coba bayangkan, bagaimana kamu bisa menggambarkan distribusi data tersebut secara visual?</p>
            
            <p style="padding-top: 20px; padding-bottom: 20px;">Distribusi data menggambarkan cara data terdistribusi atau tersebar dalam sebuah sampel atau populasi. Salah satu cara menyajikan distribusi data adalah dengan box plot. Box plot merupakan salah satu cara menyajukan data numerik melalui lima ukuran yaitu, nilai data terendah (minimum), nilai data tertinggi (maksimum), kuartil bawah atau pertama, kuartil kedua atau median, dan kuartil atas atau ketiga. Selain untuk melihat sebaran data, plot jenis ini juga dapat digunakan untuk mendeteksi outlier atau nilai data yang jauh berbeda dengan nilai data lainnya.</p>    
            <img src="./img/ket box plot.png" style="width: 550px; height: 320px;">
            
            <h3>Mengenal Komponen Box Plot</h3>
            <h4>1. Box</h4>
            <p>Box adalah bagian utama dari boxplot berbentuk persegi panjang yang merupakan bidang yang menyajikan interquartile range (IQR) yang merupakan selisih antara Kuartil ketiga (Q3) dengan Kuartil pertama (Q1) atau IQR = Q3-Q1. IQR menggambarkan ukuran penyebaran data. Semakin panjang bidang IQR menunjukkan data semakin menyebar.</p>
            <h4>2. Whiskers</h4>
            <p>Garis yang merupakan perpanjangan dari box dinamakan dengan whiskers. Whiskers bawah atau kiri menunjukkan nilai yang lebih rendah dari kumpulan data yang berada dalam IQR. Whiskers atas atau kanan menunjukkan nilai yang lebih tinggi dari kumpulan data yang berada dalam IQR. Panjang whiskers = 1.5 x IQR.</p>
            <h4>3. Outlier atau Ekstrim</h4>
            <p  style="padding-bottom: 25px;">Nilai yang berada di atas atau dibawah whisker dinamakan nilai outlier atau ekstrim.</p>

            <div class="label-kuartil">
            <div style="background-color: #FFF2D7; padding-bottom: 20px; margin-left: 80px; margin-right: 80px; border-radius: 60px;">
                <h3 style="padding-top: 30px; color: #3C5B6F;">Mari kita ingat kembali materi kuartil </h3>
                <p>Kuartil adalah nilai yang membagi sekumpulan data yang terurut menjadi empat bagian yang sama. Terdapat tiga buah kuartil yang didapati dari suatu gugus yaitu kuartil 1 (Q1), kuartil 2 (Q2), kuartil 3 (Q3). Untuk mencari kuartil diperlukan rumus:</p>
                <img src="./img/data tunggal.png" style="padding: 35px;">
                <img src="./img/data kelompok.png"  style="padding: 20px;">
                <p style="padding-top: 20px;">Lebih lanjutnya kamu bisa mempelajari materi kuartil secara mandiri.</p>
            </div>

                <p style="padding-top: 30px;">Oke selanjutnya kita akan belajar cara membuat dan membaca atau menafsirkan sebuah box plot.</p>
            
                <h4 style="margin-top: 20px; border: 2px solid #83769c;
    padding: 10px;
    border-radius: 10px; max-width: 250px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f5f5;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    color: #333;
    font-weight: bold;">Cara membuat box plot</h4>
                <h5 style="text-align: center; padding: 20px;">simak video berikut!</h5>
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/ynpantrJ1ds?si=SJZELniNGeJ23hTR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                
                <h4 style="margin-top: 40px; border: 2px solid #83769c;
    padding: 10px;
    border-radius: 10px; max-width: 250px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f5f5;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    color: #333;
    font-weight: bold;">Cara membaca box plot</h4>
                <h5 style="text-align: center; padding: 20px;">simak video berikut!</h5>
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/CJwBPYhl-gg?si=KfJ_Pg97IlJKYk-u" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <h3 style="color: #3C5B6F; padding-top: 40px;">Mari Berkreasi</h3>
            <div style="background-color: #E8DFCA; padding-bottom: 20px; margin-left: 100px; margin-right: 100px; border-radius: 25px;"">
                <p style="padding-bottom: 10px; padding-top: 20px;">Coba buatlah box plot di buku kalian untuk data berikut:</p>
                <p style="word-spacing: 7px;">25, 30, 34, 38, 40, 43, 45, 48, 50, 54, 55, 60</p>
                <p style="padding-top: 20px;">Carilah terlebih dahulu nilai data terendah (minimum), nilai data tertinggi (maksimum), kuartil pertama, kuartil kedua, dan kuartil ketiga dari data tersebut.</p>
            </div>
                
            <p style="padding-top: 30px; padding-bottom: 30px;">Setelah kalian membuat box plot dengan data tersebut, kemudian cocokkanlah dan amatatilah box plot kalian apakah sudah tepat. Gunakan kalkulator grafik berikut!</p>
                
            
           
<!-- Tombol untuk membuka pop-up -->
<button class="button" onclick="openPopup()">Buka Kalkulator Grafik</button>

<!-- Pop-up -->
<div id="popup" class="popup" onmousedown="dragStart(event)">
  <!-- Tombol penutup -->
  <span class="close" onclick="closePopup()">&times;</span>
  <!-- iframe untuk memuat grafik Desmos -->
  <iframe id="iframeDesmos" src="https://www.desmos.com/calculator/urhwowchof?lang=id" width="800" height="600"></iframe>
</div>

<script>
var offsetX, offsetY;
var isDragging = false;

// Fungsi untuk membuka pop-up
function openPopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
}

// Fungsi untuk menutup pop-up
function closePopup() {
  var popup = document.getElementById("popup");
  var iframe = document.getElementById("iframeDesmos");
  popup.style.display = "none";
  // Reset iframe saat pop-up ditutup
  iframe.src = iframe.src;
}

// Fungsi untuk memulai seret
function dragStart(event) {
  isDragging = true;
  var popup = document.getElementById("popup");
  offsetX = event.clientX - popup.offsetLeft;
  offsetY = event.clientY - popup.offsetTop;
  document.addEventListener("mousemove", dragMove);
  document.addEventListener("mouseup", dragEnd);
}

// Fungsi untuk pergerakan seret
function dragMove(event) {
  if (isDragging) {
    var popup = document.getElementById("popup");
    popup.style.left = (event.clientX - offsetX) + "px";
    popup.style.top = (event.clientY - offsetY) + "px";
  }
}

// Fungsi untuk mengakhiri seret
function dragEnd() {
  isDragging = false;
  document.removeEventListener("mousemove", dragMove);
  document.removeEventListener("mouseup", dragEnd);
}
</script>

          <p style="padding-top: 30px; padding-bottom: 20px;">Coba tuliskan tentang apa yang sudah kamu ketahui tentang box plot yang telah kamu buat dan klarifikasikan dengan ide orang lain dengan cara klik icon di bawah.</p>
        
          <?php
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
  
    $pdo = require 'koneksi.php';
    $sql = "SELECT judul, tanggal, nama, email, topik.id, id_user FROM topik
            INNER JOIN users ON topik.id_user = users.id
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
                <figure class="figure" style="margin-bottom: 0; ">
                    <blockquote class="blockquote" style="margin-bottom: 0; ">
                        <p style="margin: 0; ">
                            <a href="kolomkomentar.php?id=<?php echo $data['id']; ?>" style="color: #e0e0e0; text-decoration: none; padding: 10px 20px; border: 2px solid #e0e0e0; border-radius: 5px; display: inline-block; background-color: #83769c;">
                                <?php echo htmlentities($data['judul']); ?> 
                                <?php
                            if ($_SESSION['user']['id'] == $data['id_user']) {?>
                            <!-- Tombol untuk membuka pop-up -->
                            <a href="hapustopik.php?id=<?php echo $data['id'];?>" 
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

      <div style="width:100%; padding-bottom:30px; display:flex;flex-direction:column;gap:8px;min-height:600px; padding-top: 50px"><iframe src="https://quizizz.com/embed/quiz/665dc4f0dd161373a5a6eadb" title="Mengenal Box Plot - Quizizz" style="flex:1;" frameBorder="0" allowfullscreen></iframe><a href="https://quizizz.com/admin?source=embedFrame" target="_blank">Explore more at Quizizz.</a></div>
        
<!-- review -->
    <div class="content">
        <h1 style="padding-bottom:5px;">Good Job!!</h1>
        <p style="text-align: center; color= ##3C5B6F">Kamu telah berhasil menyelesaikan semua langkah dalam materi ini. Terima kasih telah mengikuti materi ini dengan baik. Selamat belajar dan semoga sukses dalam menerapkan pengetahuan yang telah diperoleh!</p>
    </div>

    <script src="review.js"></script>

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


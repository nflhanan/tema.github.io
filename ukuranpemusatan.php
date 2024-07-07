<?php
session_start();
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
            <h2>Visualisasi Data melalui Dot Plot, Histogram, dan Box Plot</h2>
            
            <h3>Perhatikan tabel data nilai ujian siswa berikut!</h3>  
            <img src="./img/tabel.png" style="float: left; margin-left: 100px; margin-right: 2000px; margin-bottom: 10px;">
            <p style="margin-bottom: 30px;">Apa yang dapat kita lihat dari data tersebut? Bagaimana kita bisa menggambarkan data tersebut diberbagai penyajian data? Apa informasi yang dapat kita peroleh dari data tersebut?</p>
            
            <div style="background-color: #FFF3C7; padding: 20px; margin-left: 80px; margin-right: 80px; border-radius: 60px;">
                <h3 style="color: #F2613F;">Ingat Kembali!</h3>
            <p style="padding-bottom: 7px;">Pada materi sebelumnya kalian sudah belajar mengenai apa itu box plot, cara membuat box plot, dan menggunakannya untuk membandingkan himpunan data. Selanjutnya kalian akan belajar mengenai macam penyajian data yang lainnya, yaitu histogram dan dot plot.</p>
            
            <h4>1. Histogram</h4>
            <p>Histogram adalah diagram batang yang menggunakan rentang atau interval saling berhimpit yang nilai data pada sumbu mendatar dan frekuensi pada sumbu tegak. </p>
            <img src="./img/contohhistogram.png" style="width: 250px; height: 230px; padding-top: 10px;">
            <h5 style="text-align: center; padding: 5px;">Gambar Histogram</h5>
            
            <h4>2. Dot Plot</h4>
            <p>Dot plot adalah suatu grafik statistika yang menyajikan distribusi dan variabel numerik yang setiap nilai dalam data dilambangkan dengan titik.</p>
            <img src="./img/dots.png" style="width: 230px; height: 210px; padding-top: 20px;">
            <h5 style="text-align: center; padding: 10px;">Gambar Dot Plot</h5>

            </div>
            
            <h4 style="padding-top: 30px;">Selajutnya kamu akan belajar mengenai perbedaan dari histogram dan dot plot serta cara membuatnya.</h4>
            <h5 style="padding-top: 13px;">Simak video berikut!</h5>
            <iframe width="560" style="padding-top: 10px" height="315" src="https://www.youtube-nocookie.com/embed/QtD3WlSKHwk?si=tLEPScRJ8Q2Xwp1Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
            <h3 style="color: #3C5B6F; padding-top: 40px;">Mari Berkreasi</h3>
            <div style="background-color: #E8DFCA; padding-bottom: 20px; margin-left: 110px; margin-right: 110px; border-radius: 30px;"">
                <p style="padding-bottom: 10px; padding-top: 20px;">Sebuah perusahaan ingin mengevaluasi waktu yang dibutuhkan oleh karyawan untuk menyelesaikan tugas tertentu. Berikut adalah data waktu (dalam menit) yang diperlukan oleh 20 karyawan:</p>
                <p style="word-spacing: 7px;">14, 18, 15, 12, 17, 10, 13, 11, 19, 16, 10, 20, 15, 18, 12, 16, 13, 17, 11, 14, 15, 16, 18, 19, 20, 13, 11, 14, 16, 17</p>
                <p style="padding-top: 20px;">Buatlah visualisasi data menggunakan box plot, histogram, dan dot plot di buku kalian.</p>
            </div>

            <p style="padding-top: 30px; padding-bottom: 30px;">Setelah kalian membuat box plot, histogram, dan dot plot dengan data tersebut, kemudian cocokkanlah dan amatatilah penyajian data kamu apakah sudah tepat. Gunakan kalkulator grafik berikut!</p>

            <button class="button" onclick="openPopup1()">Buka Kalkulator Box Plot</button>

<!-- Pop-up 1 -->
<div id="popup1" class="popup" onmousedown="dragStart(event, 'popup1')">
  <!-- Tombol penutup -->
  <span class="close" onclick="closePopup('popup1')">&times;</span>
  <!-- iframe untuk memuat grafik Desmos -->
  <iframe id="iframeDesmos1" src="https://www.desmos.com/calculator/urhwowchof?lang=id" width="800" height="600"></iframe>
</div>

<script>
var offsetX1, offsetY1;
var isDragging1 = false;

// Fungsi untuk membuka pop-up
function openPopup1() {
  var popup = document.getElementById("popup1");
  popup.style.display = "block";
}

// Fungsi untuk menutup pop-up
function closePopup(id) {
  var popup = document.getElementById(id);
  var iframe = popup.querySelector("iframe");
  popup.style.display = "none";
  // Reset iframe saat pop-up ditutup
  iframe.src = iframe.src;
}

// Fungsi untuk memulai seret
function dragStart(event, id) {
  isDragging1 = true;
  var popup = document.getElementById(id);
  offsetX1 = event.clientX - popup.offsetLeft;
  offsetY1 = event.clientY - popup.offsetTop;
  document.addEventListener("mousemove", dragMove);
  document.addEventListener("mouseup", dragEnd);
}

// Fungsi untuk pergerakan seret
function dragMove(event) {
  if (isDragging1) {
    var popup = document.getElementById("popup1");
    popup.style.left = (event.clientX - offsetX1) + "px";
    popup.style.top = (event.clientY - offsetY1) + "px";
  }
}

// Fungsi untuk mengakhiri seret
function dragEnd() {
  isDragging1 = false;
  document.removeEventListener("mousemove", dragMove);
  document.removeEventListener("mouseup", dragEnd);
}
</script>

<button class="button" onclick="openPopup2()">Buka Kalkulator Histogram</button>

<!-- Pop-up 2 -->
<div id="popup2" class="popup" onmousedown="dragStart(event, 'popup2')">
  <!-- Tombol penutup -->
  <span class="close" onclick="closePopup('popup2')">&times;</span>
  <!-- iframe untuk memuat grafik Desmos -->
  <iframe id="iframeDesmos2" src="https://www.desmos.com/calculator/mug8xrpdii?lang=id" width="800" height="600"></iframe>
</div>

<script>
var offsetX2, offsetY2;
var isDragging2 = false;

// Fungsi untuk membuka pop-up
function openPopup2() {
  var popup = document.getElementById("popup2");
  popup.style.display = "block";
}

// Fungsi untuk memulai seret
function dragStart(event, id) {
  isDragging2 = true;
  var popup = document.getElementById(id);
  offsetX2 = event.clientX - popup.offsetLeft;
  offsetY2 = event.clientY - popup.offsetTop;
  document.addEventListener("mousemove", dragMove);
  document.addEventListener("mouseup", dragEnd);
}

// Fungsi untuk pergerakan seret
function dragMove(event) {
  if (isDragging2) {
    var popup = document.getElementById("popup2");
    popup.style.left = (event.clientX - offsetX2) + "px";
    popup.style.top = (event.clientY - offsetY2) + "px";
  }
}

// Fungsi untuk mengakhiri seret
function dragEnd() {
  isDragging2 = false;
  document.removeEventListener("mousemove", dragMove);
  document.removeEventListener("mouseup", dragEnd);
}
</script>

<button class="button" onclick="openPopup3()">Buka Kalkulator Dot Plot</button>

<!-- Pop-up 3 -->
<div id="popup3" class="popup" onmousedown="dragStart(event, 'popup3')">
  <!-- Tombol penutup -->
  <span class="close" onclick="closePopup('popup3')">&times;</span>
  <!-- iframe untuk memuat grafik Desmos -->
  <iframe id="iframeDesmos3" src="https://www.desmos.com/calculator/adj5eu3m6k?lang=id" width="800" height="600"></iframe>
</div>

<script>
var offsetX3, offsetY3;
var isDragging3 = false;

// Fungsi untuk membuka pop-up
function openPopup3() {
  var popup = document.getElementById("popup3");
  popup.style.display = "block";
}

// Fungsi untuk memulai seret
function dragStart(event, id) {
  isDragging3 = true;
  var popup = document.getElementById(id);
  offsetX3 = event.clientX - popup.offsetLeft;
  offsetY3 = event.clientY - popup.offsetTop;
  document.addEventListener("mousemove", dragMove);
  document.addEventListener("mouseup", dragEnd);
}

// Fungsi untuk pergerakan seret
function dragMove(event) {
  if (isDragging3) {
    var popup = document.getElementById("popup3");
    popup.style.left = (event.clientX - offsetX3) + "px";
    popup.style.top = (event.clientY - offsetY3) + "px";
  }
}

// Fungsi untuk mengakhiri seret
function dragEnd() {
  isDragging3 = false;
  document.removeEventListener("mousemove", dragMove);
  document.removeEventListener("mouseup", dragEnd);
}
</script>

<p style="padding-top: 30px; padding-bottom: 20px;">Mari berdiskusi! Coba tuliskan perbedaan konsep dan penggunaan dari box plot, histogram, dan dot plot. Kapan dan mengapa kita memilih satu metode daripada yang lain? Kemudian klarifikasikan dengan ide orang lain dengan cara klik icon di bawah.</p>
        

<?php 
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
  
    $pdo = require 'koneksi.php';
    $sql = "SELECT judul, tanggal, nama, email, topik3.id, id_user FROM topik3
            INNER JOIN users ON topik3.id_user = users.id
            ORDER BY tanggal DESC";
    $query = $pdo->prepare($sql);
    $query->execute();
    ?>

    <?php while ($data = $query->fetch()) { ?>
        <div class="d-flex flex-column align-items-center mb-1" style="background-color: #685f79; border-radius: 10px; padding: 10px; margin: 2px auto; max-width: 400px; margin-top: 35px;">
            <div class="col-auto">
                <img style="width: 50px; height: 50px; border-radius: 50%;" src="//gravatar.com/avatar/<?php echo md5($data['email']); ?>?s=200&d=monsterid" />
            </div>
            <div class="col text-center">
                <figure class="figure" style="margin-bottom: 0;">
                    <blockquote class="blockquote" style="margin-bottom: 0;">
                        <p style="margin: 0;">
                            <a href="kolomkomentar3.php?id=<?php echo $data['id']; ?>" style="color: #e0e0e0; text-decoration: none; padding: 10px 20px; border: 2px solid #e0e0e0; border-radius: 5px; display: inline-block; background-color: #83769c;">
                                <?php echo htmlentities($data['judul']); ?> 
                                <?php
                            if ($_SESSION['user']['id'] == $data['id_user']) {?>
                            <!-- Tombol untuk membuka pop-up -->
                            <a href="hapustopik3.php?id=<?php echo $data['id'];?>" 
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

            <div style="width:100%;display:flex;flex-direction:column;gap:8px;min-height:635px; padding-top: 40px;"><iframe src="https://quizizz.com/embed/quiz/665ec19d115ab33fdb60cba6" title="Latih pemahaman kamu dengan mengerjakan soal berikut! - Quizizz" style="flex:1;" frameBorder="0" allowfullscreen></iframe><a href="https://quizizz.com/admin?source=embedFrame" target="_blank">Explore more at Quizizz.</a></div>
        
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



</body>
</html>

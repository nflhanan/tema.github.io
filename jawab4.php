<?php
require_once 'cekakses.php';

if (empty($_POST)) {
    header("Location: index.php");
    exit;
}

if (!isset($_POST['id_topik4']) || empty($_POST['id_topik4'])) {
    header("Location: index.php");
    exit;
}

$pdo = require 'koneksi.php';

$sql = "INSERT INTO komentar4 (komentar4, tanggal, id_topik4, id_user)
VALUES (:komentar4, now(), :id_topik4, :id_user)";

$query = $pdo->prepare($sql);
$query->execute(array(
    'komentar4' => $_POST['komentar4'],
    'id_topik4' => $_POST['id_topik4'],
    'id_user' => $_SESSION['user']['id'],
));

header("Location: kolomkomentar4.php?id=". $_POST['id_topik4']);
exit;
?>

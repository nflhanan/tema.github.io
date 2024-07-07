<?php
require_once 'cekakses.php';

if (empty($_POST)) {
    header("Location: index.php");
    exit;
}

if (!isset($_POST['id_topik']) || empty($_POST['id_topik'])) {
    header("Location: index.php");
    exit;
}

$pdo = require 'koneksi.php';

$sql = "INSERT INTO komentar (komentar, tanggal, id_topik, id_user)
VALUES (:komentar, now(), :id_topik, :id_user)";

$query = $pdo->prepare($sql);
$query->execute(array(
    'komentar' => $_POST['komentar'],
    'id_topik' => $_POST['id_topik'],
    'id_user' => $_SESSION['user']['id'],
));

header("Location: kolomkomentar.php?id=". $_POST['id_topik']);
exit;
?>

<?php
require_once 'cekakses.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$pdo = require 'koneksi.php';
$sql = "SELECT * FROM komentar2 WHERE id=:id and id_user=:id_user";
$query = $pdo->prepare($sql);
$query->execute(array(
    'id' => $_GET ['id'],
    'id_user' => $_SESSION['user']['id']
));
$komentar2 = $query->fetch();
if (!$komentar2) {
    header("Location: penyajiandata.php");
    exit;
}

$sqlHapus = "DELETE FROM komentar2 WHERE id=:id and id_user=:id_user";
$queryHapus = $pdo->prepare($sqlHapus);
$queryHapus->execute(array(
    'id' => $_GET ['id'],
    'id_user' => $_SESSION['user']['id']
));

header("Location: kolomkomentar2.php?id=".$komentar2['id_topik2']);
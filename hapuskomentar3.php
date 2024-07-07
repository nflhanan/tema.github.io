<?php
require_once 'cekakses.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$pdo = require 'koneksi.php';
$sql = "SELECT * FROM komentar3 WHERE id=:id and id_user=:id_user";
$query = $pdo->prepare($sql);
$query->execute(array(
    'id' => $_GET ['id'],
    'id_user' => $_SESSION['user']['id']
));
$komentar3 = $query->fetch();
if (!$komentar3) {
    header("Location: penyajiandata.php");
    exit;
}

$sqlHapus = "DELETE FROM komentar3 WHERE id=:id and id_user=:id_user";
$queryHapus = $pdo->prepare($sqlHapus);
$queryHapus->execute(array(
    'id' => $_GET ['id'],
    'id_user' => $_SESSION['user']['id']
));

header("Location: kolomkomentar3.php?id=".$komentar3['id_topik3']);
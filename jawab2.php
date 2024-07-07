<?php
require_once 'cekakses.php';

if (empty($_POST)) {
    header("Location: index.php");
    exit;
}

if (!isset($_POST['id_topik2']) || empty($_POST['id_topik2'])) {
    header("Location: index.php");
    exit;
}

$pdo = require 'koneksi.php';

$sql = "INSERT INTO komentar2 (komentar2, tanggal, id_topik2, id_user)
VALUES (:komentar2, now(), :id_topik2, :id_user)";

$query = $pdo->prepare($sql);
$query->execute(array(
    'komentar2' => $_POST['komentar2'],
    'id_topik2' => $_POST['id_topik2'],
    'id_user' => $_SESSION['user']['id'],
));

header("Location: kolomkomentar2.php?id=". $_POST['id_topik2']);
exit;
?>

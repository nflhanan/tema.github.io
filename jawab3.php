<?php
require_once 'cekakses.php';

if (empty($_POST)) {
    header("Location: index.php");
    exit;
}

if (!isset($_POST['id_topik3']) || empty($_POST['id_topik3'])) {
    header("Location: index.php");
    exit;
}

$pdo = require 'koneksi.php';

$sql = "INSERT INTO komentar3 (komentar3, tanggal, id_topik3, id_user)
VALUES (:komentar3, now(), :id_topik3, :id_user)";

$query = $pdo->prepare($sql);
$query->execute(array(
    'komentar3' => $_POST['komentar3'],
    'id_topik3' => $_POST['id_topik3'],
    'id_user' => $_SESSION['user']['id'],
));

header("Location: kolomkomentar3.php?id=". $_POST['id_topik3']);
exit;
?>

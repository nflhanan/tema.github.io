<?php
require_once 'cekakses.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$pdo = require 'koneksi.php';
$sql = "SELECT * FROM topik3 WHERE id=:id and id_user=:id_user";
$query = $pdo->prepare($sql);
$query->execute(array(
    'id' => $_GET ['id'],
    'id_user' => $_SESSION['user']['id']
));

$topik3 = $query->fetch();
if (!$topik3) {
    header("Location: index.php");
    exit;
}

try {
$pdo->beginTransaction();
$queryHapusKomentar3 = $pdo->prepare("DELETE FROM komentar3 WHERE id_topik3=:id_topik3");
$queryHapusKomentar3->execute(array(
    'id_topik3' => $topik3['id']
));

$sqlHapus = "DELETE FROM topik3 WHERE id=:id AND id_user=:id_user";
$queryHapus = $pdo->prepare($sqlHapus);
$queryHapus->execute(array(
    'id' => $_GET ['id'],
    'id_user' => $_SESSION['user']['id']
));

$pdo->commit();
} catch(Exception $e) {
$pdo->rollBack();
echo $e->getMessage();
exit;
}

header("Location: ukuranpemusatan.php");
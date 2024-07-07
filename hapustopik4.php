<?php
require_once 'cekakses.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$pdo = require 'koneksi.php';
$sql = "SELECT * FROM topik4 WHERE id=:id and id_user=:id_user";
$query = $pdo->prepare($sql);
$query->execute(array(
    'id' => $_GET ['id'],
    'id_user' => $_SESSION['user']['id']
));

$topik4 = $query->fetch();
if (!$topik4) {
    header("Location: index.php");
    exit;
}

try {
$pdo->beginTransaction();
$queryHapusKomentar4 = $pdo->prepare("DELETE FROM komentar4 WHERE id_topik4=:id_topik4");
$queryHapusKomentar4->execute(array(
    'id_topik4' => $topik4['id']
));

$sqlHapus = "DELETE FROM topik4 WHERE id=:id AND id_user=:id_user";
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

header("Location: kuartil.php");
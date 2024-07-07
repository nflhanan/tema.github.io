<?php
require_once 'cekakses.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$pdo = require 'koneksi.php';
$sql = "SELECT * FROM topik2 WHERE id=:id and id_user=:id_user";
$query = $pdo->prepare($sql);
$query->execute(array(
    'id' => $_GET ['id'],
    'id_user' => $_SESSION['user']['id']
));

$topik2 = $query->fetch();
if (!$topik2) {
    header("Location: index.php");
    exit;
}

try {
$pdo->beginTransaction();
$queryHapusKomentar2 = $pdo->prepare("DELETE FROM komentar2 WHERE id_topik2=:id_topik2");
$queryHapusKomentar2->execute(array(
    'id_topik2' => $topik2['id']
));

$sqlHapus = "DELETE FROM topik2 WHERE id=:id AND id_user=:id_user";
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

header("Location: diagrampencar.php");
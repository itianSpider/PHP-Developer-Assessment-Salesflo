<?php
header('Content-Type: application/json');

$host = 'localhost';
$dbname = 'map_app';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT coordinates FROM polygons");
    $polygons = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($polygons);
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>

<?php
header('Content-Type: application/json');
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Connect to your database (update with your credentials)
$host = 'localhost';
$dbname = 'map_app';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert polygon data into the database
    $stmt = $pdo->prepare("INSERT INTO polygons (coordinates) VALUES (:coordinates)");
    $stmt->execute(['coordinates' => json_encode($data['coordinates'])]);

    echo json_encode(['status' => 'success']);
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>

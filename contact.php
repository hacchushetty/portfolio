<?php
// contact-api.php - receives AJAX POST and returns JSON
session_start();
header('Content-Type: application/json; charset=utf-8');


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
echo json_encode(['ok'=>false]); exit;
}


$csrf = $_POST['csrf'] ?? '';
if (empty($_SESSION['csrf']) || !hash_equals($_SESSION['csrf'], $csrf)) {
echo json_encode(['ok'=>false]); exit;
}


$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$msg = trim((string)($_POST['message'] ?? ''));


if ($name === '' || $msg === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo json_encode(['ok'=>false]); exit;
}


// simple rate-limit
$now = time();
$last = $_SESSION['last_contact'] ?? 0;
if ($now - $last < 20) { echo json_encode(['ok'=>false]); exit; }
$_SESSION['last_contact'] = $now;


// DB insert (use env vars in hosting)
$host = getenv('DB_HOST') ?: 'localhost';
$db = getenv('DB_NAME') ?: 'friend_portfolio';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
$pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
$sql = "INSERT INTO contacts (name,email,message,created_at) VALUES (?, ?, ?, NOW())";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name,$email,$msg]);
echo json_encode(['ok'=>true]);
} catch (Exception $e) {
// log to file
@file_put_contents(__DIR__.'/logs/api_errors.log', date('c')." - ".$e->getMessage()."\n", FILE_APPEND);
echo json_encode(['ok'=>false]);
}
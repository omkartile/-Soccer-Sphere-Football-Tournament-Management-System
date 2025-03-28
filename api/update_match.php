<?php
session_start();
require_once '../includes/db_connect.php';
if ($_SESSION['role'] != 'manager' || $_SERVER['REQUEST_METHOD'] != 'POST') {
    http_response_code(403);
    exit;
}
$match_id = $_POST['match_id'];
$score_team1 = $_POST['score_team1'];
$score_team2 = $_POST['score_team2'];
$status = $_POST['status'];
$stmt = $pdo->prepare("UPDATE matches SET score_team1 = ?, score_team2 = ?, status = ? WHERE match_id = ?");
$stmt->execute([$score_team1, $score_team2, $status, $match_id]);
header('Content-Type: application/json');
echo json_encode(['success' => true]);
?>

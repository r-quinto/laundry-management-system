<?php
include 'sql.php';

$data = json_decode(file_get_contents('php://input'), true);
$username = trim($data['username'] ?? '');

if (empty($username)) {
    echo json_encode(['success' => false, 'message' => 'No username provided.']);
    exit;
}

// Optional check
$check = $conn->prepare("SELECT COUNT(*) FROM accounts WHERE username = ?");
$check->bind_param("s", $username);
$check->execute();
$check->bind_result($count);
$check->fetch();
$check->close();

if ($count === 0) {
    echo json_encode(['success' => false, 'message' => 'User not found.']);
    exit;
}

// Proceed to delete
$stmt = $conn->prepare("DELETE FROM accounts WHERE username = ?");
$stmt->bind_param("s", $username);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Deletion failed: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>

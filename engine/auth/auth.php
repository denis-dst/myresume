<?php
include '../db/connect.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        header("Location: ../admin.php"); // Ubah ke admin.php di folder engine
    } else {
        echo "Invalid password";
    }
} else {
    echo "No user found";
}

$conn->close();
?>
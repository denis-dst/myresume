<?php
include 'engine/db/connect.php';

// Ambil data dari formulir
$interest_name = $_POST['interest_name'];

// Simpan data ke tabel interests
$sql = "INSERT INTO interests (interest_name) VALUES ('$interest_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
include 'engine/db/connect.php';

// Ambil data dari formulir
$title = $_POST['title'];
$company = $_POST['company'];
$description = $_POST['description'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

// Simpan data ke tabel experiences
$sql = "INSERT INTO experiences (title, company, description, start_date, end_date) VALUES ('$title', '$company', '$description', '$start_date', '$end_date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

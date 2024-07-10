<?php
include 'engine/db/connect.php';

// Ambil data dari formulir
$degree = $_POST['degree'];
$institution = $_POST['institution'];
$description = $_POST['description'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

// Simpan data ke tabel educations
$sql = "INSERT INTO educations (degree, institution, description, start_date, end_date) VALUES ('$degree', '$institution', '$description', '$start_date', '$end_date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

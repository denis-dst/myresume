<?php
include 'engine/db/connect.php';

// Ambil data dari formulir
$title = $_POST['title'];
$institution = $_POST['institution'];
$date_received = $_POST['date_received'];

// Simpan data ke tabel certifications
$sql = "INSERT INTO certifications (title, institution, date_received) VALUES ('$title', '$institution', '$date_received')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

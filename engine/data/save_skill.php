<?php
include 'engine/db/connect.php';

// Ambil data dari formulir
$skill_name = $_POST['skill_name'];
$proficiency = $_POST['proficiency'];

// Simpan data ke tabel skills
$sql = "INSERT INTO skills (skill_name, proficiency) VALUES ('$skill_name', '$proficiency')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

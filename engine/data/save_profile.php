<?php
include 'engine/db/connect.php';

// Ambil data dari formulir
$name = $_POST['name'];
$title = $_POST['title'];
$description = $_POST['description'];

// Cek apakah ada file foto yang diupload
if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
    move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file);
    $profile_picture = $target_file;
} else {
    $profile_picture = NULL;
}

// Simpan data ke tabel profiles
$sql = "INSERT INTO profiles (name, title, description, profile_picture) VALUES ('$name', '$title', '$description', '$profile_picture')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Resume</title>
</head>
<body>
    <h2>Manage Resume</h2>
    <p>Welcome, <?php echo $_SESSION['username']; ?> | <a href="logout.php">Logout</a></p>
    <!-- Formulir untuk Experience -->
    <h3>Add Experience</h3>
    <form action="save_experience.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="company">Company:</label>
        <input type="text" id="company" name="company" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="start_date">Start Date:</label>
        <input type="text" id="start_date" name="start_date" required><br><br>

        <label for="end_date">End Date:</label>
        <input type="text" id="end_date" name="end_date"><br><br>

        <input type="submit" value="Save">
    </form>

    <!-- Formulir untuk Education -->
    <h3>Add Education</h3>
    <form action="save_education.php" method="POST">
        <label for="degree">Degree:</label>
        <input type="text" id="degree" name="degree" required><br><br>

        <label for="institution">Institution:</label>
        <input type="text" id="institution" name="institution" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="start_date">Start Date:</label>
        <input type="text" id="start_date" name="start_date" required><br><br>

        <label for="end_date">End Date:</label>
        <input type="text" id="end_date" name="end_date"><br><br>

        <input type="submit" value="Save">
    </form>

    <!-- Formulir untuk Skill -->
    <h3>Add Skill</h3>
    <form action="save_skill.php" method="POST">
        <label for="skill_name">Skill Name:</label>
        <input type="text" id="skill_name" name="skill_name" required><br><br>

        <label for="proficiency">Proficiency:</label>
        <input type="text" id="proficiency" name="proficiency" required><br><br>

        <input type="submit" value="Save">
    </form>

    <!-- Formulir untuk Interest -->
    <h3>Add Interest</h3>
    <form action="save_interest.php" method="POST">
        <label for="interest_name">Interest Name:</label>
        <input type="text" id="interest_name" name="interest_name" required><br><br>

        <input type="submit" value="Save">
    </form>

    <!-- Formulir untuk Certification -->
    <h3>Add Certification</h3>
    <form action="save_certification.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="institution">Institution:</label>
        <input type="text" id="institution" name="institution" required><br><br>

        <label for="date_received">Date Received:</label>
        <input type="text" id="date_received" name="date_received" required><br><br>

        <input type="submit" value="Save">
    </form>

    <!-- Formulir untuk Profile -->
    <h3>Edit Profile</h3>
    <form action="save_profile.php" method="POST" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea><br><br>

    <label for="profile_picture">Profile Picture:</label>
    <input type="file" id="profile_picture" name="profile_picture"><br><br>

    <input type="submit" value="Save">
    </form>

</body>
</html>

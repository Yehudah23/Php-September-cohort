<?php
// First, create this table once in phpMyAdmin:
//
// CREATE TABLE students (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(100) NOT NULL,
//     email VARCHAR(150) NOT NULL
// );

require "connect.php";

// CREATE: add a student.
if (isset($_POST["add_student"])) {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);

    if ($name !== "" && $email !== "") {
        $statement = mysqli_prepare($conn, "INSERT INTO students (name, email) VALUES (?, ?)");
        mysqli_stmt_bind_param($statement, "ss", $name, $email);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    }
}

// UPDATE: change a student's name and email.
if (isset($_POST["update_student"])) {
    $id = (int) $_POST["id"];
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);

    $statement = mysqli_prepare($conn, "UPDATE students SET name = ?, email = ? WHERE id = ?");
    mysqli_stmt_bind_param($statement, "ssi", $name, $email, $id);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
}

// DELETE: remove a student.
if (isset($_GET["delete"])) {
    $id = (int) $_GET["delete"];

    $statement = mysqli_prepare($conn, "DELETE FROM students WHERE id = ?");
    mysqli_stmt_bind_param($statement, "i", $id);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
}

// READ: get all students from the database.
$students = mysqli_query($conn, "SELECT id, name, email FROM students ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Student CRUD</title>
</head>
<body>
    <h1>Student CRUD</h1>

    <h2>Add a student</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit" name="add_student">Add</button>
    </form>

    <h2>Students</h2>
    <?php while ($student = mysqli_fetch_assoc($students)): ?>
        <form method="post">
            <input type="hidden" name="id" value="<?= $student["id"] ?>">
            <input type="text" name="name" value="<?= htmlspecialchars($student["name"]) ?>" required>
            <input type="email" name="email" value="<?= htmlspecialchars($student["email"]) ?>" required>
            <button type="submit" name="update_student">Update</button>
            <a href="?delete=<?= $student["id"] ?>" onclick="return confirm('Delete this student?')">Delete</a>
        </form>
    <?php endwhile; ?>
</body>
</html>
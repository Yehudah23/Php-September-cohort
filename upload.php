<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !isset($_FILES['profile_pic']) ||
        $_FILES['profile_pic']['error'] !== UPLOAD_ERR_OK
    ) {
        $message = 'Please select a file to upload.';
    } else {
        $destination_folder = __DIR__ . '/uploads/';

        if (!is_dir($destination_folder) && !mkdir($destination_folder, 0777, true)) {
            $message = 'The upload folder could not be created.';
        } else {
            $file_name = basename($_FILES['profile_pic']['name']);
            $file_path = $destination_folder . $file_name;

            if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $file_path)) {
                $message = 'File saved successfully.';
            } else {
                $message = 'Upload failed.';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <?php if ($message !== ''): ?>
        <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="profile_pic" required>
        <button type="submit">Upload File</button>
    </form>
</body>
</html>
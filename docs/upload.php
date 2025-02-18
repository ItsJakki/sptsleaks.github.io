<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file-upload'])) {
    $allowedExts = array('pdf', 'docx', 'png');
    $fileExt = pathinfo($_FILES['file-upload']['name'], PATHINFO_EXTENSION);

    if (in_array($fileExt, $allowedExts)) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES['file-upload']['name']);
        
        if (move_uploaded_file($_FILES['file-upload']['tmp_name'], $targetFile)) {
            echo "File uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Invalid file type.";
    }
} else {
    echo "No file uploaded.";
}
?>

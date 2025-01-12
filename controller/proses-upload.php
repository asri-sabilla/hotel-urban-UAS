<?php
// Start the session
session_start();

// Define the target directory for uploads
$targetDir = "../upload/";
$targetFile = $targetDir . basename($_FILES["pp"]["name"]);
$uploadOk = 1;

// Check if the uploaded file is a valid image (you can modify this as needed)
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["pp"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size (optional, set your own limit)
if ($_FILES["pp"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats (optional)
if (!in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    // Try to upload the file
    if (move_uploaded_file($_FILES["pp"]["tmp_name"], $targetFile)) {
        // File uploaded successfully, redirect to success page
        
        header("Location: success.php");
        exit();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<?php
include 'conn.php'; // Database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and escape input data
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    // File upload handling
    $target_dir = "uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true); // Create uploads directory if it doesn't exist
    }

    $resume_file = $target_dir . basename($_FILES["resume"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($resume_file, PATHINFO_EXTENSION));

    // Allowed file types
    $allowedTypes = ["pdf", "doc", "docx"];

    if (!in_array($fileType, $allowedTypes)) {
        echo "Error: Only PDF, DOC, and DOCX files are allowed.";
        $uploadOk = 0;
    }

    // Move the uploaded file and insert into database
    if ($uploadOk && move_uploaded_file($_FILES["resume"]["tmp_name"], $resume_file)) {
        $sql = "INSERT INTO applications (full_name, email, phone, resume) 
                VALUES ('$full_name', '$email', '$phone', '$resume_file')";

        if (mysqli_query($conn, $sql)) {
            echo "Application submitted successfully!";
            echo "<br><a href='apply.php'>Go Back</a>"; // Link to go back to the application form
        } else {
            echo "Database Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Invalid request.";
}
?>

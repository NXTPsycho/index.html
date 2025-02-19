<?php
include 'conn.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    // File upload handling
    $target_dir = "uploads/";
    $resume_file = $target_dir . basename($_FILES["resume"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($resume_file, PATHINFO_EXTENSION));

    // Check file type (allow only PDF, DOC, DOCX)
    if ($fileType != "pdf" && $fileType != "doc" && $fileType != "docx") {
        echo "Sorry, only PDF, DOC, and DOCX files are allowed.";
        $uploadOk = 0;
    }

    // Move the uploaded file and insert into database
    if ($uploadOk && move_uploaded_file($_FILES["resume"]["tmp_name"], $resume_file)) {
        $sql = "INSERT INTO job_applications (full_name, email, phone, resume) 
                VALUES ('$full_name', '$email', '$phone', '$resume_file')";
        if (mysqli_query($conn, $sql)) {
            echo "Application submitted successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error uploading file.";
    }
}
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillBridge - Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="animations.css">
    <script defer src="script.js"></script>
    <style>
        body {
        background: url('background.png') no-repeat center center fixed;
        background-size: cover;
        font-family: Arial, sans-serif;
        color: white;
        text-align: center;
        margin: 0;
        padding: 0;
        justify-content: center;
    }
    
    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 50px;
        background: rgba(0, 0, 0, 0.7);
    }
    
    nav ul {
        list-style: none;
        padding: 0;
        display: flex;
    }
    nav ul li {
        margin: 0 15px;
    }
    nav ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }
    
    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
    }

    .apply-container {
    background: #27242e;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    width: 100%;
    max-width: 400px;
    }
    
    .apply-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 100%;
    }

    .apply-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #444;
            border-radius: 5px;
            background: #333;
            color: white;
            font-size: 14px;
        }

        .file-upload {
            background: #444;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }

        .form-group input[type="file"] {
            display: none;
        }

        .file-upload:hover {
            background: #555;
        }

        .submit-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    
        .footer {
        margin-top: 50px;
        padding: 20px;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        text-align: center;
        }
    
        .footer a {
        color: #ff9800;
        text-decoration: none;
        margin: 0 10px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">
            <img src="logo.png" alt="Click to visit SkillBridge.com">
        </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="job-listings.php">Job Listings</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="pricing.php">Pricing</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="apply.php">Apply</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="Sign Up.php" class="btn">Sign Up</a></li>
        </ul>
    </nav>
    <header class="header">
        <div class="container">
            <h1>Application</h1>
            <p>Find your dream job today</p>
        </div>
    </header>

    <div class="apply-section">
    <div class="apply-container">
        <h2>Apply for a Job</h2>
        <form action="process_application.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="full_name">Full Name:</label>
                <input type="text" id="full_name" name="full_name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label>Resume (PDF, DOC, DOCX):</label>
                <label class="file-upload">
                    <input type="file" name="resume" required>
                    Choose File
                </label>
            </div>

            <button type="submit" class="submit-btn">Submit Application</button>
        </form>
    </div>
</div>

    <footer class="footer">
        <div>
            <a href="about.php">About Us</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact Us</a>
        </div>
        <hr>
        <p>&copy; 2025 SkillBridge. All rights reserved.</p>
        <a href="terms.php">Terms & Conditions</a>
        <a href="privacy.php">Privacy Policy</a>
    </footer>
</body>
</php>

<?php
// Database Connection
include 'conn.php';

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashing password

    // Insert Data into Database
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}

// Close connection
$conn->close();
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillBridge - Sign Up</title>
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
    </style>
</head>
<body>
    <nav>
        <a href="index.php">
            <img src="logo.png" alt="Click to visit geeksforgeeks.org">
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

    <form action="Sign Up.php" method="post">
        <div class="formContainer">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 15px"> Remember me
            </label>
            <p>By creating an account you agree to our <a href="terms.php" style="color:dodgerblue">Terms & Privacy</a></p>
            <div>
                <a href="index.php"><button type="button" class="cancel">Cancel</button></a>
                <button type="submit" class="signup">Sign Up</button>
            </div>
        </div>
    </form>

    <script src="script.js"></script>
</body>
</php>

<?php
session_start();

// Database Connection
include 'conn.php';


// Handle Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            echo "<script>alert('Login successful!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Invalid password!');</script>";
        }
    } else {
        echo "<script>alert('No account found with that email!');</script>";
    }
}

$conn->close();
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillBridge - Login</title>
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
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            border-radius: 15px;
            padding: 50px;
            background: rgba(0, 0, 0, 0.8);
        }
        .login-box input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        .login-box button {
            width: 100%;
            padding: 10px;
            background-color: dodgerblue;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .login-box button:hover {
            background-color: #1e90ff;
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

    <div class="login-container">
        <form class="login-box" method="post" action="login.php">
            <h2>Login</h2>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
            <p>Don't have an account? <a href="Sign Up.php" style="color:dodgerblue">Sign Up</a></p>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</php>

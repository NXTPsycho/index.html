<!DOCTYPE html>
<html lang="en">
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

        .courses-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .course-box {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .course-box:hover {
            transform: scale(1.05);
        }
        .course-title {
            font-size: 20px;
            font-weight: bold;
            color: #ff9800;
        }
        .course-description {
            font-size: 16px;
            margin-top: 10px;
        }
        .enroll-button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #ff9800;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
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
    
    
    <h2>Explore Our Free Courses</h2>
    <div class="courses-container">
        <div class="course-box">
            <h3>Digital Skills: Become a Successful Global Gig Worker</h3>
            <p>Learn essential digital skills to thrive in the gig economy.</p>
            <a href="https://www.jobberman.com.gh/learning/courses" style="color:white" class="enroll-button" target="_blank">Enroll Now</a>
        </div>
        
        <div class="course-box">
            <h3>Graphic Design Basics</h3>
            <p>An introductory course on graphic design principles.</p>
            <a href="https://www.atingi.org/" style="color:white" class="enroll-button" target="_blank">Enroll Now</a>
        </div>
        
        <div class="course-box">
            <h3>Financial Literacy Course</h3>
            <p>Understand financial principles to manage personal and business finances.</p>
            <a href="https://www.jobberman.com.gh/learning/courses" style="color:white" class="enroll-button" target="_blank">Enroll Now</a>
        </div>

        <div class="course-box">
            <h3>Soft Skills Training</h3>
            <p>Enhance communication, teamwork, and problem-solving skills.</p>
            <a href="https://www.jobberman.com.gh/learning/courses" style="color:white" class="enroll-button" target="_blank">Enroll Now</a>
        </div>

        <div class="course-box">
            <h3>Introduction to Web Development</h3>
            <p>Learn the basics of HTML, CSS, and JavaScript.</p>
            <a href="https://www.atingi.org/" style="color:white" class="enroll-button" target="_blank">Enroll Now</a>
        </div>

        <div class="course-box">
            <h3>Entrepreneurship Essentials</h3>
            <p>Learn the basics of starting and running a business.</p>
            <a href="https://www.atingi.org/" style="color:white" class="enroll-button" target="_blank">Enroll Now</a>
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
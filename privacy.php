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
    
    <main>
        <section class="container">
          <h1>Privacy Policy</h1>
          <p>Your privacy is important to us. This policy explains how we handle your data.</p>
          <h2>Information We Collect</h2>
          <p>We collect personal information such as your name, email, and usage data.</p>
          <h2>How We Use Your Information</h2>
          <p>We use your data to provide and improve our services, communicate with you, and ensure security.</p>
          <h2>Data Protection</h2>
          <p>We implement security measures to protect your information from unauthorized access.</p>
          <h2>Third-Party Services</h2>
          <p>We may use third-party services that comply with data protection regulations.</p>
          <h2>Contact Us</h2>
          <p>If you have any questions about this policy, contact us at privacy@skillbridge.com.</p>
        </section>
    </main>
    
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
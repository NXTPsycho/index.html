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
      <h1>Terms & Conditions</h1>
      <p>Welcome to SkillBridge. By accessing or using our platform, you agree to comply with and be bound by the following terms and conditions. Please read them carefully before using our services.</p>
      
      <h2>1. Introduction</h2>
      <p>SkillBridge is a job-matching and educational platform designed specifically for individuals without prior work experience, those unable to afford formal education, and young job seekers aged 15-17 looking for internships, mentorship, or employment opportunities.</p>
      
      <h2>2. Eligibility</h2>
      <p>Our platform is exclusively available to users who:</p>
      <ul>
        <li>Have little to no prior work experience and seek employment opportunities.</li>
        <li>Are unable to afford professional courses or formal education.</li>
        <li>Are between the ages of 15-17 and seek internships, mentorship, or approved employment under legal guidelines.</li>
      </ul>
      
      <h2>3. User Accounts</h2>
      <p>To access certain features, you must create an account. You agree to provide accurate and complete information and to update your account details as necessary.</p>
      
      <h2>4. Job Listings and Internships</h2>
      <p>SkillBridge connects users with employers and mentors who align with their skills and experience level. We do not guarantee employment but provide opportunities that match the platform's intended user base.</p>
      
      <h2>5. Child Labor and Compliance</h2>
      <p>SkillBridge follows all applicable labor laws. Any work opportunities for users aged 15-17 comply with regulations regarding permissible tasks, work hours, and educational balance.</p>
      
      <h2>6. Payment and Fees</h2>
      <p>Our platform provides free access to job seekers. Some employers may offer paid positions, but SkillBridge does not charge users for job applications.</p>
      
      <h2>7. Code of Conduct</h2>
      <p>Users must interact respectfully and professionally within the platform. Any fraudulent activity, harassment, or violation of these terms will result in account termination.</p>
      
      <h2>8. Privacy Policy</h2>
      <p>By using SkillBridge, you agree to our Privacy Policy, which outlines how we collect, use, and protect your data.</p>
      
      <h2>9. Limitation of Liability</h2>
      <p>SkillBridge is not responsible for employment disputes, contract negotiations, or job outcomes between users and employers.</p>
      
      <h2>10. Amendments</h2>
      <p>SkillBridge reserves the right to update these terms at any time. Continued use of the platform signifies your acceptance of any modifications.</p>
      
      <h2>11. Contact Information</h2>
      <p>For any questions regarding these terms, please contact us at <a href="mailto:gxcstorm@gmail.com">support@skillbridge.com</a>.</p>
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
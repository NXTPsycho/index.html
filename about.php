<!DOCTYPE php>
<php lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About SkillBridge</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="animations.css">
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
        max-width: 800px;
        margin: auto;
        padding: 20px;
    }
    .founder {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 10px;
    }
    .founder img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 3px solid white;
    }
    .founder h3 {
        margin-top: 10px;
        font-weight: bold;
    }
    .founder p {
        font-style: italic;
        font-size: 14px;
    }
    footer {
        margin-top: 50px;
        padding: 20px;
        background: rgba(0, 0, 0, 0.7);
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
      <img src="logo.png" alt="SkillBridge Logo">
    </a>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="job-listings.php">Job Listings</a></li>
      <li><a href="courses.php">Courses</a></li>
      <li><a href="pricing.php">Pricing</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="apply.php">Apply</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="signup.php" class="btn">Sign Up</a></li>
    </ul>
  </nav>
  
  <section class="about-section">
    <div class="container">
      <h1>About SkillBridge</h1>
      <p>SkillBridge is a platform dedicated to bridging the gap between skilled professionals and top employers worldwide. Our mission is to empower individuals to achieve their career goals while helping businesses discover the best talent.</p>
      <h2>Our Founder</h2>
      <div class="founder">
        <img src="Founder.jpg" alt="Founder Image">
        <h3>Nana Kofi Tutu Osei</h3>
        <p>Founder & CEO, SkillBridge</p>
        <p>With 3+ years of experience in talent acquisition and web development, Nana Kofi Tutu Osei is passionate about connecting underpriveledged or those who seek jobs with opportunities that match their skills and ambitions.</p>
      </div>
    </div>
  </section>

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

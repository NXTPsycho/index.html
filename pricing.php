<!DOCTYPE php>
<php lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pricing | SkillBridge</title>
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
        gap: 20px;
    }

    .job-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
      }
    .job-box {
      background: rgba(0, 0, 0, 0.7);
      border-radius: 10px;
      padding: 20px;
      width: 300px;
      text-align: center;
      transition: transform 0.3s ease;
      }
    .job-box:hover {
      transform: scale(1.05);
      }
      
    .pricing {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 50px;
      }
    
    .pricing-card {
      background: rgba(255, 255, 255, 0.1);
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      width: 250px;
      }
    
    .pricing-card h3 {
      margin-bottom: 10px;
      }
    
    .select-btn {
      background: #ff9800;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      margin-top: 10px;
      border-radius: 5px;
      }
    
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
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

  <header class="header">
    <div class="header">
      <h1>Pricing Plans</h1>
      <p>Flexible and affordable plans tailored to your career goals.</p>
    </div>
  </header>

  <section class="pricing fade-in">
    <div class="container">
      <div class="pricing-card">
        <h3>Basic Plan</h3>
        <p><strong>₵19.99/month</strong></p>
        <p>✔ Access to all courses</p>
        <p>✔ Job listing notifications</p>
        <button class="select-btn hover-grow">Choose Plan</button>
      </div>
      <div class="pricing-card">
        <h3>Pro Plan</h3>
        <p><strong>₵49.99/month</strong></p>
        <p>✔ Everything in Basic</p>
        <p>✔ 1-on-1 mentoring</p>
        <button class="select-btn hover-grow">Choose Plan</button>
      </div>
      <div class="pricing-card">
        <h3>Premium Plan</h3>
        <p><strong>₵99.99/month</strong></p>
        <p>✔ All Pro features</p>
        <p>✔ Guaranteed job placement</p>
        <button class="select-btn hover-grow">Choose Plan</button>
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
    <p>&copy; 2025 SkillBridge. All Rights Reserved.</p>
    <p>
      <a href="terms.php">Terms & Conditions</a> | 
      <a href="privacy.php">Privacy Policy</a>
    </p>
  </footer>
</body>
</php>

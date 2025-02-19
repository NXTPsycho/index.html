<!DOCTYPE php>
<php lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Listings | SkillBridge</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="animations.css">
  <script defer src="script.js"></script>
</head>

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
        .job-title {
            font-size: 20px;
            font-weight: bold;
            color: #ff9800;
        }
        .job-description {
            font-size: 16px;
            margin-top: 10px;
        }
        .apply-button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #ff9800;
            color: white;
            text-decoration: none;
            border-radius: 5px;
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
  
  <section class="job-cards fade-in">
    <header class="header">
    <div class="container">
      <h1>Job Listings</h1>
      <p>Explore exciting job opportunities tailored to your skills.</p>
    </div>
  </header>
  <div class="job-container">
        <div class="job-box">
            <div class="job-title">Volunteer Opportunities</div>
            <div class="job-description">Find volunteer programs to gain experience and make an impact.</div>
            <a href="https://www.volunteermatch.org/search/orgs.jsp?l=Accra%2C+Ghana" class="apply-button" target="_blank">Explore Now</a>
        </div>
        <div class="job-box">
            <div class="job-title">Job Vacancies</div>
            <div class="job-description">Browse job listings in Accra for various industries and skill levels.</div>
            <a href="https://www.jobberman.com.gh/jobs/accra-tema" class="apply-button" target="_blank">Find Jobs</a>
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

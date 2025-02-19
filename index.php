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
        border-radius: 10px;
    }
    
        
        .box-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            border-radius: 10px;
        }
        .box {
            width: 400px;
            height: 200px;
            background-color: rgba(146, 1, 134, 0.9);
            border: 2px solid rgb(249, 248, 250);
            padding: 10px;
            margin: 5px;
            border-radius: 10px;
            text-align: center;
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
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="job-listings.php">Job Listings</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="pricing.php">Pricing</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="apply.php">Apply</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
            <li><a href="Sign Up.php" class="btn">Sign Up</a></li>
        </ul>
    </nav>

    <section class="job-cards fade-in">
    <header class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Welcome to SkillBridge</h1>
            <p>Your gateway to the best job opportunities</p>
        </div>
    </header>

    <section>
        <h2>Discover How SkillBridge Empowers Your Career</h2>
        <p>SkillBridge simplifies your career journey by offering personalized job matches, comprehensive skills courses, and valuable mentorship connections.</p>
    </section>

    <section class="features">
        <h2>Explore Exciting Job Opportunities with SkillBridge</h2>
        <div class="box-container">
            <div class="box">
                <h3>Job Search</h3>
                <p>Find jobs that match your skills and preferences with our AI-driven algorithm.</p>
            </div>
            <div class="box">
                <h3>Courses</h3>
                <p>Access a variety of courses to enhance your skills and career prospects.</p>
                <a href="courses.php"><button>Take Course Now</button></a>
            </div>
            <div class="box">
                <h3>Mentorship</h3>
                <p>Connect with industry experts who can guide you through your professional journey.</p>
            </div>
        </div>
    </section>

    <section class="featured-jobs">
        <h2>Featured Jobs</h2>
        <p>Browse through our top job listings</p>

        <div class="job-cards">

            <div class="box-container">
                <div class="box">
                    <h3>Child Labor</h3>
                    <p><strong>Salary:</strong> ₵6,000/year</p>
                    <p>An oppotunity for any child betweem 15-17 to earn an income.</p>
                    <a href="apply.php"><button>Apply Now</button></a>
                </div>

            <div class="box-container">
                <div class="box">
                    <h3>Graphic Designer</h3>
                    <p><strong>Salary:</strong> ₵40,000/year</p>
                    <p>Create stunning visuals and branding materials for top companies.</p>
                    <a href="apply.php"><button>Apply Now</button></a>
                </div>

            <div class="box-container">
                    <div class="box">
                    <h3>Data Analyst</h3>
                    <p><strong>Salary:</strong> ₵55,000/year</p>
                    <p>Analyze trends and insights to drive business growth.</p>
                    <a href="apply.php"><button>Apply Now</button></a>
            </div>
        </div>
    </section>
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


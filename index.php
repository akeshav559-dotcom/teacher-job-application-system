<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Sunrise Public School | Teacher Job Application System</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="style.css" />
</head>
<body>
<header class="site-header">
<div class="container header-inner">
<div class="brand-wrap">
<div class="logo-icon">S</div>
<div>
<span class="brand-title">Sunrise Public School</span>
<span class="brand-subtitle">Excellence in Education</span>
</div>
</div>
<nav class="main-nav">
<a href="index.php" class="nav-link active">Home</a>
<a href="jobs.php" class="nav-link">Jobs</a>
<a href="apply.php" class="nav-link">Apply Now</a>
<a href="status.php" class="nav-link">Check Status</a>
<a href="#contact" class="nav-link">Contact Us</a>
</nav>
<a href="login.php" class="button button-secondary">Admin Login</a>
</div>
</header>
<main>
<section class="hero-section">
<div class="container hero-grid">
<div class="hero-copy">
<p class="eyebrow">Teacher Job Application System</p>
<h1>Find Your Dream Teaching Job</h1>
<p class="hero-text">Apply for teaching jobs in various schools and build your career in education with Sunrise Public School.</p>
<div class="hero-buttons">
<a href="jobs.php" class="button button-primary">View All Jobs</a>
<a href="apply.php" class="button button-outline">Apply Now</a>
</div>
</div>
<div class="hero-aside">
<div class="info-card">
<div class="info-card-top">
<span class="info-card-title">School Name</span>
<p>Sunrise Public School</p>
</div>
<div class="info-row">
<span class="row-label">Address</span>
<p>123 Education Lane, New Delhi - 110001, India</p>
</div>
<div class="info-row">
<span class="row-label">Phone</span>
<p>+91 98765 43210</p>
</div>
<div class="info-row">
<span class="row-label">Email</span>
<p>info@sunrisepublicschool.edu.in</p>
</div>
</div>
</div>
</div>
</section>
<section class="search-section">
<div class="container search-card">
<form id="jobSearchForm" class="search-form" action="jobs.php" method="GET">
<div class="search-row">
<div class="field">
<label for="query">Job title, keywords...</label>
<input id="query" name="query" type="text" placeholder="Job title, keywords..." />
</div>
<div class="field">
<label for="subject">Select Subject</label>
<select id="subject" name="subject">
<option value="">Select Subject</option>
<option value="math">Math</option>
<option value="science">Science</option>
<option value="english">English</option>
<option value="computer">Computer</option>
</select>
</div>
<div class="field">
<label for="location">Select Location</label>
<select id="location" name="location">
<option value="">Select Location</option>
<option value="newdelhi">New Delhi</option>
<option value="bangalore">Bangalore</option>
<option value="mumbai">Mumbai</option>
<option value="hyderabad">Hyderabad</option>
</select>
</div>
<button type="submit" class="button button-primary search-button">Search Jobs</button>
</div>
</form>
</div>
</section>
<section class="latest-jobs-section">
<div class="container section-header">
<h2>Latest Teaching Job Openings</h2>
<a href="jobs.php" class="view-all">View All Jobs →</a>
</div>
<div class="container cards-grid">
<article class="job-card blue-card">
<div class="job-icon">⌨</div>
<h3>Math Teacher</h3>
<span class="job-company">Sunrise Public School</span>
<p class="job-location">New Delhi, India</p>
<p class="job-salary">₹25,000 - ₹40,000</p>
<a href="apply.php" class="button button-primary small">Apply Now</a>
</article>
<article class="job-card green-card">
<div class="job-icon">⚗</div>
<h3>Science Teacher</h3>
<span class="job-company">Sunrise Public School</span>
<p class="job-location">Bangalore, India</p>
<p class="job-salary">₹28,000 - ₹45,000</p>
<a href="apply.php" class="button button-primary small">Apply Now</a>
</article>
<article class="job-card purple-card">
<div class="job-icon">📚</div>
<h3>English Teacher</h3>
<span class="job-company">Sunrise Public School</span>
<p class="job-location">Mumbai, India</p>
<p class="job-salary">₹24,000 - ₹38,000</p>
<a href="apply.php" class="button button-primary small">Apply Now</a>
</article>
<article class="job-card orange-card">
<div class="job-icon">💻</div>
<h3>Computer Teacher</h3>
<span class="job-company">Sunrise Public School</span>
<p class="job-location">Hyderabad, India</p>
<p class="job-salary">₹26,000 - ₹42,000</p>
<a href="apply.php" class="button button-primary small">Apply Now</a>
</article>
</div>
</section>
<section class="features-section">
<div class="container features-grid">
<div class="feature-card">
<div class="feature-icon">📝</div>
<h3>Easy Application</h3>
<p>Simple and quick online application process.</p>
</div>
<div class="feature-card">
<div class="feature-icon">🛡️</div>
<h3>Secure & Safe</h3>
<p>Your data is protected with top security.</p>
</div>
<div class="feature-card">
<div class="feature-icon">⏱️</div>
<h3>Fast Response</h3>
<p>Get quick updates on your application status.</p>
</div>
<div class="feature-card">
<div class="feature-icon">🌟</div>
<h3>Great Opportunities</h3>
<p>Explore teaching jobs across top schools.</p>
</div>
</div>
</section>
<section class="contact-section" id="contact">
<div class="container contact-card">
<div>
<h2>Contact Us</h2>
<p>Reach out for support, questions, or partnership inquiries.</p>
</div>
<div class="contact-details">
<div><strong>Phone</strong><span>+91 98765 43210</span></div>
<div><strong>Email</strong><span>info@sunrisepublicschool.edu.in</span></div>
</div>
</div>
</section>
</main>
<script src="script.js"></script>
</body>
</html>
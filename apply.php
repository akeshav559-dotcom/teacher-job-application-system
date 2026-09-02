<?php

$conn = mysqli_connect("localhost","root","","teacher_job_system");

if(isset($_POST['apply'])){

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$experience = $_POST['experience'];
$qualification = $_POST['qualification'];
$location = $_POST['location'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$skills = $_POST['skills'];
$current_school = $_POST['current_school'];
$expected_salary = $_POST['expected_salary'];
$notice_period = $_POST['notice_period'];
$address = $_POST['address'];
$about = $_POST['about'];

$resume = $_FILES['resume']['name'];
$tmp_name = $_FILES['resume']['tmp_name'];

move_uploaded_file($tmp_name,"uploads/".$resume);

mysqli_query($conn,"INSERT INTO applications(

full_name,
email,
phone,
subject,
experience,
qualification,
location,
dob,
gender,
skills,
current_school,
expected_salary,
notice_period,
address,
about,
resume

)

VALUES(

'$full_name',
'$email',
'$phone',
'$subject',
'$experience',
'$qualification',
'$location',
'$dob',
'$gender',
'$skills',
'$current_school',
'$expected_salary',
'$notice_period',
'$address',
'$about',
'$resume'

)");

echo "<script>alert('Application Submitted Successfully');</script>";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Apply Now | Sunrise Public School</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#eef3fb;
}

/* NAVBAR */

.navbar{
background:white;
padding:18px 0;
box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.logo-box{
display:flex;
align-items:center;
gap:15px;
}

.logo-circle{
width:75px;
height:75px;
background:#0d6efd;
color:white;
border-radius:20px;
display:flex;
justify-content:center;
align-items:center;
font-size:40px;
font-weight:bold;
}

.school-name{
font-size:32px;
font-weight:bold;
color:#082c75;
}

.school-sub{
color:#666;
font-size:18px;
}

.nav-link{
color:#082c75 !important;
font-size:20px;
font-weight:600;
margin-left:18px;
}

/* HERO */

.hero{
background:linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),
url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1400');

background-size:cover;
background-position:center;
padding:100px 0;
color:white;
text-align:center;
}

.hero h1{
font-size:70px;
font-weight:bold;
}

.hero p{
font-size:24px;
margin-top:20px;
}

/* FORM */

.form-section{
margin-top:-50px;
}

.form-box{
background:white;
padding:50px;
border-radius:25px;
box-shadow:0 5px 25px rgba(0,0,0,0.1);
}

.form-title{
font-size:45px;
font-weight:bold;
color:#082c75;
margin-bottom:35px;
text-align:center;
}

.form-control,
.form-select{
height:65px;
border-radius:12px;
font-size:18px;
margin-bottom:10px;
}

textarea.form-control{
height:120px;
padding-top:15px;
}

.submit-btn{
width:100%;
height:65px;
border:none;
border-radius:14px;
background:#0d6efd;
color:white;
font-size:22px;
font-weight:bold;
transition:0.3s;
}

.submit-btn:hover{
background:#082c75;
}

.info-box{
background:white;
padding:35px;
border-radius:25px;
box-shadow:0 5px 25px rgba(0,0,0,0.1);
height:100%;
}

.info-box h3{
font-size:35px;
font-weight:bold;
color:#082c75;
margin-bottom:30px;
}

.info-item{
display:flex;
gap:20px;
margin-bottom:30px;
}

.info-item i{
font-size:28px;
color:#0d6efd;
}

.info-item h5{
font-weight:bold;
color:#082c75;
}

.info-item p{
color:#666;
font-size:18px;
}

footer{
background:#082c75;
color:white;
text-align:center;
padding:25px;
margin-top:70px;
font-size:20px;
}

@media(max-width:768px){

.hero h1{
font-size:45px;
}

.form-title{
font-size:35px;
}

.form-box{
padding:30px;
}

}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg">

<div class="container">

<div class="logo-box">

<div class="logo-circle">
S
</div>

<div>

<div class="school-name">
Sunrise Public School
</div>

<div class="school-sub">
Excellence in Education
</div>

</div>

</div>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="jobs.php">Jobs</a>
</li>

<li class="nav-item">
<a class="nav-link text-primary" href="apply.php">Apply Now</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Contact Us</a>
</li>

</ul>

</div>

</div>

</nav>

<!-- HERO -->

<section class="hero">

<div class="container">

<h1>Teacher Job Application</h1>

<p>
Apply for your dream teaching job at Sunrise Public School
</p>

</div>

</section>

<!-- FORM -->

<section class="form-section">

<div class="container">

<div class="row g-4">

<!-- LEFT -->

<div class="col-lg-8">

<div class="form-box">

<div class="form-title">
Apply Now
</div>

<form method="POST" enctype="multipart/form-data">

<div class="row g-4">

<!-- FULL NAME -->

<div class="col-md-6">

<input 
type="text"
name="full_name"
class="form-control"
placeholder="Full Name"
required>

</div>

<!-- EMAIL -->

<div class="col-md-6">

<input 
type="email"
name="email"
class="form-control"
placeholder="Email Address"
required>

</div>

<!-- PHONE -->

<div class="col-md-6">

<input 
type="text"
name="phone"
class="form-control"
placeholder="Phone Number"
required>

</div>

<!-- SUBJECT -->

<div class="col-md-6">

<select name="subject" class="form-select" required>

<option value="">Select Subject</option>

<option>Math</option>
<option>Science</option>
<option>English</option>
<option>Computer</option>
<option>Physics</option>
<option>Chemistry</option>
<option>Biology</option>

</select>

</div>

<!-- EXPERIENCE -->

<div class="col-md-6">

<select name="experience" class="form-select" required>

<option value="">Teaching Experience</option>

<option>Fresher</option>
<option>1+ Years</option>
<option>2+ Years</option>
<option>3+ Years</option>
<option>5+ Years</option>

</select>

</div>

<!-- QUALIFICATION -->

<div class="col-md-6">

<input 
type="text"
name="qualification"
class="form-control"
placeholder="Qualification"
required>

</div>

<!-- LOCATION -->

<div class="col-md-12">

<input 
type="text"
name="location"
class="form-control"
placeholder="Preferred Location"
required>

</div>

<!-- DOB -->

<div class="col-md-6">

<input 
type="date"
name="dob"
class="form-control"
required>

</div>

<!-- GENDER -->

<div class="col-md-6">

<select name="gender" class="form-select" required>

<option value="">Select Gender</option>

<option>Male</option>
<option>Female</option>
<option>Other</option>

</select>

</div>

<!-- SKILLS -->

<div class="col-md-6">

<input 
type="text"
name="skills"
class="form-control"
placeholder="Skills"
required>

</div>

<!-- CURRENT SCHOOL -->

<div class="col-md-6">

<input 
type="text"
name="current_school"
class="form-control"
placeholder="Current / Previous School">

</div>

<!-- EXPECTED SALARY -->

<div class="col-md-6">

<input 
type="text"
name="expected_salary"
class="form-control"
placeholder="Expected Salary">

</div>

<!-- NOTICE PERIOD -->

<div class="col-md-6">

<select name="notice_period" class="form-select">

<option value="">Notice Period</option>

<option>Immediate Joining</option>
<option>15 Days</option>
<option>1 Month</option>
<option>2 Months</option>

</select>

</div>

<!-- ADDRESS -->

<div class="col-md-12">

<textarea
name="address"
class="form-control"
placeholder="Full Address"></textarea>

</div>

<!-- ABOUT -->

<div class="col-md-12">

<textarea
name="about"
class="form-control"
placeholder="Tell us about yourself"></textarea>

</div>

<!-- RESUME -->

<div class="col-md-12">

<label style="font-size:18px;font-weight:bold;margin-bottom:10px;">
Upload Resume
</label>

<input 
type="file"
name="resume"
class="form-control"
required>

</div>

<!-- BUTTON -->

<div class="col-md-12 mt-4">

<button type="submit" name="apply" class="submit-btn">
<i class="fa-solid fa-paper-plane"></i>
Submit Application
</button>

</div>

</div>

</form>

</div>

</div>

<!-- RIGHT -->

<div class="col-lg-4">

<div class="info-box">

<h3>Why Join Us?</h3>

<div class="info-item">

<i class="fa-solid fa-graduation-cap"></i>

<div>

<h5>Professional Environment</h5>

<p>
Work with experienced teachers and modern teaching facilities.
</p>

</div>

</div>

<div class="info-item">

<i class="fa-solid fa-money-bill-wave"></i>

<div>

<h5>Good Salary</h5>

<p>
Competitive salary packages with yearly increments.
</p>

</div>

</div>

<div class="info-item">

<i class="fa-solid fa-users"></i>

<div>

<h5>Friendly Staff</h5>

<p>
Supportive management and collaborative teaching culture.
</p>

</div>

</div>

<div class="info-item">

<i class="fa-solid fa-school"></i>

<div>

<h5>Modern Campus</h5>

<p>
Smart classrooms, labs and excellent infrastructure.
</p>

</div>

</div>

</div>

</div>

</div>

</div>

</section>

<footer>
© 2026 Sunrise Public School - Teacher Recruitment System
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
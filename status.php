<?php

$conn = mysqli_connect("localhost","root","","teacher_job_system");

$status = "";
$teacher = null;

if(isset($_POST['check'])){

$email = $_POST['email'];

$query = mysqli_query(
$conn,
"SELECT * FROM applications WHERE email='$email'"
);

if(mysqli_num_rows($query) > 0){

$teacher = mysqli_fetch_assoc($query);

$status = $teacher['status'];

}else{

$status = "Not Found";

}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Teacher Application Status</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#f4f7ff;
overflow-x:hidden;
}

/* HERO */

.hero{

width:100%;
height:420px;

background:
linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1600');

background-size:cover;
background-position:center;

display:flex;
justify-content:center;
align-items:center;

text-align:center;

color:white;

padding:20px;

}

.hero-content h1{

font-size:75px;
font-weight:800;

margin-bottom:15px;

}

.hero-content p{

font-size:24px;

}

/* SEARCH CARD */

.search-card{

width:92%;
max-width:1100px;

background:white;

margin:auto;

margin-top:-70px;

border-radius:35px;

padding:45px;

box-shadow:0 15px 35px rgba(0,0,0,0.12);

position:relative;
z-index:10;

text-align:center;

}

.search-icon{

font-size:65px;

margin-bottom:15px;

}

.search-card h2{

font-size:42px;
color:#0b43c8;

margin-bottom:12px;

}

.search-card p{

font-size:18px;
color:#666;

margin-bottom:30px;

}

.input-group{

display:flex;
align-items:center;

border:2px solid #dbe4ff;

border-radius:20px;

overflow:hidden;

height:75px;

margin-bottom:25px;

}

.input-group span{

width:80px;

font-size:26px;

color:#0b43c8;

text-align:center;

}

.input-group input{

flex:1;

height:100%;

border:none;

outline:none;

font-size:20px;

padding-right:20px;

}

.search-btn{

width:100%;
height:75px;

border:none;

border-radius:20px;

background:linear-gradient(135deg,#0b43c8,#2451d1);

color:white;

font-size:24px;
font-weight:700;

cursor:pointer;

transition:0.3s;

}

.search-btn:hover{

transform:translateY(-4px);

}

/* RESULT CARD */

.result-card{

width:92%;
max-width:1250px;

margin:50px auto;

background:white;

border-radius:35px;

overflow:hidden;

box-shadow:0 15px 35px rgba(0,0,0,0.08);

}

/* STATUS TOP */

.status-top{

padding:45px;

background:linear-gradient(135deg,#0b43c8,#001d6e);

display:flex;
justify-content:space-between;
align-items:center;
flex-wrap:wrap;
gap:30px;

color:white;

}

.left-profile{

display:flex;
align-items:center;
gap:25px;

}

.left-profile img{

width:140px;
height:140px;

border-radius:30px;

background:white;

padding:10px;

}

.left-profile h2{

font-size:45px;
font-weight:800;

margin-bottom:10px;

}

.left-profile p{

font-size:20px;

margin-bottom:10px;

}

.left-profile h4{

font-size:22px;

}

/* STATUS */

.status{

padding:20px 35px;

border-radius:18px;

font-size:30px;
font-weight:700;

}

.pending{

background:#fff4cc;
color:#ff9800;

}

.approved{

background:#d1fae5;
color:#10b981;

}

.evaluating{

background:#fef3c7;
color:#b45309;

}

.rejected{

background:#fee2e2;
color:#ef4444;

}

/* DETAILS */

.details-section{

padding:45px;

}

.details-section h3{

font-size:35px;
color:#0b43c8;

margin-bottom:30px;

}

.details-grid{

display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:25px;

}

.detail-box{

background:#f8fbff;

padding:25px;

border-radius:22px;

border:2px solid #edf2ff;

}

.detail-box h4{

font-size:18px;
color:#0b43c8;

margin-bottom:10px;

}

.detail-box p{

font-size:22px;
font-weight:600;

color:#222;

word-break:break-word;

}

/* DOCUMENT */

.document-box{

margin:0 45px 40px 45px;

padding:30px;

background:#f8fbff;

border-radius:22px;

display:flex;
justify-content:space-between;
align-items:center;
flex-wrap:wrap;
gap:20px;

}

.document-box h3{

font-size:28px;
color:#0b43c8;

margin-bottom:8px;

}

.document-box p{

font-size:18px;
color:#555;

}

/* BUTTONS */

.view-btn{

background:#16a34a;
color:white;

padding:16px 30px;

border-radius:15px;

text-decoration:none;

font-size:18px;
font-weight:700;

}

.bottom-buttons{

display:flex;
justify-content:center;
gap:25px;
flex-wrap:wrap;

padding:0 45px 45px 45px;

}

.download-btn{

background:#0b43c8;
color:white;

padding:18px 35px;

border-radius:18px;

text-decoration:none;

font-size:20px;
font-weight:700;

}

.home-btn{

background:white;

border:2px solid #0b43c8;

color:#0b43c8;

padding:18px 35px;

border-radius:18px;

text-decoration:none;

font-size:20px;
font-weight:700;

}

/* NOT FOUND */

.notfound{

width:700px;
max-width:92%;

background:white;

padding:50px;

border-radius:30px;

margin:50px auto;

text-align:center;

box-shadow:0 10px 30px rgba(0,0,0,0.08);

font-size:40px;
font-weight:700;

color:red;

}

/* FOOTER */

.footer{

margin-top:50px;

background:#0b43c8;

color:white;

text-align:center;

padding:25px;

font-size:18px;

}

/* MOBILE */

@media(max-width:768px){

.hero-content h1{

font-size:48px;

}

.hero-content p{

font-size:18px;

}

.status-top{

flex-direction:column;
text-align:center;

}

.left-profile{

flex-direction:column;

}

.left-profile h2{

font-size:35px;

}

.status{

font-size:22px;

}

.search-card{

padding:30px 20px;

}

}

</style>

</head>

<body>

<!-- HERO -->

<div class="hero">

<div class="hero-content">

<h1>
Application Status
</h1>

<p>
Check your Teacher Job Application Status
</p>

</div>

</div>

<!-- SEARCH CARD -->

<div class="search-card">

<div class="search-icon">
📄
</div>

<h2>
Check Your Application Status
</h2>

<p>
Enter your registered email address to check your application status
</p>

<form method="POST">

<div class="input-group">

<span>
✉
</span>

<input
type="email"
name="email"
placeholder="Enter your registered email address"
required
>

</div>

<button type="submit" name="check" class="search-btn">

🔍 Check Status

</button>

</form>

</div>

<!-- RESULT -->

<?php

if($status != "" && $status != "Not Found"){

?>

<div class="result-card">

<!-- TOP -->

<div class="status-top">

<div class="left-profile">

<img 
src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
>

<div>

<h2>
<?php echo $teacher['full_name']; ?>
</h2>

<p>
<?php echo $teacher['email']; ?>
</p>

<h4>

Application ID:
TCH00<?php echo $teacher['id']; ?>

</h4>

</div>

</div>

<div>

<?php

if($status=="Approved"){

echo "
<div class='status approved'>
✅ Approved
</div>
";

}

elseif($status=="Rejected"){

echo "
<div class='status rejected'>
❌ Rejected
</div>
";

}

elseif($status=="Evaluating"){

echo "
<div class='status evaluating'>
🔎 Evaluating
</div>
";

}

else{

echo "
<div class='status pending'>
⏳ Pending
</div>
";

}

?>

</div>

</div>

<!-- DETAILS -->

<div class="details-section">

<h3>
Application Details
</h3>

<div class="details-grid">

<div class="detail-box">
<h4>Subject</h4>
<p><?php echo $teacher['subject']; ?></p>
</div>

<div class="detail-box">
<h4>Experience</h4>
<p><?php echo $teacher['experience']; ?></p>
</div>

<div class="detail-box">
<h4>Location</h4>
<p><?php echo $teacher['location']; ?></p>
</div>

<div class="detail-box">
<h4>Qualification</h4>
<p><?php echo $teacher['qualification']; ?></p>
</div>

<div class="detail-box">
<h4>Phone Number</h4>
<p><?php echo $teacher['phone']; ?></p>
</div>

<div class="detail-box">
<h4>Email Address</h4>
<p><?php echo $teacher['email']; ?></p>
</div>

</div>

</div>

<!-- DOCUMENT -->

<div class="document-box">

<div>

<h3>
Resume
</h3>

<p>
<?php echo $teacher['resume']; ?>
</p>

</div>

<a 
href="uploads/<?php echo $teacher['resume']; ?>"
target="_blank"
class="view-btn"
>

👁 View Resume

</a>

</div>

<!-- BUTTONS -->

<div class="bottom-buttons">

<a 
href="download_letter.php?id=<?php echo $teacher['id']; ?>"
class="download-btn"
>

⬇ Download Application

</a>

<a 
href="index.php"
class="home-btn"
>

← Back to Home

</a>

</div>

</div>

<?php } ?>

<!-- NOT FOUND -->

<?php

if($status=="Not Found"){

?>

<div class="notfound">

❌ Teacher Application Not Found

</div>

<?php } ?>

<!-- FOOTER -->

<div class="footer">

© 2025 Sunrise Public School. All Rights Reserved.

</div>

</body>

</html>
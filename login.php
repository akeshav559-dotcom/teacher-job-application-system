<?php

$conn = mysqli_connect("localhost","root","","teacher_job_system");

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "admin123"){

header("Location: dashboard.php");

}else{

$error = "Invalid Username or Password";

}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Login | Sunrise Public School</title>

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

background:
linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65)),
url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1400');

background-size:cover;
background-position:center;

height:100vh;
display:flex;
justify-content:center;
align-items:center;

}

/* LOGIN CARD */

.login-card{

width:460px;

background:rgba(255,255,255,0.12);

backdrop-filter:blur(12px);

padding:45px;

border-radius:30px;

border:1px solid rgba(255,255,255,0.2);

box-shadow:0 10px 40px rgba(0,0,0,0.4);

color:white;

}

/* LOGO */

.logo{

text-align:center;
margin-bottom:35px;

}

.logo-circle{

width:100px;
height:100px;

background:white;
color:#0d6efd;

border-radius:30px;

display:flex;
justify-content:center;
align-items:center;

font-size:50px;
font-weight:bold;

margin:auto;
margin-bottom:20px;

box-shadow:0 5px 20px rgba(255,255,255,0.3);

}

.logo h2{

font-size:42px;
font-weight:bold;

margin-bottom:10px;

}

.logo p{

font-size:18px;
color:#ddd;

}

/* ERROR */

.error-box{

background:#ffdddd;
color:red;

padding:14px;

border-radius:12px;

margin-bottom:20px;

text-align:center;

font-size:17px;
font-weight:bold;

}

/* FORM */

.form-group{

position:relative;
margin-bottom:25px;

}

.form-group i{

position:absolute;

left:20px;
top:22px;

font-size:20px;
color:#0d6efd;

}

.form-control{

height:65px;

border:none;

border-radius:16px;

padding-left:55px;

font-size:18px;

}

/* BUTTON */

.login-btn{

width:100%;
height:65px;

border:none;

border-radius:16px;

background:#0d6efd;
color:white;

font-size:22px;
font-weight:bold;

transition:0.3s;

}

.login-btn:hover{

background:#082c75;
transform:translateY(-3px);

}

/* LINKS */

.extra-links{

display:flex;
justify-content:space-between;

margin-top:22px;

}

.extra-links a{

color:white;
text-decoration:none;

font-size:16px;

}

.extra-links a:hover{

text-decoration:underline;

}

/* MOBILE */

@media(max-width:500px){

.login-card{

width:90%;
padding:30px;

}

.logo h2{

font-size:32px;

}

}

</style>

</head>

<body>

<div class="login-card">

<!-- LOGO -->

<div class="logo">

<div class="logo-circle">
S
</div>

<h2>Admin Login</h2>

<p>
Sunrise Public School
</p>

</div>

<!-- ERROR -->

<?php

if(isset($error)){

echo "<div class='error-box'>$error</div>";

}

?>

<!-- FORM -->

<form method="POST">

<div class="form-group">

<i class="fa-solid fa-user"></i>

<input 
type="text"
name="username"
class="form-control"
placeholder="Enter Username"
required>

</div>

<div class="form-group">

<i class="fa-solid fa-lock"></i>

<input 
type="password"
name="password"
class="form-control"
placeholder="Enter Password"
required>

</div>

<button type="submit" name="login" class="login-btn">

<i class="fa-solid fa-right-to-bracket"></i>
Login

</button>

</form>

<!-- LINKS -->

<div class="extra-links">

<a href="index.php">
← Back Home
</a>

<a href="#">
Forgot Password?
</a>

</div>

</div>

</body>

</html>
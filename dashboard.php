<?php

$conn = mysqli_connect("localhost","root","","teacher_job_system");

/* APPROVE */

if(isset($_GET['approve'])){

$id = $_GET['approve'];

mysqli_query(
$conn,
"UPDATE applications SET status='Approved' WHERE id='$id'"
);

header("Location: dashboard.php");
exit();

}

/* EVALUATE */

if(isset($_GET['evaluate'])){

$id = $_GET['evaluate'];

mysqli_query(
$conn,
"UPDATE applications SET status='Evaluating' WHERE id='$id'"
);

header("Location: dashboard.php");
exit();

}

/* REJECT */

if(isset($_GET['reject'])){

$id = $_GET['reject'];

mysqli_query(
$conn,
"UPDATE applications SET status='Rejected' WHERE id='$id'"
);

header("Location: dashboard.php");
exit();

}

$result = mysqli_query($conn,"SELECT * FROM applications ORDER BY id DESC");

$total = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM applications"));

$approved = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM applications WHERE status='Approved'"));

$evaluating = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM applications WHERE status='Evaluating'"));

$rejected = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM applications WHERE status='Rejected'"));

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard | Sunrise Public School</title>

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

/* TOPBAR */

.topbar{

background:#082c75;
padding:20px 40px;

display:flex;
justify-content:space-between;
align-items:center;

color:white;

}

.topbar h2{

font-size:35px;
font-weight:bold;

}

.logout-btn{

background:white;
color:#082c75;

padding:12px 25px;

border-radius:12px;

text-decoration:none;
font-weight:bold;

}

/* STATS */

.stats-section{

padding:40px;

}

.stats-card{

background:white;
padding:35px;

border-radius:25px;

box-shadow:0 5px 20px rgba(0,0,0,0.08);

text-align:center;

height:100%;

}

.stats-card i{

font-size:50px;
color:#0d6efd;

margin-bottom:20px;

}

.stats-card h1{

font-size:50px;
font-weight:bold;
color:#082c75;

}

.stats-card p{

font-size:22px;
color:#666;

}

/* TABLE */

.table-section{

padding:0 40px 40px 40px;

}

.table-box{

background:white;
padding:30px;

border-radius:25px;

box-shadow:0 5px 20px rgba(0,0,0,0.08);

overflow:auto;

}

.table-title{

font-size:38px;
font-weight:bold;

color:#082c75;

margin-bottom:25px;

}

table{

width:100%;

border-collapse:collapse;

}

table th{

background:#0d6efd;
color:white;

padding:18px;

font-size:18px;

}

table td{

padding:16px;

font-size:17px;

border-bottom:1px solid #ddd;

vertical-align:middle;

}

/* RESUME BUTTON */

.resume-btn{

background:#198754;
color:white;

padding:10px 18px;

border-radius:10px;

text-decoration:none;
font-weight:bold;

}

.resume-btn:hover{

background:#146c43;

}

/* STATUS */

.pending{

background:#fff3cd;
color:#ff9800;

padding:8px 18px;

border-radius:30px;

font-weight:600;

display:inline-block;

}

.approved{

background:#d1fae5;
color:#10b981;

padding:8px 18px;

border-radius:30px;

font-weight:600;

display:inline-block;

}

.evaluating{

background:#fef3c7;
color:#b45309;

padding:8px 18px;

border-radius:30px;

font-weight:600;

display:inline-block;

}

.rejected{

background:#fee2e2;
color:#ef4444;

padding:8px 18px;

border-radius:30px;

font-weight:600;

display:inline-block;

}

/* ACTION BUTTONS */

.action{

display:flex;
flex-direction:column;
gap:10px;
align-items:center;

}

.approve-btn{

background:#16a34a;
color:white;

padding:10px 18px;

border-radius:10px;

text-decoration:none;

font-weight:bold;

width:110px;
text-align:center;

}

.evaluate-btn{

background:#f59e0b;
color:white;

padding:10px 18px;

border-radius:10px;

text-decoration:none;

font-weight:bold;

width:110px;
text-align:center;

}

.reject-btn{

background:#dc2626;
color:white;

padding:10px 18px;

border-radius:10px;

text-decoration:none;

font-weight:bold;

width:110px;
text-align:center;

}

/* MOBILE */

@media(max-width:768px){

.topbar{

flex-direction:column;
gap:20px;

}

.topbar h2{

font-size:28px;

}

.table-title{

font-size:28px;

}

}

</style>

</head>

<body>

<!-- TOPBAR -->

<div class="topbar">

<h2>

<i class="fa-solid fa-user-shield"></i>
Admin Dashboard

</h2>

<a href="login.php" class="logout-btn">

<i class="fa-solid fa-right-from-bracket"></i>
Logout

</a>

</div>

<!-- STATS -->

<section class="stats-section">

<div class="row g-4">

<div class="col-lg-3">

<div class="stats-card">

<i class="fa-solid fa-users"></i>

<h1>
<?php echo $total; ?>
</h1>

<p>Total Applications</p>

</div>

</div>

<div class="col-lg-3">

<div class="stats-card">

<i class="fa-solid fa-circle-check"></i>

<h1>
<?php echo $approved; ?>
</h1>

<p>Approved</p>

</div>

</div>

<div class="col-lg-3">

<div class="stats-card">

<i class="fa-solid fa-spinner"></i>

<h1>
<?php echo $evaluating; ?>
</h1>

<p>Evaluating</p>

</div>

</div>

<div class="col-lg-3">

<div class="stats-card">

<i class="fa-solid fa-circle-xmark"></i>

<h1>
<?php echo $rejected; ?>
</h1>

<p>Rejected</p>

</div>

</div>

</div>

</section>

<!-- TABLE -->

<section class="table-section">

<div class="table-box">

<div class="table-title">
Applications List
</div>

<table>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Subject</th>
<th>Experience</th>
<th>Location</th>
<th>Resume</th>
<th>Status</th>
<th>Action</th>

</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td>
<?php echo $row['id']; ?>
</td>

<td>
<?php echo $row['full_name']; ?>
</td>

<td>
<?php echo $row['email']; ?>
</td>

<td>
<?php echo $row['phone']; ?>
</td>

<td>
<?php echo $row['subject']; ?>
</td>

<td>
<?php echo $row['experience']; ?>
</td>

<td>
<?php echo $row['location']; ?>
</td>

<td>

<a 
href="uploads/<?php echo $row['resume']; ?>" 
target="_blank"
class="resume-btn">

<i class="fa-solid fa-file"></i>
View Resume

</a>

</td>

<!-- STATUS -->

<td>

<?php

if($row['status']=="Approved"){

echo "<span class='approved'>Approved</span>";

}

elseif($row['status']=="Rejected"){

echo "<span class='rejected'>Rejected</span>";

}

elseif($row['status']=="Evaluating"){

echo "<span class='evaluating'>Evaluating</span>";

}

else{

echo "<span class='pending'>Pending</span>";

}

?>

</td>

<!-- ACTION -->

<td>

<div class="action">

<a 
href="dashboard.php?approve=<?php echo $row['id']; ?>"
class="approve-btn">

Approve

</a>

<a 
href="dashboard.php?evaluate=<?php echo $row['id']; ?>"
class="evaluate-btn">

Evaluate

</a>

<a 
href="dashboard.php?reject=<?php echo $row['id']; ?>"
class="reject-btn">

Reject

</a>

</div>

</td>

</tr>

<?php } ?>

</table>

</div>

</section>

</body>

</html>
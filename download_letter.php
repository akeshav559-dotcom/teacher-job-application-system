<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"teacher_job_system"
);

require('fpdf/fpdf.php');

$id = $_GET['id'];

$query = mysqli_query(
$conn,
"SELECT * FROM applications WHERE id='$id'"
);

$teacher = mysqli_fetch_assoc($query);

$pdf = new FPDF();

$pdf->AddPage();

/* HEADER */

$pdf->SetFillColor(11,67,200);

$pdf->Rect(0,0,220,40,'F');

$pdf->SetTextColor(255,255,255);

$pdf->SetFont('Arial','B',28);

$pdf->Cell(190,18,'SUNRISE PUBLIC SCHOOL',0,1,'C');

$pdf->SetFont('Arial','',14);

$pdf->Cell(190,0,'Teacher Job Application System',0,1,'C');

$pdf->Ln(25);

/* TITLE */

$pdf->SetTextColor(0,0,0);

$pdf->SetFont('Arial','B',24);

$pdf->Cell(190,20,'TEACHER APPLICATION STATUS',0,1,'C');

$pdf->Ln(10);

/* STATUS SECTION */

if($teacher['status'] == "Approved"){

    $pdf->SetFillColor(220,252,231);

    $pdf->SetTextColor(0,128,0);

    $statusText = "APPLICATION APPROVED";

    $message = "Congratulations!

We are pleased to inform you that your teacher job application has been approved at Sunrise Public School.

You are requested to visit the school campus with your original documents for verification and joining formalities.

Welcome to Sunrise Public School.";

}

elseif($teacher['status'] == "Rejected"){

    $pdf->SetFillColor(255,230,230);

    $pdf->SetTextColor(220,38,38);

    $statusText = "APPLICATION REJECTED";

    $message = "We regret to inform you that your teacher application has been rejected.

Please contact the school administration for more details regarding your application.

Thank you for your interest in Sunrise Public School.";

}

elseif($teacher['status'] == "Evaluating"){

    $pdf->SetFillColor(255,248,220);

    $pdf->SetTextColor(234,179,8);

    $statusText = "APPLICATION UNDER EVALUATION";

    $message = "Your teacher application is currently under evaluation.

Our recruitment team is reviewing your resume and qualifications.

Please wait for further updates from Sunrise Public School.";

}

else{

    $pdf->SetFillColor(255,248,220);

    $pdf->SetTextColor(234,179,8);

    $statusText = "APPLICATION PENDING";

    $message = "Your teacher application is currently pending.

Our recruitment team will verify your details and update your application status soon.

Please wait for further communication from Sunrise Public School.";

}

$pdf->SetFont('Arial','B',20);

$pdf->Cell(190,15,$statusText,0,1,'C',true);

$pdf->Ln(15);

/* TEACHER DETAILS */

$pdf->SetTextColor(0,0,0);

$pdf->SetFont('Arial','B',14);

$pdf->Cell(60,12,'Application ID :');

$pdf->SetFont('Arial','',14);

$pdf->Cell(100,12,'TCH00'.$teacher['id']);

$pdf->Ln();

$pdf->SetFont('Arial','B',14);

$pdf->Cell(60,12,'Teacher Name :');

$pdf->SetFont('Arial','',14);

$pdf->Cell(100,12,$teacher['full_name']);

$pdf->Ln();

$pdf->SetFont('Arial','B',14);

$pdf->Cell(60,12,'Subject :');

$pdf->SetFont('Arial','',14);

$pdf->Cell(100,12,$teacher['subject']);

$pdf->Ln();

$pdf->SetFont('Arial','B',14);

$pdf->Cell(60,12,'Phone Number :');

$pdf->SetFont('Arial','',14);

$pdf->Cell(100,12,$teacher['phone']);

$pdf->Ln();

$pdf->SetFont('Arial','B',14);

$pdf->Cell(60,12,'Email Address :');

$pdf->SetFont('Arial','',14);

$pdf->Cell(100,12,$teacher['email']);

$pdf->Ln();

$pdf->SetFont('Arial','B',14);

$pdf->Cell(60,12,'Qualification :');

$pdf->SetFont('Arial','',14);

$pdf->Cell(
100,
12,
($teacher['qualification'] ?? 'N/A')
);

$pdf->Ln();

$pdf->SetFont('Arial','B',14);

$pdf->Cell(60,12,'Experience :');

$pdf->SetFont('Arial','',14);

$pdf->Cell(
100,
12,
($teacher['experience'] ?? 'N/A')
);

$pdf->Ln();

$pdf->SetFont('Arial','B',14);

$pdf->Cell(60,12,'Location :');

$pdf->SetFont('Arial','',14);

$pdf->Cell(
100,
12,
($teacher['location'] ?? 'N/A')
);

$pdf->Ln();

$pdf->SetFont('Arial','B',14);

$pdf->Cell(60,12,'Gender :');

$pdf->SetFont('Arial','',14);

$pdf->Cell(
100,
12,
($teacher['gender'] ?? 'N/A')
);

$pdf->Ln();

$pdf->SetFont('Arial','B',14);

$pdf->Cell(60,12,'Notice Period :');

$pdf->SetFont('Arial','',14);

$pdf->Cell(
100,
12,
($teacher['notice_period'] ?? 'N/A')
);

$pdf->Ln(20);

/* MESSAGE */

$pdf->SetFont('Arial','',15);

$pdf->SetTextColor(0,0,0);

$pdf->MultiCell(
170,
10,
$message
);

$pdf->Ln(25);

/* SIGNATURE */

$pdf->SetFont('Arial','B',15);

$pdf->Cell(90,10,'HR Signature');

$pdf->Cell(80,10,'School Seal');

$pdf->Ln(20);

/* FOOTER */

$pdf->SetFillColor(11,67,200);

$pdf->Rect(0,270,220,30,'F');

$pdf->SetTextColor(255,255,255);

$pdf->SetFont('Arial','',12);

$pdf->SetY(278);

$pdf->Cell(
190,
10,
'Sunrise Public School | Chennai | +91 9876543210',
0,
1,
'C'
);

/* DOWNLOAD PDF */

$pdf->Output(
'D',
$teacher['status'].'_Teacher_Application.pdf'
);

?>
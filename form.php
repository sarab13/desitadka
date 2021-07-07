<?php
if(isset($_POST['subject'])){
    $name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];
$subject=$_POST['subject'];

$email_from="info@desitadkaedison.com";
$email_subject="$name Sent you a Message";
$email_body="Name: $name\n". 
            "Email: $visitor_email\n". 
            "Message: $message\n";
$to='info@desitadkaedison.com';
$headers="From: $email_from \r\n";
$headers="Reply-To: $visitor_email \r \n";
mail($to,$subject,$email_body,$headers);

    header("Location: index.html");
}
else{

    $name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];
$time=$_POST['time'];
$people=$_POST['people'];
$phone=$_POST['phone'];
$date=$_POST['date'];


$email_from="info@desitadkaedison.com";
$email_subject="New Request For Table Booking";
$email_body="Username: $name\n". 
            "User Email: $visitor_email\n". 
            "Contact No: $phone\n\n".
            "Date: $date\n".
            "Time: $time\n".
            "No. of People: $people\n".
            "Message: $message\n";
$to='info@desitadkaedison.com';
$headers="From: $email_from \r\n";
$headers="Reply-To: $visitor_email \r \n";
mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
}

    
    
?>
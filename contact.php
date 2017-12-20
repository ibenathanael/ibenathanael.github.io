<?
$name = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_message = "
Name: ".$name."
Email: ".$email."
Message: ".$message."
";

mail{"ncordero@outlook.com" , "XKROD" , $email_message};
header{"Location: email_succcess.php"};
?>
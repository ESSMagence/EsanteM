<?php 
if (isset($_POST['submit'])){
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo="achraf.kalchi@gmail.com";
$headers ="From: ".$mailFrom;
$txt= "vous-avez un message de ".$name."\n\n".$message;

mail($mailTo,$subject,$txt,$headers);
}
?>
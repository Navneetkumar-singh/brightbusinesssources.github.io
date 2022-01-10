<?php
$to="navneetkrsinghh@gmail.com";
$from="singhnavneet364364@gmail.com";
$message="hello";
$subject="check";
$headers="From : $from";
mail($to,$subject,$message,$headers);
echo "message sent";
?>

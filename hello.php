<html>
  <head>
  </head>
  <body>
    <h1>hello</h1>
  <?php
$to="navneetkrsinghh@gmail.com";
$from="singhnavneet364364@gmail.com";
$message="hello";
$subject="check";
$headers="From : $from";
mail($to,$subject,$message,$headers);
echo "message sent";
    ?></body>
</html>

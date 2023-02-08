<?php include "header.php";

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$dob=$_POST["bdate"];
$color=$_POST["color"];

echo "<h3>your name is $fname $lname and your birth date is $dob
and your fav color is $color</h3>";
?>
<? include "footer.php" ?>
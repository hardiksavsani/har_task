<? include "header.php";

$fname=$_post["fname"];
$lname=$_post["lname"];
$dob=$_post["bdate"];
$color=$_post["color"];

echo "<h3>your name is $fname $lname and your birth date is $dob
and your fav color is $color</h3>";
?>
<? include "footer.php" ?>
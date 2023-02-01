<? include "header.php" ?>
    <h1>HARDIK IS GOOD BOY.</h1>

<?php
//opening tag
echo "Hardik patel <br>"; 
echo "BBCAP22";
?>
<h2>
    Write PHP code to display the following message.
</h2>
<?php
//opening tag
echo "Hello world! <br>"; 
echo "My name is \"David\"";
?>



<h3> current date.</h3>
<?php
//opening tag
echo date("d.m.Y");
?>

<h3>3,4 variable in php</h3>

<?php 
$title="php is intresting";
echo "<h1>" .$title."</h1>";
?>

<h4>3,5 variable in php</h4>
<?php 
$g1=5;
$g2=4;
$g3=3;

echo"
<table>
<tr>
<th> S.N</th><th>Name</th><th>grade</th>
</tr>
<tr>
<th> 1</th><th>Hardik</th><th>$g1</th>
</tr>
<tr>
<th> 2</th><th>prince</th><th>$g2</th>
</tr>
<tr>
<th> 3</th><th>Sagar</th><th>$g3</th>
</tr>
</table>


";
?>

<h5>4 screenshort of the development environment</h5>
<img src="1.png" alt="">



<? include "footer.php" ?>


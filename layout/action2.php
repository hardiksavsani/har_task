<?php include "header.php";

$name=$_POST["name"];
$age=$_POST["age"];

if ($age >= 18) {
    echo $name . ", is Eligible For Vote";
} else {
    echo $name . ", is not eligible for vote. ";
}

?>
<? include "footer.php" ?>



    

 



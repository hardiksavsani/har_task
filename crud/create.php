<?php

$title = "A simple CRUD app";
include "../layout/header.php";


?>
<form method="post" action="">

<input type="text" name="fname" placeholder="Firstname" required> 
<input type="text" name="lname" placeholder="Lastname" required><br><br>
<input type="text" name="city" placeholder="City" required><br><br>

<select name="groupid" id="">

<option value="BBCAP22">BBCAP22</option>
<option value="BBCAP23">BBCAP23</option>
<option value="BBCAP24">BBCAP24</option>



</select>
<input type="submit" value="submit" name="submit">



</form>

<?php

if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $city = $_POST["city"];
    $groupid = $_POST["groupid"];
    include "db.php";
    $sql = "insert into studentinfo(fname,lname,city,groupid)
    
    values('$fname','$lname','$city','$groupid')" ;

    if($connection->query($sql)===TRUE){
        echo "your information is added successfully";
    }
    else{
        echo "Error:" .$connection->Error;
    }
}


?>




<?php

$title = "A simple CRUD app";
include "../layout/footer.php";


?>
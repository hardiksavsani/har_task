<?php include "header.php"  ?>

<form action="" method="get">
    <div class="row">
        <div class="col">
        <input type="number" name="num1" required placeholder="Enter Your First Number" >  
        </div>
        <div class="col">
        <input type="number" name="num2" required placeholder="Enter Your Second Number"  >  
        </div>
        </div>

       <select name="operator">
        <option value="add">add</option>
        <option value="sub">Substract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
       </select>
       <input type="submit" name="cal" value="calculate" >  
   
    
</form>

<?php
if(isset($_GET["cal"])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];
    switch($operator){
        case "add":
            $result = $num1 + $num2;
            break;
         case "sub":
            $result = $num1 - $num2;
            break;
            case "mul":
            $result = $num1 * $num2;
            break;
            case "div":
            $result = $num1 / $num2;
            break;
        default:
            $result = "Error:you have no selected correct operator";
            
    }    
    }
      if(isset($result)){
                echo "<h2> result: $result </h2>";

   
    }


?> 

<h3>1.Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
</h3>

<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach ($courses as $c)
{
echo "$c, ";
}
sort($courses);
echo "<ul>";
foreach ($courses as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>

<h3>2.The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
Delete an element from the array below:
</h3>

<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach ($courses as $c)
{
echo "$c, ";
unset($courses[2]);
}
sort($courses);
echo "<ul>";
foreach ($courses as $y)
{
   
echo "<li>$y</li>";
}
echo "</ul>";
?>

<h3>3.Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
</h3>
<h5>a) ascending order sort by value
</h5>

<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");


asort($courses3);
foreach($courses3 as $u=>$u_value)
   {
   echo  $u_value;
   echo "<br>";
   }
?>

<h5>b) ascending order sort by Key
</h5>
<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");


ksort($courses3);
foreach($courses3 as $u=>$u_value)
   {
   echo  $u_value;
   echo "<br>";
   }
?>

<h5>c) descending order sort by Value
</h5>
<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");


arsort($courses3);
foreach($courses3 as $u=>$u_value)
   {
   echo  $u_value;
   echo "<br>";
   }
?>
<h5>d) descending order sort by Key
</h5>
<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");


krsort($courses3);
foreach($courses3 as $u=>$u_value)
   {
   echo  $u_value;
   echo "<br>";
   }
?>


<h3>4.Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
</h3>

<?php
$courses=array("php", "html", "javascript", "cms", "project");
print_r( array_change_key_case($courses,CASE_UPPER));
?>

<?php
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
?>


<h3>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
</h3>

<?php
$color['ff0000'] = "Red";
$color['ffc0cb'] = "Pink";
$color['0000ff'] = "Blue";
$color['80080'] = "Purple";
$color['008000'] = "Green";

foreach($color as $x=>$x_value){
    echo $x . "=>" . $x_value . "<br>";
}
?>

<h3>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.
</h3>
<?php
$a = array(
    78,
    60,
    62,
    68,
    71,
    68,
    73,
    85,
    66,
    64,
    76,
    63,
    75,
    76,
    73,
    68,
    62,
    73,
    72,
    65,
    74,
    62,
    62,
    65,
    64,
    68,
    73,
    75,
    79,
    73
);
$sum=array_sum($a);
$count = count($a);
echo "Average temperature:" . $sum / $count;
sort($a);
for($i=0; $i<5; $i++){
    echo $a[$i] . "<br>";
}
rsort($a);
for($i=0;$i<5;$i++){
    echo $a[$i] . "<br>";
}

?>



<?php include "footer.php" ?>
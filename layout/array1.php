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
sort($courses3);
echo  implode($courses3);
?>


<?php include "footer.php" ?>
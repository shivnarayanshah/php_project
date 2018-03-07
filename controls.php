<?php
//if condition 

$age=20;


// nested statements/conditions
 $status= null;
 if ($age<= 11)
 {
 	$status = "child";

 }

 else if($age<=19)
{
	$status="teenage";
}
else if( $age<=40)
{
	$status="adult";
}
else
{
	$status="old";

}

echo $status;
echo"<br>";


// ternary operator

// syntax:
// expression ? true value : false value;

 $result=$age>18 ? "eligible" : "not eligible";
echo "<br>";
echo $result;
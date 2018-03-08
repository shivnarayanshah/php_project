<?php
// associative array

$student=[
	'name'=> "ram sharma",
	'age'=> 30,
	'college'=>"swastik"
];
// accessing associative array elements
echo $student["name"];


echo"<pre>";
var_dump($student);


// replacing array elements value
$student["college"]="kit";
var_dump($student);
echo"</pre>";


echo"<hr>";


//enrolled student list
$students=[
	'ram',
	'shyam',
	'gopal',
	'100',

];

$findstudent="shyam";

if(in_array($findstudent,$students))
{
	echo  $findstudent. "is enrolled";
}
else
{
	echo $findstudent." is not enrolled";
}

echo"<hr>";

$fruits = array(
	'apple',
	'pineapple',
	'mango',
	'orange',
	10002,
	12165,
	100,
	20.55616,
);

$fruits[]= "something else"; // add a new element in array


// check if an element exists or not

if (isset($fruits[11]))
{
	echo $fruits[11];
}
else{echo " no element";};

// removing particular index elements
unset($fruits[4]);


echo "<pre>";
var_dump($fruits);
echo"</pre>";

echo "<hr>";
// accessing array elements randomly 
echo $fruits[2]; // its print mango 
echo "<hr>";

echo " total elements:".count($fruits);// its count the total number of lements 

// removing particular index elements
unset($fruits[4]);



<?php
// multidemensional array



//associative array
$student=[
	'name'=> "ram sharma",
	'age'=> 30,
	'college'=>"swastik"
];
echo "using foreach() in associative array <hr>";
foreach($student as $key => $element)
{
	echo ($key).": $element <hr> ";
}
die;

$fruits=[
	"apple",
	"banana",
	"mango",
	"grapes",
];
// using foreach()
foreach($fruits as $variable)
{
	echo $variable."<hr>";

}
die;

$i=0;
while($i<count($fruits))
{
	echo $fruits[$i]."<br>";
      $i++;
}

 die;

for($i=0; $i<count($fruits); $i++)
{
	echo $fruits[$i]."<hr>";

}
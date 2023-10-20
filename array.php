<form action="array.php" method="GET">
<input type="text" name="name" >
<input type="submit">
</form>


<?php

$name = $_GET["name"];
$score= [
"Osama" => ["Score" =>"90","Grade"=>"A"],
"Majed" => ["Score" =>"80","Grade"=>"B"],
"Anas"  => ["Score" =>"40","Grade"=>"F"],
];

echo "Score: ". $score[$name]["Score"];
echo "<br>";
echo "Grade: " .$score[$name]["Grade"];

/*$family = ["Designer"=>"Osama",
"Programmer"=>"Majed",
"Gamer"=>"Anas"];*/

//echo $family[$xname];


//$family=array("Osama","Majed","Anas");

//Associative Array

//$family[1]="Love";
//$family[3]="Sister";
//echo $family[3];

//echo count($family);
?>
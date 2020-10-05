<?php
echo " Hello world";
echo "</br>";
echo "This is how we proint the line php";

echo "</br>";
define('pi', 3.14)
define('BASE_PATH', 'http://localhost/sept-php')
$num1 = 5;
$num2 = 10;

echo pi;

$sum = $num1 + $num2;
echo "the sum of " . $num1 . " and " . $num2 . " is " . $sum;

$j = 15;

if ($j == 15) {
	echo "the value id correct"
}else{
	echo "The value is error";
}

for ($i=0; $i <= 10; $ <i++) {
	echo $i . "/br";
}


$names = ["john" , "jnis" , "kriti"]
foreach ($names as $key => $value) {
	echo "The name is " .$value;
}



$person = ["name" => "john" , "age" => 20], "country" => "Nepal"];
echo $person['age'];



function getName(){
	echo "John Doe"
}

function getAge(){
	echo 20;
}

getName();
getAge(); 

function getname($name , $age){
	if ($age <=20) {
		return "young";
	}else if($age <= 50){
		return "midle aged";
	}else{
		"Too old";
	}
	
}
echo getname("john" , 20);

?>

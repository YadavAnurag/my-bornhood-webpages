
<?php
include ("head.php");
/*$counter = 1;
do{
$counter+=1;
echo "How are you??";
}while($counter<>10);
for ($i=0; $i < 5; $i++) { 
	echo "string <br />";
}*/
 function FunctionName($val1, $val2)
{
	$sum = $val1+$val2;
	$word = str_word_count("this is string how are you and what can you do for me.");
	print_r($word);
	//echo $user_ip = $_SERVER['REMOTE_ADDR'];
}
$arrayName = array("Name"=>array("anurag","Gopal","AnraugGopal"), "Age"=>array("1","2","3"));
foreach ($arrayName as $element => $inner_array) {
	echo "<strong>$element.</strong>"." <br />";
	foreach ($inner_array as $inner_element) {
		echo $inner_element."<br /> ";
	}
}
$number=3;
switch($number){
	case 1:
		echo "one";
		break;
	case 2:
		echo "two";
		break;
	case 4:
		
		echo "three";
		FunctionName(3,5);
		die("End of the page");
		break;
	default:
	echo "This is the default case";
}
?>

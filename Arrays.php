<?php include "header.php";?>

<?php
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	print_r($age);
	echo "<br>";

	print_r(array_change_key_case($age,CASE_UPPER));
	echo "<br>";

	$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
	print_r(array_chunk($cars,2));
	echo "<br>";

	$cars=array("Volvo","BMW","Toyota");
	$age1=array("25","30","40");
	print_r(array_combine($cars,$age1));
	echo "<br>";

	$a=array("A","Volvo","B","Toyota","A");
	print_r(array_count_values($a));
	echo "<br>";

	$a1=array("a"=>"red","b"=>"blue","c"=>"yellow","d"=>"green");
	$a2=array("e"=>"red","f"=>"blue","g"=>"green");
	$result=array_diff($a1,$a2);
	print_r($result);
	echo "<br>";
?>

<?php require "footer.php";?>
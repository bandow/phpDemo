<?php include "header.php";?>

<?php
 	$arr=array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5);
 	echo json_encode($arr) . "<br>";
?>

<?php
	class Emp{
		public $name="";
		public $hobbies="";
		public $birthdate="";
	}
	$e=new Emp;
	$e->name="sachin";
	$e->hobbies="sports";
	// $e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
    $e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));

	echo json_encode($e);
?>

<?php
  $json= '{"a":1,"b":2,"c":3,"d":4,"e":5}';
  echo "<br>";
  var_dump(json_decode($json));
  echo("<br>");
  var_dump(json_decode($json,true));
?>

<?php require "footer.php";?>
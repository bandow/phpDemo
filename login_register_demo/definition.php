<?php
	// 定义变量并默认设置为空值
	$name = $password = $pwd_again= "";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	   $name = test_input($_POST["name"]);
	   $password = test_input($_POST["password"]);
	   $pwd_again=test_input($_POST["pwd_again"]);
	}

	function test_input($data)
	{
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
?>
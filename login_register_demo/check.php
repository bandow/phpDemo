<?php
	require_once('definition.php');

	//连接数据库
	// 创建连接
	$conn= new mysqli("localhost","root","","test");
	// 检测连接
	if ($conn->connect_error) {
	    die("连接失败: " . $conn->connect_error);
	} 

	if($name && $password){
		$sql = "SELECT * FROM user WHERE name = '$name' and password='$password'"; 
		$result = $conn->query($sql);
		if ($result->num_rows > 0) { 
			echo "<script>alert('登录成功');location='huanying.php?name='+'$name';</script>";
		} 
		echo "<script>alert('用户名密码错误');history.back();</script>"; 
	}else{ 
		echo "<script>alert('用户名密码不能为空');history.back();</script>"; 
	} 

	$conn->close();


?>
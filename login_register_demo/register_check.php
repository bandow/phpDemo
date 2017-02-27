<?php
   
    //连接数据库
    $conn=mysqli_connect("localhost","root","","test");
    if(!$conn){
    	die("Error:". mysqli_connect_error());
    }

	require_once('definition.php');


	if($name==""||$password==""){
		echo "用户名和密码不能为空";
	}else{
		if($password!=$pwd_again){
			echo "密码不同";
		}else{
			$sql = "INSERT INTO user (name, password) VALUES ('$name', '$password')";
			if ($conn->query($sql) === TRUE) {
			    echo "注册成功！";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();
		}
	}

?>
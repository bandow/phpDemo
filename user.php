<?php
	$q=$_GET["q"];
	$conn=mysqli_connect("localhost","root","","member");

	if(!$conn){
		die("Error:".mysqli_error($conn));
	}
	// 定义和用法
	// mysqli_select_db() 函数用于更改连接的默认数据库。
	// 语法
	// mysqli_select_db(connection,dbname);

	// 参数	描述
	// connection	必需。规定要使用的 MySQL 连接。
	// dbname	必需，规定要使用的默认数据库。
	mysqli_select_db($conn,"ajax_demo");

	$sql="SELECT * FROM User WHERE id='$q'";

	$result=mysqli_query($conn,$sql);

	echo "<table border='1'>
	<tr>
	<th>firstname</th>
	<th>firstname</th>
	<th>age</th>
	<th>email</th>

	</tr>";

	while($row=mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>" . $row['firstname'] . "</td>";
		echo "<td>" . $row['firstname'] . "</td>";
		echo "<td>" . $row['age'] . "</td>";
		echo "<td>" . $row['email'] . "</td>";
		echo "</tr>";
	}

	echo "</table>";

	mysqli_close($conn);

?>
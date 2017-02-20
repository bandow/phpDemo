<!-- 注意： 当你创建一个新的数据库时，你必须为 mysqli 对象指定三个参数 (servername, username 和 password)。
Tip: 如果你使用其他端口（默认为3306），为数据库参数添加空字符串，如: new mysqli("localhost", "username", "password", "", port) -->

<?php
	$servername="localhost";
	$username="root";
	$password="";

	$conn=new mysqli($servername,$username,$password);

	if($conn->connect_error){
		echo "连接失败" . $conn->connect_error;
	}

	$sql="CREATE DATABASE Dengcb2";
	if($conn->query($sql)==TRUE){
		echo "数据库创建成功";
	}else{
		echo "Error creating database: " . $conn->error;
	}

    $conn->close();

?>


<?php
	$servername="localhost";
	$username="root";
	$password="";

	$conn=mysqli_connect($servername,$username,$password);

	if(!$conn){
		die("连接失败" . mysqli_connect_error());
	}

	$sql="CREATE DATABASE Dengcb3";
	if(mysqli_query($conn,$sql)){
		echo "数据库创建成功";
	}else{
		echo "Error creating database: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>

<!-- 提示： 使用 PDO 的最大好处是在数据库查询过程出现问题时可以使用异常类来 处理问题。如果 try{ } 代码块出现异常，脚本会停止执行并会跳到第一个 catch(){ } 代码块执行代码。 在以上捕获的代码块中我们输出了 SQL 语句并生成错误信息。 -->

<?php
	$servername="localhost";
	$username="root";
	$password="";

	try{
		$conn=new PDO("mysql:host=$servername;dbname=mysql",$username,$password);
		// 设置 PDO 错误模式为异常 
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		$sql="CREATE DATABASE Dengcb4";
		// 使用 exec() ，因为没有结果返回 
        $conn->exec($sql);
		echo "数据库创建成功<br>";
	}

	catch(PDOExcaption $e){
        echo $sql . "<br>" . $e->getMessage();
	}
	
	$conn=null;
?>


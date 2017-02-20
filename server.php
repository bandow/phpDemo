<!-- 
PHP 连接 MySQL
PHP 5 及以上版本建议使用以下方式连接 MySQL :
MySQLi extension ("i" 意为 improved)
PDO (PHP Data Objects)
如果你需要一个简短的回答，即 "你习惯哪个就用哪个"。
MySQLi 和 PDO 有它们自己的优势：
PDO 应用在 12 种不同数据库中， MySQLi 只针对 MySQL 数据库。
所以，如果你的项目需要在多种数据库中切换，建议使用 PDO ，这样你只需要修改连接字符串和部分查询语句即可。 使用 MySQLi, 如果不同数据库，你需要重新编写所有代码，包括查询。
两者都是面向对象, 但 MySQLi 还提供了 API 接口。
两者都支持预处理语句。 预处理语句可以防止 SQL 注入，对于 web 项目的安全性是非常重要的。
MySQLi 和 PDO 连接 MySQL 实例
在本章节及接下来的章节中，我们会使用以下三种方式来演示 PHP 操作 MySQL:
MySQLi (面向对象)
MySQLi (面向过程)
PDO 
-->
<?php
	$servername="localhost";
	$username="root";
	$password="";

	// 创建连接
	$conn = new mysqli($servername, $username, $password);

	if($conn->connect_error){
		die("连接失败".$conn->connect_error);
	}
	echo "连接成功";
?>


<?php
	$servername="localhost";
	$username="root";
	$password="";

	$conn=mysqli_connect($servername, $username, $password);

	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "连接成功2";

	mysqli_close($conn);
?>

<?php
	$servername="localhost";
	$username="root";
	$password="";

	try{
		$conn=new PDO("mysql:host=$servername;dbname=mysql",$username, $password);
		echo "连接成功3";
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

	$conn = null;
?>


<?php include "header.php";?>

<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="dengcb";

  $conn=new mysqli($servername,$username,$password,$dbname);

  if($conn->connect_error){
  	die("连接失败".$conn->connect_error);
  }
  echo "连接成功";

  $sql="INSERT INTO MyGuests(firstname, lastname, email) VALUES('JOS','DENG','sycbbb@sina.com')";

  if($conn->query($sql) === TRUE){
  	echo "新记录插入成功";
  }else{
  	 echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

?>

<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="dengcb";

	$conn=mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
		die("连接失败".mysqli_connect_error);
	}

	$sql="INSERT INTO MyGuests(firstname,lastname,email) VALUES('deng','bin','469106717@qq.com')";

	if (mysqli_query($conn, $sql)) {
		echo "新记录插入成功";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

?>

<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="dengcb";

	try{
		$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		 // 设置 PDO 错误模式，用于抛出异常
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="INSERT INTO MyGuests(firstname,lastname,email) VALUES('ZHONG','LI','zhong@163.com')";

		$conn->exec($sql);
		echo "新记录插入成功";
	}
	catch(Execption $e){
		echo $sql."<br>" .$e->getMessage();
	}

	$conn=null;
	
?>


<?php require "footer.php";?>
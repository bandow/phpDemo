<!-- 该函数绑定了 SQL 的参数，且告诉数据库参数的值。 "sss" 参数列处理其余参数的数据类型。s 字符告诉数据库该参数为字符串。
参数有以下四种类型:
i - integer（整型）
d - double（双精度浮点型）
s - string（字符串）
b - BLOB（binary large object:二进制大对象） -->


<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="dengcb";

	$conn=new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error){
		die("连接失败" . $conn->connect_error);
	}

	// 预处理及绑定
	$stmt=$conn->prepare("INSERT INTO MyGuests (firstname,lastname,email)VALUES(?,?,?)");
	$stmt->bind_param("sss",$firstname, $lastname, $email);

	// 设置参数并执行
	$firstname = "John11";
	$lastname = "Doe";
	$email = "john@example.com";
	$stmt->execute();

	$firstname = "Mary";
	$lastname = "Moe";
	$email = "mary@example.com";
	$stmt->execute();

	$firstname = "Julie";
	$lastname = "Dooley";
	$email = "julie@example.com";
	$stmt->execute();

	echo "1新记录插入成功";
    
    $stmt->close();
	$conn->close();

?>


<!-- PDO 中的预处理语句
以下实例我们在 PDO 中使用了预处理语句并绑定参数: -->
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="dengcb";

	try{
		$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		// 设置 PDO 错误模式为异常
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		// 预处理 SQL 并绑定参数
		$stmt=$conn->prepare("INSERT INTO MyGuests(firstname,lastname,email)VALUES(:firstname,:lastname,:email)");
		$stmt->bindParam(':firstname',$firstname);
		$stmt->bindParam(':lastname',$lastname);
		$stmt->bindParam(':email',$email);

		//插入数据
		$firstname="dengcb";
		$lastname="bc";
		$email="dengcb@sina.com";
		$stmt->execute();

		$firstname="dengcb1";
		$lastname="bc1";
		$email="dengcb1@sina.com";
		$stmt->execute();

		$firstname="dengcb2";
		$lastname="bc2";
		$email="dengcb2@sina.com";
		$stmt->execute();

		echo "插入数据成功";
	}
	catch(PDOException $e){
	    echo $sql . "<br>" . $e->getMessage();
	}

	$conn=null;
	
?>
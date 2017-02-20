<!-- PHP MySQL 读取数据
从 MySQL 数据库读取数据
SELECT 语句用于从数据表中读取数据:
SELECT column_name(s) FROM table_name -->


<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="dengcb";

	$conn=new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error){
		die("连接失败" . $conn->connect_error);
	}

	$sql="SELECT id, firstname,lastname FROM MyGuests";

	$result=$conn->query($sql);

	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"];
		}
	}else{
		echo "0 个结果";
	}

	$conn->close();
?>


<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Reg date</th></tr>";

class TableRows extends RecursiveIteratorIterator{
	function __construct($it){
    	parent::__construct($it, self::LEAVES_ONLY); 
	}
	function current(){
		return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
	}
	 function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
}
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="dengcb";

try{
	$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$stmt=$conn->prepare("SELECT * FROM MyGuests");
	$stmt->execute();

	// 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
    $dsn = null;
}

catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}

$conn=null;

echo "</table>";
?>
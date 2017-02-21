<!-- PHP MySQL Order By 关键词
ORDER BY 关键词用于对记录集中的数据进行排序。
ORDER BY 关键词
ORDER BY 关键词用于对记录集中的数据进行排序。
ORDER BY 关键词默认对记录进行升序排序。
如果你想降序排序，请使用 DESC 关键字。
语法
SELECT column_name(s)
FROM table_name
ORDER BY column_name(s) ASC|DESC -->


<!-- 插数据 -->
<?php
  $servername="localhost";
  $username="root";
  $password="";

  $conn=new mysqli($servername,$username,$password);

  if($conn->connect_error){
  	die("Error:".$conn->connect_error);
  }

  $sql="CREATE DATABASE Member";

  if($conn->query($sql)==TRUE){
  	echo "database create success"."<br>";
  }else{
  	echo "Error creating database: " . $conn->error."<br>";
  }

  $conn->close();
?>

<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="Member";

  $conn=mysqli_connect($servername,$username,$password,$dbname);

  if(!$conn){
    die("Error:".mysqli_connect_error());
  }

  $sql="CREATE TABLE User(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    age VARCHAR(30),
    email VARCHAR(50),
    reg_date TIMESTAMP
  )";

  if(mysqli_query($conn,$sql)){
    echo "create table success"."<br>";
  }else{
    echo "Error:". mysqli_error($conn)."<br>";
  }

  mysqli_close($conn);
?>

<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="Member";

  try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO User(firstname,lastname,age,email) VALUES ('deng','chengbin',30,'sycbbb@sina.com')";
    // 使用 exec() ，没有结果返回 
    $conn->exec($sql);
    echo "insert success"."<br>";
  }
  catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();
  }
  
  $conn=null;
?>

<?PHP
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="Member";

  try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt=$conn->prepare("INSERT INTO User(firstname,lastname,age,email) VALUES(:firstname, :lastname, :age, :email)");

    $stmt->bindParam(':firstname',$firstname);
    $stmt->bindParam(':lastname',$lastname);
    $stmt->bindParam(':age',$age);
    $stmt->bindParam(':email',$email);

    $firstname="huang";
    $lastname="erxiao";
    $age=23;
    $email="dfsjk@sina.com";
    $stmt->execute();

    $firstname="huang1";
    $lastname="erxiao1";
    $age=24;
    $email="dfsjk1@sina.com";
    $stmt->execute();

    $firstname="huang2";
    $lastname="erxiao2";
    $age=24;
    $email="dfsjk2@sina.com";
    $stmt->execute();

    $firstname="huang3";
    $lastname="erxiao3";
    $age=25;
    $email="dfsjk3@sina.com";
    $stmt->execute();

    $firstname="huang4";
    $lastname="erxiao4";
    $age=26;
    $email="dfsjk4@sina.com";
    $stmt->execute();

    echo "execute success." . "<br>";
  }

  catch(PDOException $e){
    echo $sql ."<br>" .$e->getMessage();
  }

  $conn=null;
?>

<?PHP
  $conn=mysqli_connect("localhost","root","","member");
  if(mysqli_connect_errno()){
    die("Error:".mysqli_connect_errno());
  }
  $result=mysqli_query($conn,"SELECT * FROM User ORDER BY age");

  while($row=mysqli_fetch_array($result)){
    echo $row['firstname'] . PHP_EOL;
    echo $row['lastname']. PHP_EOL;
    echo $row['age']. PHP_EOL;
    echo $row['email'] . "<br>";
  }

  mysqli_close($conn);

?>
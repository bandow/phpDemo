<?php
	//mysqli_connect() 函数打开一个到 MySQL 服务器的新的连接。
	//mysqli_connect(host,username,password,dbname,port,socket);
	$conn=mysqli_connect("localhost","root","","dengcb");
    
    //mysqli_connect_errno() 函数返回上一次连接错误的错误代码。 语法：mysqli_connect_errno()
	if(mysqli_connect_errno()){

		//mysqli_connect_error() 函数返回上一次连接错误的错误描述。语法：mysqli_connect_error();
		echo "Error:".mysqli_connect_error();
	}

    //mysqli_query() 函数执行某个针对数据库的查询。
    //mysqli_query(connection,query,resultmode);
	$result=mysqli_query($conn,"SELECT * FROM myguests WHERE firstname='dengcb1'");

    //mysqli_fetch_array() 函数从结果集中取得一行作为关联数组，或数字数组，或二者兼有。 
    //mysqli_fetch_array(result,resulttype);
	while($row=mysqli_fetch_array($result)){
       echo $row['firstname'] .PHP_EOL. $row['email'];
       echo "<br>";
	}

?>
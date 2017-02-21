<!-- PHP MySQL Delete
DELETE 语句用于从数据库表中删除行。
删除数据库中的数据
DELETE FROM 语句用于从数据库表中删除记录。
语法
DELETE FROM table_name
WHERE some_column = some_value
注释：请注意 DELETE 语法中的 WHERE 子句。WHERE 子句规定了哪些记录需要删除。如果您想省去 WHERE 子句，所有的记录都会被删除！ -->
<?php
	$conn=mysqli_connect("localhost","root","","member");

	if(mysqli_connect_errno()){
		echo "Error:".mysqli_connect_error();
	}

	mysqli_query($conn,"DELETE FROM User WHERE age=169");
	mysqli_close($conn);
?>
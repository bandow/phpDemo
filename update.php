<!-- 更新数据库中的数据
UPDATE 语句用于更新数据库表中已存在的记录。
语法
UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value
注释：请注意 UPDATE 语法中的 WHERE 子句。WHERE 子句规定了哪些记录需要更新。如果您想省去 WHERE 子句，所有的记录都会被更新！ -->

<?php
  $conn=mysqli_connect("localhost","root","","member");

  if(mysqli_connect_errno()){
  	echo "Error". mysqli_connect_error();
  }

  mysqli_query($conn,"UPDATE User SET age=69 WHERE firstname='deng' AND lastname='chengbin' AND email='sycbbb@sina.com'");

  mysqli_close($conn);
?>
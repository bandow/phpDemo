<?php
	$q=$_GET["q"];

	$conn=mysqli_connect("localhost","root","","member");

	if(!$conn){
		die("Error:".mysqli_error($conn));
	}

	$sql="SELECT firstname FROM User";

	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_array($result)){
		echo $row['firstname']."<br>";
	}

	mysqli_close($conn);

?>
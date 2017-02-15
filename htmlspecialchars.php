<style>
	.error{color:red;}
</style>
<?php include "header.php";?>

<?php
 $nameErr=$emailErr=$genderErr=$websiteErr="";
 $name=$email=$website=$comment=$gender="";

 if($_SERVER["REQUEST_METHOD"] =="POST"){
 	if(empty($_POST["name"])){
        $nameErr="不能为空";
 	}else{
 		$name=test_input($_POST["name"]);
 		if(!preg_match("/^[a-zA-Z ]*$/",$name)){
 			$nameErr="只允许字母和空格";
 		}
 	}

 	if(empty($_POST["email"])){
 		$emailErr="不能为空";
 	}else{
 		$email=test_input($_POST["email"]);
 		if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
 			$emailErr="非法邮箱格式";
 		}
 	}

 	if(empty($_POST["website"])){
 		$website="";
 	}else{
 		$website=test_input($_POST["website"]);
 		if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
 			$websiteErr="非法的 URL 的地址";
 		}
 	}
 	
 	if(empty($_POST["comment"])){
        $comment="";
 	}else{
 		$comment=test_input($_POST["comment"]);
 	}
 	
 	if(empty($_POST["gender"])){
        $genderErr="不能为空";
 	}else{
 		$gender=test_input($_POST["gender"]);
 	}
	
 }

 function test_input($data){
   $data=trim($data);
   $data=stripslashes($data);
   $data=htmlspecialchars($data);
   return $data;
 }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	名字: <input type="text" name="name" value="<?php echo $name; ?>"> <span class="error"><?php echo $nameErr;?></span>
	<br><br>
	E-mail: <input type="text" name="email" value="<?php echo $email; ?>"><span class="error"><?php echo $emailErr;?></span>
	<br><br>
	网址: <input type="text" name="website" value="<?php echo $website;?>"><span class="error"><?php echo $websiteErr;?></span>
	<br><br>
	备注: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
	<br><br>
	性别:
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="女") echo "checked";?>  value="女">女
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="男") echo "checked";?> value="男">男 <span class="error"><?php echo $genderErr;?></span>
	<br><br>
	<input type="submit" name="submit" value="Submit"> 
</form>

<?php
   echo "名字：". $name ."<br>";
   echo "E-mail:". $email ."<br>";
   echo "网址:". $website ."<br>";
   echo "备注: ". $comment ."<br>";
   echo "性别:". $gender ."<br>";
?>

<?php include "footer.php"; ?>
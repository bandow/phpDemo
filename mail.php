<?php include 'header.php';?>

<!-- PHP mail() 函数
PHP mail() 函数用于从脚本中发送电子邮件。
语法
mail(to,subject,message,headers,parameters) -->

<?php

   function spamcheck($field){
   		// filter_var() 过滤 e-mail
		// 使用 FILTER_SANITIZE_EMAIL
   		$field=filter_var($field,FILTER_SANITIZE_EMAIL);
   		//filter_var() 过滤 e-mail
		// 使用 FILTER_VALIDATE_EMAIL
   		if(filter_var($field,FILTER_VALIDATE_EMATL)){
   			return TRUE;
   		}else{
   			return FALSH;
   		}
   }

   if(isset($_REPUEST["email"])){
   		// 如果接收到邮箱参数则发送邮件
    	// 判断邮箱是否合法
		$mailcheck = spamcheck($_REQUEST['email']);
		if ($mailcheck==FALSE){
			echo "非法输入";
		}else{	
	   		$email=$_REPUEST["email"];
	   		$subject=$_REQUEST["subject"];
	   		$message=$_REQUEST["message"];
	   		mail("sycbbb@sina.com",$subject,$message,"From:" . $email);
	   		echo "邮件发送成功";
   	    }
   }else{
   		echo "<form method='post' action='mailform.php'>
		Email: <input name='email' type='text'><br>
		Subject: <input name='subject' type='text'><br>
		Message:<br>
		<textarea name='message' rows='15' cols='40'>
		</textarea><br>
		<input type='submit'>
		</form>";
   }
?>

<?php require 'footer.php';?>
<?php include "header.php";?>

<?php
  // 创建一个有异常处理的函数
   function checkNum($number)
   {
	   	if($number>1)
	   	{
	   		throw new Exception("value must be 1 or below");
	   	}
	   	return true;
   }
   //触发异常
   try{
   	   checkNum(2);
   	   echo "如果输出该内容，说明 $number 变量";
   }

   catch(Exception $e){
   	  echo "Message:" . $e->getMessage() ."<br>";
   }
   
?>




<!-- 创建一个自定义的 Exception 类
创建自定义的异常处理程序非常简单。我们简单地创建了一个专门的类，当 PHP 中发生异常时，可调用其函数。该类必须是 exception 类的一个扩展。
这个自定义的 customException 类继承了 PHP 的 exception 类的所有属性，您可向其添加自定义的函数。
我们开始创建 customException 类： -->

<?php
	class customException extends Exception{
		public function errorMessage(){
			// 错误信息
	        $errorMsg = '错误行号 '.$this->getLine().' in '.$this->getFile()
	        .': <b>'.$this->getMessage().'</b> 不是一个合法的 E-Mail 地址';
	        return $errorMsg;
		}
	}

	$email = "someone@example...com";

	try{
		if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
			throw new customException($email);
		}

		// 检测 "example" 是否在邮箱地址中
		if(strpos($email,"example")!==FALSE){
			throw new Exception("$email 是example的邮箱");
		}
	}

	catch(customException $e){
		echo $e->errorMessage();
	}
	catch(Exception $e){
		echo $e->getMessage();
	}

?>


<?php require "footer.php";?>
<?php include "header.php";?>

<!-- 语法
error_function(error_level,error_message,error_file,error_line,error_context) -->

<?php
	if(!file_exists("welcome.txt")){
		die("文件不存在");
	}else{
		$file=fopen("welcome.txt","r");
		echo fgets($file). "<br>";
	}
?>


<?php
	// 错误处理函数
	function customError($errno,$errstr){
		echo "<b>Error:</b> [$errno] $errstr <br>";
	}
	// 设置错误处理函数
	set_error_handler("customError");
    // 触发错误
	echo($test);
?>

<!-- 由于我们希望我们的自定义函数能处理所有错误，set_error_handler() 仅需要一个参数，可以添加第二个参数来规定错误级别。 -->

<?php
  $test=2;
  if($test>1){
  	trigger_error("变量值必须小于等于 1");
  }
?>

<!-- 您可以在脚本中任何位置触发错误，通过添加的第二个参数，您能够规定所触发的错误级别。
可能的错误类型：
E_USER_ERROR - 致命的用户生成的 run-time 错误。错误无法恢复。脚本执行被中断。
E_USER_WARNING - 非致命的用户生成的 run-time 警告。脚本执行不被中断。
E_USER_NOTICE - 默认。用户生成的 run-time 通知。在脚本发现可能有错误时发生，但也可能在脚本正常运行时发生。 -->

<?php
	function customError1($errno,$errstr){
		//echo "<b>Error:</b> [$errno] $errstr <br>";
		// echo "脚本停止";
		// die();
		echo "<b>Error:</b> [$errno] $errstr<br>";
		echo "已通知网站管理员";
		error_log("Error: [$errno] $errstr",1,"someone@example.com","From: webmaster@example.com");
	}
    set_error_handler("customError1",E_USER_WARNING);
    $test=2;
    if($test>1){
    	trigger_error("变量值必须小于等于 1",E_USER_WARNING);
    }
?>



<?php require "footer.php";?>
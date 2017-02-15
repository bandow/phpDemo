<?php
 session_start();
 if(isset($_SESSION["views"])){
    $_SESSION["views"]=$_SESSION["views"]+1; 
 }else{
 	 $_SESSION["views"]=1;
 }
?>

<!-- 销毁 Session
如果您希望删除某些 session 数据，可以使用 unset() 或 session_destroy() 函数。
unset() 函数用于释放指定的 session 变量： -->

<?php
	session_start();
	if(isset($_SESSION["views"])){
		unset($_SESSION["views"]);
	}
?>
<!-- 您也可以通过调用 session_destroy() 函数彻底销毁 session：-->
<?php session_destroy();?>


<?php include 'header.php';?>

<?php
  echo "浏览".$_SESSION["views"];
?>

<?php require 'footer.php';?>
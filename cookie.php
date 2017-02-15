<!-- 如何创建 Cookie？
setcookie() 函数用于设置 cookie。
注释：setcookie() 函数必须位于 <html> 标签之前。
语法
setcookie(name, value, expire, path, domain); -->


<?php

 setcookie("member","dengcb",time()+3600);

 $expire=time()+60*60*24*30;
 setcookie("user","runoob",$expire);

 echo $_COOKIE["user"] . "<br>";
 print("<pre>");
 print_r($_COOKIE);
 print("</pre>")

?>

<?php
// 设置 cookie 过期时间为过去 1 小时
setcookie("member", "", time()-3600);
?>

<?php

	if(isset($_COOKIE["member"])){
		echo "欢迎" . $_COOKIE["member"];
	}else{
		echo "普通游客";
	}

?>

<?php include 'header.php';?>
<?php include 'footer.php';?>
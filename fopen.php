<?php include "header.php";?>

<!-- 打开文件
fopen() 函数用于在 PHP 中打开文件。
关闭文件
fclose() 函数用于关闭打开的文件：
检测文件末尾（EOF）
feof() 函数检测是否已到达文件末尾（EOF）。
逐行读取文件
fgets() 函数用于从文件中逐行读取文件。
逐字符读取文件
fgetc() 函数用于从文件中逐字符地读取文件。 -->


<?php
	$file=fopen("welcome.txt","r") or exit("Unable to open file!");;

	while(!feof($file))
	{
	    echo fgets($file). "<br>";
	}

	fclose($file);
?>

<?php require "footer.php";?>
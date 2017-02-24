<?php
	$vote = htmlspecialchars($_REQUEST['vote']);

	// 获取文件中存储的数据
	$filename="poll_result.txt";
	// 定义和用法
	// file() 函数把整个文件读入一个数组中。
	// 与 file_get_contents() 类似，不同的是 file() 将文件作为一个数组返回。数组中的每个单元都是文件中相应的一行，包括换行符在内。
	// 如果失败，则返回 false。
	// 语法
	// file(path,include_path,context)
	$content=file($filename);

	// 将数据分割到数组中
	$array=explode("||",$content[0]);
	$yes=$array[0];
	$no=$array[1];
	if($vote==0){
		$yes=$yes+1;
	}
	if($vote==1){
		$no=$no+1;
	}

	// 插入投票数据
	$insertvote = $yes."||".$no;
	$fp = fopen($filename,"w");

	// 定义和用法
	// fputs() 函数写入文件（可安全用于二进制文件）。
	// fputs() 函数是 fwrite() 函数的别名。
	// 语法
	// fputs(file,string,length)
	// 参数	描述
	// file	必需。规定要写入的打开文件。
	// string	必需。规定要写入文件的字符串。
	// length	可选。规定要写入的最大字节数。

	fputs($fp,$insertvote);
	fclose($fp);
?>
<h2>结果:</h2>
<table>
  <tr>
  <td>是:</td>
  <td>
  <span style="display: inline-block; background-color:green;
      width:<?php echo(100*round($yes/($no+$yes),2)); ?>px;
      height:20px;" ></span>
  <?php echo(100*round($yes/($no+$yes),2)); ?>%
  </td>
  </tr>
  <tr>
  <td>否:</td>
  <td>
  <span style="display: inline-block; background-color:red;
      width:<?php echo(100*round($no/($no+$yes),2)); ?>px;
      height:20px;"></span>
  <?php echo(100*round($no/($no+$yes),2)); ?>%
  </td>
  </tr>
</table>
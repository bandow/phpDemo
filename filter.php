<?php include "header.php";?>

<?php
	$int="123";
	if(!filter_var($int,FILTER_VALIDATE_INT)){
		echo("不是一个合法的整数");
	}else{
		echo("是个合法的整数");
	}
?>

<?php
	$var=257;
	$int_options=array(
      "options"=>array(
      		"min_range"=>0,
      		"max_range"=>256
       )
	);

    if(!filter_var($var, FILTER_VALIDATE_INT, $int_options)){
	    echo("不是一个合法的整数");
	}else{
	    echo("是个合法的整数<br>");
	}
?>



<!-- 验证输入
让我们试着验证来自表单的输入。
我们需要做的第一件事情是确认是否存在我们正在查找的输入数据。
然后我们用 filter_input() 函数过滤输入的数据。
在下面的实例中，输入变量 "email" 被传到 PHP 页面：
 -->
<?php
   if(!filter_has_var(INPUT_GET,"email")){
   		echo("没有 email 参数");
   }else{
   		if(!filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL)){
			echo "不是一个合法的 E-Mail";
   		}else{
   			 echo "是一个合法的 E-Mail";
   		}
   }
?>


<?php
	if(!filter_has_var(INPUT_GET,"url")){
		echo("没有 url 参数");
	}else{
		$url=filter_input(INPUT_GET,"url",FILTER_VALIDATE_URL);
		echo $url;
	}
?>
<!-- 
设置一个数组，其中包含了输入变量的名称和用于指定的输入变量的过滤器
调用 filter_input_array() 函数，参数包括 GET 输入变量及刚才设置的数组
检测 $result 变量中的 "age" 和 "email" 变量是否有非法的输入。（如果存在非法输入，在使用 filter_input_array() 函数之后，输入变量为 FALSE。）
filter_input_array() 函数的第二个参数可以是数组或单一过滤器的 ID。
如果该参数是单一过滤器的 ID，那么这个指定的过滤器会过滤输入数组中所有的值。
如果该参数是一个数组，那么此数组必须遵循下面的规则：
必须是一个关联数组，其中包含的输入变量是数组的键（比如 "age" 输入变量）
此数组的值必须是过滤器的 ID ，或者是规定了过滤器、标志和选项的数组 -->

<?php
	$filters=array(
      "name"=>array(
          "filter"=>FILTER_SANITIZE_STRING
      ),
      "age"=>array(
      		"filter"=>FILTER_VALIDATE_INT,
      		"options"=>array(
      			"min_range"=>0,
      			"max-range"=>120
      		)
       ),
  		
  	  "email"=>FILTER_VALIDATE_EMAIL
	);

	$result=filter_input_array(INPUT_GET,$filters);

	if(!$result["age"]){
       echo("年龄必须在 1 到 120 之间。<br>");
	}elseif(!$result["email"]){
		echo("E-Mail 不合法<br>");
	}else{
		 echo("输入正确");
	}
?>

<!-- 
使用 Filter Callback
通过使用 FILTER_CALLBACK 过滤器，可以调用自定义的函数，把它作为一个过滤器来使用。这样，我们就拥有了数据过滤的完全控制权。
 -->
<?php
  function converSpace($string){
  	return str_replace("_",".",$string);
  }
  $string="www_null123_com";
  echo filter_var($string, FILTER_CALLBACK, array("options"=>"converSpace"));
?>



<?php
	$int=20;
	$min=1;
	$max=30;
	if(filter_var($int,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,"max_range"=>$max)))===false){
		echo("变量值不在合法范围内");
	}else{
		echo("变量值在合法范围内");
	}
?>

<?php
	$ip="2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
	if(!filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)===false){
		echo("$ip 是一个 IPv6 地址");
	}else{
		echo("$ip 不是一个 IPv6 地址");		
	}
?>

<!-- 检测 URL - 必须包含QUERY_STRING（查询字符串） -->
<?php
	$url="http://www.example.com";
	if(!filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)===false){
		echo("$url 是合法的网址");
	}else{
		echo("$url 不是合法的网址");
	}
?>

<?php require "footer.php";?>
<!--调用公共头部 before-->
<?php include 'header.php'; ?>
<!-- 调用公共头部 end-->

<div class="wrapper">

<!-- 关键词global以及$GLOBALS global 关键字用于函数内访问全局变量。 -->
<?php
  $x=5;
  $y=10;
  function myTest(){
  	$GLOBALS['y']=$GLOBALS['y']+$GLOBALS['x'];
  }
  myTest();
  echo $y;
?>
<!-- Static 作用域  以及参数作用域
当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。
要做到这一点，请在您第一次声明变量时使用 static 关键字： -->
<?php
  function myText1(){
  	static $x=0;
  	echo $x;
  	$x++;
  }
  myText1();
  myText1();
  myText1();

  function myTest2($x){
       echo $x;
  }
  myTest2(5);
  echo "<br/>";
?>

<?php
  $tex1="hello";
  $cars=array("Volvo","BMW","Toyota");
  echo $tex1;
  echo "<br/>";
  echo "{$cars[0]}";
  echo '<br/>';
?>
<!-- PHP var_dump() 函数返回变量的数据类型和值： -->
<?php
  $x=4562;
  var_dump($x);
  echo "<br>";
  $x=0.568; 
  var_dump($x);
  echo "<br>";
  $cars=array("你好","我好","他好","大家好");
  var_dump($cars);
  echo "<br>";
?>
<!-- 首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构。 -->
<?php
   class Car{
   	  var $color;
   	  function Car($color="green"){
          $this->color=$color;
   	  }
   	  function what_color(){
   	  	return $tihs->color;
   	  }
   }
   function print_vars($obj) {
	   foreach (get_object_vars($obj) as $prop => $val) {
	     echo "\t$prop = $val\n";
	   }
	}
	// instantiate one object
	$herbie = new Car("white");

	// show herbie properties
	echo "\herbie: Properties\n";
	print_vars($herbie);
?>
<!-- NULL 值表示变量没有值。NULL 是数据类型为 NULL 的值。 -->
<?php
	$x="Hello world!";
	$x=null;
	echo "<br>";
	var_dump($x);
?>
</div>
<!-- 设置 PHP 常量
设置常量，使用 define() 函数，函数语法如下：
bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
该函数有三个参数:
name：必选参数，常量名称，即标志符。
value：必选参数，常量的值。
case_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。 -->
<?php
  define("GREETING","欢迎访问 Runoob.com",true);
  echo "<br>";
  echo GREETING;
  echo "<br>";
  echo greeting;
  echo "<br>";
?>
<!-- 常量是全局的 -->
<?php
	define("GREETING", "欢迎访问 Runoob.com");
	function myTest4() {
	    echo GREETING;
	}
	myTest4();    // 输出 "欢迎访问 Runoob.com"
?>
<!-- PHP 并置运算符
在 PHP 中，只有一个字符串运算符。
并置运算符 (.) 用于把两个字符串值连接起来。 -->
<?php
  echo "<br>";
  $txt1="钓鱼岛";
  $txt2="是中国的";
  echo $txt1 . $txt2;
?>
<!-- PHP strlen() 函数
有时知道字符串值的长度是很有用的。
strlen() 函数返回字符串的长度（字符数）。 -->
<?php
 echo "<br>";
 echo strlen("hello");
?>
<!-- PHP strpos() 函数
strpos() 函数用于在字符串内查找一个字符或一段指定的文本。
如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。 -->
<?php 
  echo "<br>";
  echo strpos("hello","o");
?>
<!-- 三元运算符
另一个条件运算符是"?:"（或三元）运算符 。
语法格式
(expr1) ? (expr2) : (expr3) 
对 expr1 求值为 TRUE 时的值为 expr2，在 expr1 求值为 FALSE 时的值为 expr3。
自 PHP 5.3 起，可以省略三元运算符中间那部分。表达式 expr1 ?: expr3 在 expr1 求值为 TRUE 时返回 expr1，否则返回 expr3。 
注意：PHP_EOL 是一个换行符，兼容更大平台。
-->
<?php
 $txt="user";
 $username=isset($txt)?$txt:'nobody';
 echo "<br>";
 echo $username,PHP_EOL;
?>
<?php
 $txt="user1";
 $username=$txt?:'nobody';
 echo "<br>";
 echo $username,PHP_EOL;
 echo "<br>";
?>

<?php
  $t=date("H");
  if($t<"20"){
    echo "Have a good day!";
  }else{
  	echo "Have a good night!";
  }
?>

<?php
 $favcolor="green";
 echo "<br>";
 switch($favcolor){
 	case "red":
 	  echo "你喜欢的是红色";
 	break;
 	case "blue":
 	   echo "你喜欢的是蓝色";
 	break;
 	case "green":
 	   echo "你喜欢的是绿色";
 	break;
    default:
    echo "你不喜欢红色蓝色蓝色";
 }
?>
<!-- PHP 数组 -->
<?php
  $cars=array(" Hi "," welcome "," come in ");
  echo "<br>";
  echo $cars[0] . $cars[2] . $cars[1];
  echo "<br>";
  echo count($cars);
  $arrlength=count($cars);
  for($x=0;$x<$arrlength;$x++){
  	echo "<br>";
  	echo $cars[$x];
  }
?>
<!-- PHP 关联数组 -->
<?php
  $ages=array("张三"=>"20","李四"=>"25","王五"=>"35");
  echo "<br>";
  echo $ages['张三'];
  foreach($ages as $x=>$x_value){
  	echo "<br>";
  	echo $x . $x_value;
  }
?>
<!-- PHP - 数组排序函数
在本章中，我们将一一介绍下列 PHP 数组排序函数：
sort() - 对数组进行升序排列
rsort() - 对数组进行降序排列
asort() - 根据关联数组的值，对数组进行升序排列
ksort() - 根据关联数组的键，对数组进行升序排列
arsort() - 根据关联数组的值，对数组进行降序排列
krsort() - 根据关联数组的键，对数组进行降序排列 -->
<?php 
	$cars=array("Volvo","BMW","Toyota");  
	sort($cars);  
	print_r($cars);
?>

<!-- PHP 超级全局变量
PHP中预定义了几个超级全局变量（superglobals） ，这意味着它们在一个脚本的全部作用域中都可用。 你不需要特别说明，就可以在函数及类中使用。
PHP 超级全局变量列表:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION -->
<?php
  $x=20;
  $y=80;
  function addition(){
  	$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
  }
  addition();
  echo "<br>";
  echo $z;
?>
<!-- $_SERVER -->
<?php 
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];
?>



















<!-- 调用公共尾部 before-->
<?php include 'footer.php'; ?>
<!-- 调用公共尾部 end-->
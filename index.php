<!-- 调用公共头部 before-->
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

<!-- 调用公共尾部 before-->
<?php include 'footer.php'; ?>
<!-- 调用公共尾部 end
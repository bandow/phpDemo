<?php include 'header.php'; ?>
<!-- 
常量
可以把在类中始终保持不变的值定义为常量。在定义和使用常量的时候不需要使用 $ 符号。
常量的值必须是一个定值，不能是变量，类属性，数学运算的结果或函数调用。
自 PHP 5.3.0 起，可以用一个变量来动态调用类。但该变量的值不能为关键字（如 self，parent 或 static）。 -->

<?php 
  class myClass2{
  	const constant='123456789ddd';
    function showConstant(){
    	echo self::constant . PHP_EOL;  
    }
  }
  echo myClass2::constant . PHP_EOL;

  $classname2="myClass2";
  echo $classname2::constant . PHP_EOL;

  $class2=new myClass2;
  $class2->showConstant();
  
  echo $class2::constant .PHP_EOL;
?>

<?php include 'footer.php'; ?>
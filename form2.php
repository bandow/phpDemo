<!--调用公共头部 before-->
<?php include 'header.php'; ?>
<!-- 调用公共头部 end-->
<div class="p">
	<a href="test_get.php?subject=js&web=unll.com">Test $GET</a>
</div>

<!--php while do while 循环-->
<?php
 $i=1;
 while($i<=5){
 	echo $i;
 	echo "<br>";
 	$i++;
 }
?>
<?php
  $j=0;
  do{
     echo $j;
     $j++; 
  }while($j<=10);
  echo "<br>";
?>

<!--php for 循环 foreach遍历数组-->
<?php
  $x=array("one","two","three");
  foreach($x as $value){
    echo $value ."<br>";
  }
?>

<?php
  function add($x,$y){
    return $x+$y;
  }
  echo "<br>" . add(1,2);
?>
<!--PHP 魔术变量-->
<?php
 echo '这是第 " '  . __LINE__ . ' " 行';
?>
<?php
  echo "<br>" . __FILE__;
?>
<?php
  echo "<br>" . __DIR__;
?>
<?PHP
  function meTest(){
  	echo "<br>" . __FUNCTION__;
  }
  meTest();
?>

<?PHP
  class test{
    function _print(){
    	echo "<br>" .__CLASS__;
    	echo "<br>" . __FUNCTION__;
    }
  }
  $t = new test();
  $t->_print();
?>

<?php
  class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}
 
trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}
 
class MyHelloWorld extends Base {
    use SayWorld;
}
 
$o = new MyHelloWorld();
$o->sayHello();
?>

<?php
 // namespace MyProject;
 echo "<br>";
 echo '"',__NAMESPACE__,'"';
?>


<!-- 调用公共尾部 before-->
<?php include 'footer.php'; ?>
<!-- 调用公共尾部 end-->
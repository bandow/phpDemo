<?php include 'header.php';?>

<!-- Final 关键字
PHP 5 新增了一个 final 关键字。如果父类中的方法被声明为 final，则子类无法覆盖该方法。如果一个类被声明为 final，则不能被继承。 -->

<?php
  class BaseClass{
  	public function test(){
  		echo "BaseClass::text() called" . PHP_EOL;
  	}
  	final public function moreTexting(){
  		echo "BaseClass::mordTexting called" .PHP_EOL;
  	} 
  }
  class ChildClass extends BaseClass{
  	public function test(){
  		echo "ChildClass::test called" . PHP_EOL;
  	}
  }

  $baseclass=new BaseClass;
  $baseclass->moreTexting();

  $childclass=new ChildClass;
  $childclass->test();

?>

<?php include 'footer.php'; ?>
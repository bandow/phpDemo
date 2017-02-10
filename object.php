<?php include 'header.php';?>

<?php
	class Site {
	  /* 成员变量 */
	  var $title; 
	  /* 成员函数 */
	  function setTitle($par){
	    $this->title = $par;
	  } 
	  function getTitle(){
	    echo $this->title . PHP_EOL;
	  }
	}
	$runoob = new Site;
	// 调用成员函数，设置标题和URL
	$runoob->setTitle( "菜鸟教程" );
	$runoob->getTitle();
?>



<?php
/**
 * Define MyClass
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // 这行能被正常执行
echo "<br>";
// echo $obj->protected; // 这行会产生一个致命错误
// echo $obj->private; // 这行也会产生一个致命错误
$obj->printHello(); // 输出 Public、Protected 和 Private


/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // 可以对 public 和 protected 进行重定义，但 private 而不能
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        // echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public; // 这行能被正常执行

echo "<br>";
// echo $obj2->private; // 未定义 private
// echo $obj2->protected; // 这行会产生一个致命错误
$obj2->printHello(); // 输出 Public、Protected2 和 Undefined

?>



<?php

  class publicClass{
  	var $a="hello";
  	public $text="你好";
  	function txt(){
       echo $this->a;
  	}
  }

  $o=new publicClass;
  echo "<br>";
  echo $o->text;
  echo "<br>";
  echo $o->txt();



  class publicClass2 extends publicClass  //
  {
  	function tt(){
  		 echo "<br>";
  	 	 echo $this->text;
  	}
  }

  $o2= new publicClass2;
  echo $o2->tt();


?>



<?php
   function textT($x,$y){
   	  return $x+$y;
   }
   echo "<br>";
   echo textT(1,1);
?>



<?php
 class one{
 	public function too(){
 		$this->t1();
 		$this->t2();
 	}
 	public function t1(){
 		echo "对象1";
 	}
 	public function t2(){
 		echo "对象2";
 	}
 }
 class two extends one{
 	public function t1(){
 		echo "对象3";
 	}
 	public function t2(){
 		echo "对象4";
 	}
 }
 $k=new two;
 $k->too();
?>


<?php
  class MyClass3{
  	public $public="public";
  	protected $protected="protected";
  	private $private="provate";
  	function printHello(){
  		echo "<br>" . $this->public;
  		echo "<br>" . $this->protected;
  		echo "<br>" . $this->private;
  	}
  	function add($x,$y){
  		return $x*$y;
  	}
  }
  $obj=new MyClass3;
  echo "<br>" . $obj->public;
  // echo "<br>" . $obj->protected;  //Fatal error
  // echo "<br>" . $obj->private;    //Fatal error
  echo "<br>";
  $obj->printHello();
  echo "<br>" . $obj->add(5,5);

  class MyClass4 extends MyClass3{
     function add($x,$y){
     	return $x/$y;
     }
  }
  $obj2=new MyClass4;
  echo "<br>" . $obj2->add(10,2);
  $obj2->printHello();
  echo "<br>" . $obj2->private;   //未定义的属性
?>

<?php
  class myClass5{
  	// 声明一个公有的构造函数
    public function __construct() { }

    // 声明一个公有的方法
    public function MyPublic() { }

    // 声明一个受保护的方法
    protected function MyProtected() { }

    // 声明一个私有的方法
    private function MyPrivate() { }

    // 此方法为公有
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
  }
  $myclass = new MyClass;
	$myclass->MyPublic(); // 这行能被正常执行
	// $myclass->MyProtected(); // 这行会产生一个致命错误
	// $myclass->MyPrivate(); // 这行会产生一个致命错误
	$myclass->Foo(); // 公有，受保护，私有都可以执行
?>

<?php include 'footer.php';?>
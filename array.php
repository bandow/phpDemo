<?php include 'header.php';?>

<?php
  $cars=array(
     array("a","5","10"),
     array("b","6","11"),
     array("c","7","12"),
  );
  print("<pre>");
  print_r($cars);
  print("</pre>");
?>

<?php
  $sites=array(
     "runoob"=>array(
        "菜鸟教程",
        "http://www.runoob.com"
      ),
     "google"=>array(
        "Google 搜索", 
        "http://www.google.com" 
     ),
     "taobao"=>array(
        "淘宝", 
        "http://www.taobao.com" 
     )
  );
  print("<pre>");
  print_r($sites);
  print("</pre>");
  echo $sites['runoob'][0] . '网址是' . $sites['runoob'][1];
?>

<?php include 'footer.php';?>
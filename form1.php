<!--调用公共头部 before-->
<?php include 'header.php'; ?>
<!-- 调用公共头部 end-->

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	name: <input type="text" name="fname">
	<input type="submit">
</form>
<?php
  $name=$_REQUEST['fname'];
  echo $name;
?>

<!--<form method="post" action="--><?php //echo $_SERVER['PHP_SELF'];?><!--">-->
<!--	<input type="text" name="gname">-->
<!--	<input type="submit">-->
<!--</form>-->
<?php
//  $name=$_POST['gname'];
//  echo $name;
//?>
<!-- 调用公共尾部 before-->
<?php include 'footer.php'; ?>
<!-- 调用公共尾部 end-->
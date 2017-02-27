<?php include '../header.php';?>
<style>
    .text{width:100%;margin-bottom:10px;}
    .text span{width:120px;display:inline-block;}
</style>
<h1>登录页面</h1> 
<form action="check.php" method="post">
	<div class="text"><span>用户名:</span><input type="text" name="name" > </div> 
    <div class="text"><span>密码:</span><input type="password" name="password"></div>  
    <div class="button">  
	    <input type="submit" value="提交">  
	    <input type="reset" value="清除">  
	    <a href="register.php" >注  册</a>  
	</div>
</form>
<?php require '../footer.php';?>
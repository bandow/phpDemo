<?php require '../header.php';?>
<style>
    .text{width:100%;margin-bottom:10px;}
    .text span{width:120px;display:inline-block;}
</style>
<h1>注册页面</h1>  
<form method="post" action="register_check.php">  
<div class="div">  
    <div class="text">  
        <span>用户名:</span><input type="text" name="name" >
    </div>  
    <div class="text">  
        <span>密码:</span><input type="password" name="password">
    </div>  
    <div class="text">  
        <span>再次输入密码：</span><input type="password" name="pwd_again">
    </div>  
    <input type="submit" value="提交">  
    <input type="reset" value="清除">  
</div>  
</form>  

<?php require '../footer.php';?>
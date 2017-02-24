<?php include "header.php";?>
<script>
	function getVote(int){
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechenge=function(){
			if(xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("poll").innerHTML=xmlhttp.responstTxet;
			}
		}
		xmlhttp.open("GET","pollVote.php?vote="+int,true);
		xmlhttp.send();
	}
</script>
<div id="poll">
	<h3>你喜欢 PHP 和 AJAX 吗?</h3>
	<form action="">
	    是
		<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
		否
		<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
	</form>
</div>

<?php require "footer.php";?>
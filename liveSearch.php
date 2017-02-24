<?php include "header.php";?>

<form>
	<input id="search" type="text">
	<div id="liveSearch"></div>
</form>

<script>
	window.onload=function(){
		var oSearch=document.getElementById("search"),
		    liveSearch=document.getElementById("liveSearch"),
		    xmlhttp;

		oSearch.onkeyup=function(){
			showResult(this.value);
		}


		function showResult(str){
	 		if(str==0){
	 			liveSearch.innerHTML="";
	 			return;
	 		}
	 		xmlhttp=new XMLHttpRequest();

	 		xmlhttp.onreadystatechange=function(){
	 			if(xmlhttp.readyState==4 && xmlhttp.status==200){
	 				liveSearch.innerHTML=xmlhttp.responseText;
	 			}
	 		}
	 		xmlhttp.open("GET","search.php?q="+str, true);
	 		xmlhttp.send();
		}
	}
</script>

<?php require "footer.php";?>
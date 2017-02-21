<?php include "header.php";?>
<script>
	function showUser(str){
	if (str==""){
		document.getElementById("txtHint").innerHTML="";
		return;
	} 
	var	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","user.php?q="+str,true);
	xmlhttp.send();
}
</script>
<form>
	<select name="users" onchange="showUser(this.value)">
	<option value="">Select a person:</option>
	<option value="1">Peter Griffin</option>
	<option value="2">Lois Griffin</option>
	<option value="3">Glenn Quagmire</option>
	<option value="4">Joseph Swanson</option>
	</select>
</form>
<div id="txtHint"><b>Person info will be listed here.</b></div>

<?php require "footer.php";?>
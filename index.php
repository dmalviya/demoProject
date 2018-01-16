<?php
    echo "It's Working !!!";
    $value = "String is Working";
?>
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<script type="text/javascript" src=".\scripts\jquery-3.2.1.js"></script>
<script type="text/javascript" src=".\scripts\script.js"></script>
<script>
	/*$(document).ready(function(){
   		 $("#bt1").click(function(){
       		 $("h1").hide();
    	 });
	});*/
</script>
<html>
    <body>
        <h1><?php echo "$value </br>" ; echo "hey"; ?></h1>
        <button id="bt1">Hide</button>
    </body>
</html>
<?php
$idd=3333333;
//echo "la cookie22222222 essssssssssssssssssssssssssssssssss:";
	//echo $_COOKIE[user];
//$_COOKIE[user]=pepe;
setcookie("user","$idd",time()+60*60*24*365,"/");
header('Location:ventas2.php');
//echo "la cookie3 essssssssssssssssssssssssssssssssss:";
//echo $_COOKIE[user];
?>
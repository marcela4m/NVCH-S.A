<?php
$idd=null;
setcookie("user","$idd",time()+60*60*24*365,"/");
header('Location:ventas2.php');
?>
<?php
session_start();


if (isset($_SESSION['k_username'])) {
	header ("Location: clientes.php");
	echo '<p><a href="logout.php">Logout</a></p>';
}else{

header ("Location: advices.php");

}
?>

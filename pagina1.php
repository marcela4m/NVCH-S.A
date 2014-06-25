<html>
<head>
<title>Problema</title>
</head>



<body 
<?php if (isset($_COOKIE['color'])) echo " bgcolor=\"$_COOKIE[color]\"" 
?>
>


<form action="pagina2.php" method="post" enctype="multipart/form-data">
Seleccione el archivo:
<input type="file" name="foto"><br>
<input type="submit" value="Enviar">
</form>


 <form action="pagina2.php"  method="post"> 
  Ingrese primer valor: 
  <input type="text" name="valor1"> 
  <br> 
  Ingrese segundo valor: 
  <input type="text" name="valor2"> 
  <br> 
  <select name="operacion"> 
  <option value="suma">sumar</option> 
  <option value="resta">restar</option> 
  </select> 
  <br> 
  <input type="submit" name="operar"> 
  </form>  
  
  
  <form action="pagina2.php"   method="post">
  Ingrese primer valor:
  <input type="text" name="valor1">
  <br>
  Ingrese segundo valor:
  <input type="text" name="valor2">
  <br>
  <input type="checkbox" name="check1">sumar
  <br>
  <input type="checkbox" name="check2">restar
  <br>
  <input type="submit" name="operar">
  </form>



<!--<form action="pagina2.php" 
  method="post">
  Ingrese primer valor:
  <input type="text" name="valor1">
  <br>
  Ingrese segundo valor:
  <input type="text" name="valor2">
  <br>
  <input type="radio" name="radio1" value="suma">sumar
  <br>
  <input type="radio" name="radio1" value="resta">restar
  <br>
  <input type="submit" name="operar">
  </form>
-->




<form action="pagina2.php" method="post">
Seleccione de que color desea que sea la página de ahora en más:<br>
<input type="radio" value="rojo" name="radio">Rojo<br>
<input type="radio" value="verde" name="radio">Verde<br>
<input type="radio" value="azul" name="radio">Azul<br>
<input type="submit" value="Crear cookie">
</form>


</body>
</html> 






		
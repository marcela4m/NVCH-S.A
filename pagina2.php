<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
/*
copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
echo "La foto se registro en el servidor.<br>";
$nom=$_FILES['foto']['name'];
echo "<img src=\"$nom\">";



  if ($_REQUEST['radio1']=="suma")
  {
    $suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:".$suma;
  }
  else
  {
    if ($_REQUEST['radio1']=="resta")
    {
      $resta=$_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es:".$resta;
    }
  }
  
  
  
  
  */
  
  
  
  if (isset($_REQUEST['check1']))
  {
    $suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:".$suma."<br>";
  }
  if (isset($_REQUEST['check2']))
  {
    $resta=$_REQUEST['valor1'] - $_REQUEST['valor2'];
    echo "La resta es:".$resta;
  }
  
  
  


  

  

 // echo $reg4['id'];
echo "----------->";
echo $_REQUEST['radio'];
  
if ($_REQUEST['radio']=="rojo")
  setcookie("color","#ff0000",time()+60*60*24*365,"/");
elseif ($_REQUEST['radio']=="verde")
  setcookie("color","#00ff00",time()+60*60*24*365,"/");
elseif ($_REQUEST['radio']=="azul")
  setcookie("color","#0000ff",time()+60*60*24*365,"/");



  
  
?>

Se creó la cookie.
<br>
<a href="pagina1.php">Ir a la otra página</a>
</body>
</html>
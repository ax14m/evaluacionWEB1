<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Punto 1</title>
</head>
<body>

<div class="text-center" >

<H1> Ejercicio 1 <h1>

  <h4> 1.Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación, de dos números enteros almacenados en 2,
   variables diferentes (utilice formularios HTML).</h4>
   <br>

</div>
    
   <table style="font-family: Verdana, Arial, Helvetica, sans-serif; height: 153px; width: 337px;" border="8" align="center">
<tbody>
<tr>
<td style="border: 1px dashed #bbbbbb; border-collapse: separate; border-spacing: 1px;">
<ul>
CALCULADORA
<form  method="post" action="Punto_1.php"><br>
Ingrese el  primer numero
      <input type="text" class="form-control" name="numero1"><br>
      Ingrese el segundo numero
      <input type="text" name="numero2"><br>
    Elija la Operacion
     
     <select name="opciones">
      <option value="0">Sumar</option>
      <option value="1">Restar</option>
      <option value="2">Multiplicar</option><br>
      <input type="submit" name="calcular" value="Calcular">  
    
     </select> <br>
    El valor es:
   </form>
   <?php

if(isset($_REQUEST['calcular'])){
 $n1=$_REQUEST['numero1']; //capturar valor
 $n2=$_REQUEST['numero2'];
 $op=$_REQUEST['opciones'];
 switch($op){
  case 0:echo $suma = $n1 + $n2 ; return $suma  ;break;
  case 1:echo $Restar = $n1-$n2 ; return $Restar  ;break;
  case 2:echo $Multiplicar = $n1*$n2 ; return  $Multiplicar  ;break;
  default: echo "valor no valido"; break;
 }
}
?>

</ul>
</td>
</tr>
</tbody>
</table>
<a href="http://localhost/evaluacionWEB1/index.php" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">REGRESAR</a>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>


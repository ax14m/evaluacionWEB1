DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="text-center" >

<H1> Ejercicio 4 <h1>

  <h4>    4.Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que, si trabaja 40 horas o menos, se le pagará $20000 por hora,
       pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25000 por hora.  </h4>

   <br>
  
</div>

<table style="font-family: Verdana, Arial, Helvetica, sans-serif; height: 153px; width: 337px;" border="8" align="center">
<tbody>
<tr>
<td style="border: 1px dashed #bbbbbb; border-collapse: separate; border-spacing: 1px;">
<ul>
CALCULAR EDAD:
<form  method="post" action="Punto_5.php"><br>
Ingrese fecha nacimiento
      <input type="text" class="form-control" name="fechaNac"><br>
     
      <input type="submit" name="CALCULAR" value="CALCULAR">  
 <br>
    SU EDAD ES:
   </form>

<?php


if(isset($_REQUEST['CALCULAR'])){
$fechaNac=$_REQUEST['fechaNac']; //capturar valor


    echo CalculaEdad($fechaNac);
}


    ?>
</td>
</tr>
</table>

   
  


</ul>
</td>
</tr>
</tbody>
</table>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    

</body>
</html>
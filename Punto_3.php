<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="text-center" >

<H1> Ejercicio 3 <h1>

  <h4>    3.Codificar un programa en PHP para la tienda Spring Step que tiene una promoción de descuento, esta dependerá del número de zapatos que se compren. 
 Si son 3 pares se les dará un 10% de descuento al cliente sobre el total de la compra; 

 Si el número de zapatos es mayor 3 pares, pero menor o igual de 8 pares, se le otorga un 20% de descuento 

 si son más 8 pares de zapatos se otorgará un 50% de descuento. Defina la cantidad de variables que necesite, el costo de cada par de zapatos y establezca el valor total de la compra de zapatos.  </h4>

   <br>

</div>

<table style="font-family: Verdana, Arial, Helvetica, sans-serif; height: 153px; width: 337px;" border="8" align="center">
<tbody>
<tr>
<td style="border: 1px dashed #bbbbbb; border-collapse: separate; border-spacing: 1px;">
<ul>
 VENTA DE ZAPATOS
<form  method="post" action="Punto_3.php"><br>
Ingrese la cantidad de zapatos
      <input type="text" class="form-control" name="unidades"><br>
      Ingrese valor unidad
      <input type="text" class="form-control" name="valor_unidad"><br>

      <input type="submit" name="calcular" value="CALCULAR">  
 <br>
    TOTAL:
   </form>
   
   <?php

if(isset($_REQUEST['calcular'])){
 $n1=$_REQUEST['unidades']; //capturar valor
 $n2=$_REQUEST['valor_unidad'];
 $costo=($n1*$n2);
 $DSTO=0;
 $total=0;

 if( $n1 < 4  ){ $DSTO= ($costo*10) /100;
    echo "Valor Inicial $". $costo ;
    echo "<br>";
    echo "Descuento $" . $DSTO; 
    echo "<br>";
    echo "Total a Pagar $" . $total=($costo-$DSTO); 
}else {
    if( $n1 > 3 && $n1 < 9) { $DSTO= ($costo*20) /100;
        echo "Valor Inicial $". $costo ;
        echo "<br>";
        echo "Descuento $" . $DSTO; 
        echo "<br>";
        echo "Total a Pagar $" . $total=($costo-$DSTO); 


}else{

    if( $n1 >8) { $DSTO= ($costo*20) /100;
        echo "Valor Inicial $". $costo ;
        echo "<br>";
        echo "Descuento $" . $DSTO; 
        echo "<br>";
        echo "Total a Pagar $" . $total=($costo-$DSTO); }



}

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="text-center" >

<H1> Ejercicio 2 <h1>

  <h4>   2.El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de masa corporal basado en el formula: 𝐼𝑀𝐶 = 𝑃𝐸𝑆𝑂 𝐴𝐿𝑇𝑈𝑅𝐴 ∗ 𝐴𝐿𝑇𝑈𝑅𝐴 
Tenga en cuenta que la clasificación del IMC es la siguiente: </h4>
<img src="https://lh3.googleusercontent.com/VHJ_KPaWvr52L_sZ-rrZvbILPC0ge2jrzqe8g_L-Q_2Nb6ttutF1d0FK7TCxdyjBcqpywGY=s170">

   <br>

</div>

<table style="font-family: Verdana, Arial, Helvetica, sans-serif; height: 153px; width: 337px;" border="8" align="center">
<tbody>
<tr>
<td style="border: 1px dashed #bbbbbb; border-collapse: separate; border-spacing: 1px;">
<ul>
Indice de masa corporal
<form  method="post" action="Punto_2.php"><br>
Ingrese su peso
      <input type="text" class="form-control" name="peso"><br>
      Ingrese su altura
      <input type="text" name="altura"><br>
     
      <input type="submit" name="calcular" value="CALCULAR">  
 <br>
    Su Masa Corporal Es:
   </form>
   
   <?php

if(isset($_REQUEST['calcular'])){
 $n1=$_REQUEST['peso']; //capturar valor
 $n2=$_REQUEST['altura'];
 $IMC=($n1/($n2*$n2))*10000;

 if( $IMC < 18.5 ){   $RESULTADO="PESO INSUFICIENTE";}
    if(( $IMC >18.5 )&&($IMC<24.9)){  $RESULTADO="PESO NORMAL";}
    if(( $IMC > 25 )&&($IMC<26.9)){  $RESULTADO="SOBRE PESO GRADO 1";}
    if(( $IMC >27 )&&($IMC<29.9)){  $RESULTADO="PREOBESIDAD";}
    if(( $IMC >30 )&&($IMC<34.9)){  $RESULTADO="OBESIDAD TIPO 1";}
    if(( $IMC >35 )&&($IMC<39.9)){  $RESULTADO="OBESIDAD TIPO 2";}
    if(( $IMC >40 )&&($IMC<49.9)){  $RESULTADO="OBESIDAD TIPO 3";}
    if( $IMC >= 50 ){  $RESULTADO="OBESIDAD TIPO 4";}
        
    echo $RESULTADO;

       
}
?>


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
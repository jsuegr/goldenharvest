<?php 
	if ($con){
?>
 <div style="font-size:9pt;text-align:left;font-weight:bold">TIEMPO DE ENTREGA: 8 dias habiles a partir de la confirmacion de pago</div>
	<br>
	<div style="font-size:9pt;text-align:left;font-weight:bold">FORMA DE PAGO:</div>
        <tr>
        	<th style="width: 80%;text-align:left;font-weight:bold" >1.-Se requiere un deposito de al tomar su orden o cierre de convenio de Compra-Venta </th>
        	<th style="width: 5%;text-align:center;" >70%</th>
        </tr>
        <tr>
            <th style="width: 80%;text-align:left;font-weight:bold" >que firmaran las partes involucradas al terminar y entregar proyecto a satisfaccion del cliente </th>
            <th style="width: 5%;text-align:center;" >30%</th>
        </tr>
      </table>
<br>
<br>
  <table cellspacing="0" style="width: 100%; text-align: left; font-size: 8pt;">
        <tr>
        	<th style="width: 80%;text-align:left;font-weight:bold" >DEPOSITOS CON CHEQUE O TRANFERENCIA </th>
        </tr>
        <tr>
            <th style="width: 80%;text-align:left;font-weight:bold" >DATOS BANCARIOS: </th>
        </tr>
         <tr>
            <th style="width: 80%;text-align:left;font-weight:bold" >BANCOMER</th>
        </tr>
        <tr>
            <th style="width: 60%;text-align:left;font-weight:bold" >CLABE INTERBANCARIA </th>
            <th style="width: 20%;text-align:left;" >1252 8004 6092 71400</th>
        </tr>
  </table>
<br>

  <table cellspacing="0" style="width: 100%; text-align: left; font-size: 8pt;">
        <tr>
        	<th style="width: 80%;text-align:left;font-weight:bold" >PAGO EN EFECTIVO Y SIN FACTURA  </th>
        	<!-- <th style="width: 5%;text-align:center;" >70%</th> -->
        </tr>
        <tr>
            <th style="width: 80%;text-align:left;font-weight:bold" >BANCOMER </th>
        </tr>
         <tr>
            <th style="width: 80%;text-align:left;font-weight:bold" >Ma de los  Angeles Fernandez Trujillo</th>
        </tr>
        <tr>
            <th style="width: 60%;text-align:left;font-weight:bold" >CLABE </th>
            <th style="width: 20%;text-align:left;" >174218205</th>
        </tr>
  </table>
<br>
<br>
  <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
        <tr>
        	<td style="width: 40%;text-align:left;font-weight:bold" >Represetante Legal: 
        		<?php 
				$sql_user=mysqli_query($con,"select * from users where user_id='$id_vendedor'");
				$rw_user=mysqli_fetch_array($sql_user);
				echo $rw_user['firstname']." ".$rw_user['lastname'];
			    ?>
			  </td>
        	  <td style="width: 40%;text-align:right;font-weight:bold" > Comprador:
        	<?php 
				$sql_cliente=mysqli_query($con,"select * from clientes where id_cliente='$id_cliente'");
				$rw_cliente=mysqli_fetch_array($sql_cliente);
				echo $rw_cliente['nombre_cliente'];
				echo "<br>";
			   ?>
         </td>
        </tr>
  </table>
<br>
  	<table cellspacing="30" style="width: 100%; text-align: left; font-size: 8pt;">
        <tr>
        	<th style="width: 50%;text-align:left;font-weight:bold"  >___________________________</th>
            <th style="width: 30%;text-align:center;font-weight:bold" >______________________________</th>
        </tr>
  </table>
<br>
<br>
	<div style="font-size:7pt;text-align:center;font-weight:bold">LA EFICIENCIA, EL RESPALDO Y EL USO ADECUADO DE LA PLANTA  (SON RESPONSABILIDAD DEL USUARIO)</div>
	<div style="font-size:12pt;text-align:center;font-weight:bold">ENERGIA  GRATIS  A  SU  DISPOSICION !</div>

	<?php }?>
<?php
session_start();
include 'head.php';
if(isset($_REQUEST['borrar']))//si he pulsado borrar
{
    $matricula=$_REQUEST['matricula'];
    $contador_antes=count($_SESSION['multas']);
    unset($_SESSION['multas'][$matricula]);
    $contador_despues=count($_SESSION['multas']);
    if($contador_antes==$contador_despues)
    {
        echo '<script>alert("No existe la multa");</script>';
    }
    else{
      unset($_SESSION['multas'][$matricula]);
  }
  echo '<pre>';
  var_dump($_SESSION['multas']);
  echo '</pre>';
}                    
echo' 
Introduce los datos de la Multa a Borrar<mark>(1.5 Puntos)<br><br>
                         
<div   class="postcontent"><form action="borrar.php" method="post">
<table align="center" class="content-layout">
  
  
  <tr>
  <td align="right">
  <strong>Matricula :</strong></td><td>
  <div align="left">
        <input type="text" name="matricula" size="10"/>
  </div>
  </td>
  </tr>
  <tr>
    <td align="right"><strong>Fecha y Hora :</strong></td>
     <td>
        <input  type="datetime-local" name="fecha_hora" size="20" />
     </td>
  </tr>
  
  <tr ><td colspan="2"><div align="center"><strong>
<input name="borrar" type="submit" id="borrar" value="Borrar Multa"/>
</strong></div></td></tr>
</table>
</form>
</div>';        
include 'pie.php';


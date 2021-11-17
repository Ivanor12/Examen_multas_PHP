<?php
session_start();
include 'head.php';
var_dump($_SESSION['radares']);
if(isset($_REQUEST['listar']))
{
  $radar=$_REQUEST['identificador'];
  foreach($_SESSION['radares'] as $clave=>$valor)
  {
    if($valor[2]==$radar)
    {
      echo '<tr>
        <td>'.$valor[1].' </td>
        <td>'.$valor[2].' </td>
        <td>'.$valor[3].' </td>
        <td>'.$valor[4].' </td>

      </tr>';
    }
  }
}
echo '</table>';
echo'Analisis de las Multas por Radares <mark>(1.5 Puntos)<br><br>
<table>
  <thead>
    <tr>
      <th>Radar 1</th>
      <th>Radar 2</th>
      <th>Radar 3</th>
      <th>Radar 4</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>10</td>
    <td>20</td>
    <td>30</td>
    <td>40</td>
    </tr>
  </tfoot>
</table>';
'<td colspan="2"><div align="center"><strong>
        <input name="listar" type="submit" id="listar" value="Listar"/>
';
include 'pie.php';


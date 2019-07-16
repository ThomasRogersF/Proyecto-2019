<?php

include 'dbh.inc.php';

$tabla="";
$query="SELECT * FROM asistencia1 ORDER BY tiempo_entrada";




if(isset($_POST['asistencia1']))
{
    $q=$conn->real_escape_string($_POST['asistencia1']);
    $query="SELECT * FROM asistencia1 WHERE
    id_usuario LIKE '%".$q."%' OR
    usuario_nombre LIKE '%".$q."%' OR
    tiempo_entrada LIKE '%".$q."%'";
}


$buscarPersona=$conn->query($query);
if ($buscarPersona->num_rows > 0)
{
    $tabla.=
    '<table class="table">
        <tr class="bg-primary">
            <td>ID</td>
            <td>ID USUARIO</td>
            <td>NOMBRE</td>
            <td>FECHA INGRESO</td>
            <td>ENTRADA</td>
            <th>SALIDA</th>
        </tr>
    ';
    while($filaPersonas= $buscarPersona->fetch_assoc())
    {
        $tabla.=
         '<tr>
            <td>'.$filaPersonas['ID'].'</td>
            <td>'.$filaPersonas['id_usuario'].'</td>
            <td>'.$filaPersonas['usuario_nombre'].'</td>
            <td>'.$filaPersonas['tiempo_entrada'].'</td>
            <td>'.$filaPersonas['hora'].'</td>
            <td>'.$filaPersonas['hora2'].'</td>
         </tr>
        ';



    }
    $tabla.='</table>';
} else {
        $tabla="no se encontraron coinccidencias con sus criterios de busqueda";
        
    }
    
    
    echo $tabla;
    
?>
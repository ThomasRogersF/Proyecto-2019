<?php
include 'dbh.inc.php';

if(isset($_POST['submit']))
{
//nombre del archivo y charset
    header('Content-Type:text/csv; charset-utf-8');
    header('Content-Disposition: attachment; filename="Backup_.csv"');
    //salida del archivo
        $salida=fopen('php://output', 'w');
        //encabezados
    fputcsv($salida, array('id_usuario', 'usuario_nombre', 'usuario_apellido', 'usuario_cedula', 'usuario_cargo', 'usuario_turno'));
    //query para crear el reporte
    $reporteCsv=$conn->query("SELECT * FROM usuario ORDER BY id_usuario");
        while($filaR=$reporteCsv->fetch_assoc())
            fputcsv($salida, array(
                                   $filaR['id_usuario'],
                                   $filaR['usuario_nombre'],
                                   $filaR['usuario_apellido'],
                                   $filaR['usuario_cedula'],
                                   $filaR['usuario_cargo'],
                                   $filaR['usuario_turno']
                                  ));
}
 
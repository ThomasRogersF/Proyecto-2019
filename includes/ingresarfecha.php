<?php

//include 'user.php';

include 'dbh.inc.php';

//var_dump($_REQUEST);
if(isset($_REQUEST['submit'])){
    
        
///date_default_timezone_set('America/Caracas');
//$fecha_actual=date("yyy-mm-dd");
        
$fecha=$_POST['fecha'];
$id=$_POST['id']; 
$show=$_POST['show'];
$hora=$_POST['hora'];  
    
$consulta="INSERT INTO asistencia1 (id_usuario, usuario_nombre, tiempo_entrada, hora) VALUES ('$id', '$show', '$fecha', '$hora');";
    
    
    
$ejecutar=mysqli_query($conn,$consulta);
echo $ejecutar;
if ($ejecutar==1) {
 ?> <script> alert("Datos ingresados correctamente, Que tenga un buen dia!"); window.location.href="../usuario.php"; </script> <?php exit(); 
}
else {
  ?> <script> alert("hubo un error"); window.location.href="../usuario.php"; </script> <?php exit(); 
}
}

?>
    

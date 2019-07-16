<?php

//include 'user.php';

include 'dbh.inc.php';

//var_dump($_REQUEST);
if(isset($_REQUEST['submit2'])){
    
        
///date_default_timezone_set('America/Caracas');
//$fecha_actual=date("yyy-mm-dd");
        
$fecha=$_POST['fecha'];
$id=$_POST['id'];
$show=$_POST['show'];
$hora=$_POST['hora'];      
 
    
    $consulta="UPDATE asistencia1 SET hora2='$hora' WHERE tiempo_entrada = '$fecha'";
    
$ejecutar=mysqli_query($conn,$consulta);
echo $ejecutar;
if ($ejecutar==1) {
?> <script> alert("datos ingresado correctamente, Adios!"); window.location.href="../usuario.php"; </script> <?php exit(); 
}
else {
    ?> <script> alert("hubo un error"); window.location.href="../usuario.php"; </script> <?php exit(); 
}
}

?>
    
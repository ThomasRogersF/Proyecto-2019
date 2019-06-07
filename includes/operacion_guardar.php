<?php
#first if
include ("dbh.inc.php");


if(isset($_REQUEST['submit'])){
    
    $id = $_POST['id'];
 
   
	$nombre = mysqli_real_escape_string( $conn , $_POST['nombre']);
  $apellido = mysqli_real_escape_string( $conn , $_POST['apellido']);
	$cargo = mysqli_real_escape_string( $conn , $_POST['cargo']);
	$cedula = mysqli_real_escape_string( $conn , $_POST['cedula']);
    $turno = mysqli_real_escape_string( $conn , $_POST['turno']);
				
    
$sql = "UPDATE usuario SET usuario_nombre=('$nombre'),usuario_apellido=('$apellido'),usuario_cedula=('$cedula'),usuario_cargo=('$cargo'),usuario_turno=('$turno') WHERE id_usuario=('$id')";

					 $resultado=mysqli_query($conn,$sql);

if($resultado==1){
				?> <script> alert("Datos Modificados Correctamente!"); window.location.href="../bases.php"; </script> <?php exit(); 
            }
                        
                
			
 /*first else*/

else {
	?> <script> alert("Hubo un error, intentelo denuevo"); window.location.href="../bases.php"; </script> <?php exit(); 
	exit();
}

    
}
 

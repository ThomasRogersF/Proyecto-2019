<?php
#first if
include ("dbh.inc.php");


if(isset($_REQUEST['submit'])){
    
    $id = $_POST['id'];
 
   
	$respuesta = mysqli_real_escape_string( $conn , $_POST['Respuesta']);
	$contra = mysqli_real_escape_string( $conn , $_POST['contra']);
    $contra2 = mysqli_real_escape_string( $conn , $_POST['contra2']);
				
    
    	if (empty($contra) || empty($contra2) || empty($respuesta)) {
			?> <script> alert("rellene todos los espacion"); window.location.href="../cambiar_contra.php"; </script> <?php exit(); 

	} else{
            	if ($contra != $contra2) {
				
			?> <script> alert("Las Contraseñas no son iguales"); window.location.href="../signup.php"; </script> <?php exit(); 
                
			} else{
              
		$sql = "SELECT * FROM usuario WHERE id_usuario='$id'";
       
		$result = mysqli_query($conn,$sql);
        //mysqli_query Realizar consultas en la base de datos: Perform queries against the database:
		$resultCheck = mysqli_num_rows($result);
         // mysqli_num_rows Devuelve el número de filas en un conjunto de resultados:  Return the number of rows in a result set:
		#third if
		if ($resultCheck < 1) {
			header("Location: ../cambiar_contra.php?login=error no se encontraron resultados");                                                                                                      
			exit();                                  
		}/*third else*/ else {                                                                    
			#forth if  
            //Obtener una fila de resultados como una matriz asociativa:
			if ($row = mysqli_fetch_assoc($result)) {                                
				//de-hashing the password
				$hashedPwdCheck = password_verify($respuesta , $row['Respuesta']);
				#fifth ifhttp://localhost
                    if ($hashedPwdCheck == true) {
					//Log in the user here
					   $hashedPwd = password_hash($contra, PASSWORD_DEFAULT);
                    
                        $sql2 = "UPDATE usuario SET usuario_contra=('$hashedPwd') WHERE id_usuario=('$id')";
         mysqli_query($conn,$sql2);           

                                    
            ?> <script> alert("Se cambio la contraseña correctamente!"); window.location.href="../index.php"; </script> <?php exit(); 
                        
				}else{
            ?> <script> alert("intentelo denuevo"); window.location.href="../olvidar.php"; </script> <?php exit();
                    }
                
                
			}
		}
	}
}
                } 

        

   
    
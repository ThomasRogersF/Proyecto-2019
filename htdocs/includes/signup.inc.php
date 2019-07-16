<?php
#first if
if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$nombre = mysqli_real_escape_string( $conn , $_POST['nombre']);
  $apellido = mysqli_real_escape_string( $conn , $_POST['apellido']);
	$cargo = mysqli_real_escape_string( $conn , $_POST['cargo']);
    $Turno = mysqli_real_escape_string( $conn , $_POST['turno']);
	$cedula = mysqli_real_escape_string( $conn , $_POST['cedula']);
	$contra = mysqli_real_escape_string( $conn , $_POST['contra']);
    $contra2 = mysqli_real_escape_string( $conn , $_POST['contra2']);

	//Error handelers
	//Check for empty field
	#second if
	if (empty($nombre) || empty($apellido) || empty($cargo) || empty($cedula) || empty($contra) || empty($contra2) || empty($Turno)) {
		header("Location: ../signup.php?signup=empty");
        echo ("<script></script");
		exit();
	} /*second else*/ else{
		//Check if input character are valid
		# third if
		if (!preg_match("/^[a-zA-Z]*$/" , $nombre) || !preg_match("/^[a-zA-Z]*$/" , $apellido)  ) {
			
			?> <script> alert("Datos en Nombre y Apellido invalidos."); window.location.href="../signup.php"; </script> <?php exit(); 
            
		} /*third else*/ else{
			// Check if password is valid
			#forth if
			if ($contra != $contra2) {
				
			?> <script> alert("Las Contraseñas no son iguales."); window.location.href="../signup.php"; </script> <?php exit(); 
                
			} /*forth else*/ else {
				$sql = "SELECT * FROM usuario WHERE usuario_cedula='$cedula'";
				$result = mysqli_query($conn , $sql);
				$resultCheck = mysqli_num_rows($result);
				#fifth if
				if ($resultCheck > 0) {
                    
					?> <script> alert("El Usuario ya esta registrado"); window.location.href="../signup.php"; </script> <?php exit(); 
                    
				} /*forth else*/ else {
					//Hashing the password
					$hashedPwd = password_hash($contra, PASSWORD_DEFAULT);
					//Inser the user into the database
					$sql = "INSERT INTO usuario(usuario_nombre , usuario_apellido , usuario_cargo , usuario_cedula , usuario_turno , usuario_contra) VALUES ('$nombre','$apellido','$cargo','$cedula','$Turno','$hashedPwd');";
					mysqli_query($conn , $sql);
                    
                   if($sql){ ?> <script> alert("Registro exitoso."); window.location.href="../signup.php"; </script> <?php exit(); }
					
					
				}
			}
		}
	}

} /*first else*/ else {
	header("Location: ../signup.php");
	exit();
}?>
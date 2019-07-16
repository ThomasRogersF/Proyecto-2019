<?php
session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<title>C.E.I. "Mundo de Colores"</title>
		<link rel="shortcut icon" href="./img/globe.png">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="./css/normalize.css">
	</head>
	<body>
		
		<header><?php
			if (isset($_SESSION['Admin'])) {
						echo '
                     
						<form class="forma" action="includes/logout.inc.php" method="POST">
							<button class="formabutton" type="submit" name="submit">Cerrar Sesion</button></form>
						
						';
					} else{
				
						?> <script> alert("Primero debe Iniciar Sesion."); window.location.href="log_admin.php"; </script> <?php exit();
					} ?>
			<div id="header">
				<img src="./img/logo2.png">
			</div>
		</header>
		<div class="bienvenido">

		    	<?php

				
				
			if (isset($_SESSION['Admin'])) {
				echo "<h1>BIENVENIDO "; 
                 $nombre=$_SESSION['usuario_nombre'];
              // $show=$_SESSION['u_first'];
                $show = strtoupper($nombre);
            
                
                echo $show;
                echo '!</h1>';
			}
        
        date_default_timezone_set('America/Caracas');
        
        function showdate(){
            return date('d-m-Y');
        }
        
		?>	
		
		
	
	
		</div><!--Bienvenido-->
    <div id="contenedor">
     
            <a href="signup.php"><div class="menu">Registrar Usuario</div></a>
      
        
            <a href="bases.php"><div class="menu">Visualizar Registros</div></a>
            
            
            <a href="calendario.php"><div class="menu">Visualizar Asistencias</div></a>
        
			<a href="evento.php"><div class="menu">Crear Evento</div></a>
                
                
    </div><!--Salida-->
		
		<footer>
			<p>Todos los derechos reservados. &copy;</p>
		</footer>

	</body>
</html> 
<?php
 session_start();
if (isset($_SESSION['u_id'])) {

	session_unset();
	session_destroy();
    ?> <script> alert("se ha cerrado su sesion"); window.location.href="index.php";  </script> <?php exit();
}
else if (isset($_SESSION['Admin'])){
   
	session_unset();
	session_destroy();
   ?> <script> alert("se ha cerrado su sesion"); window.location.href="index.php"; </script> <?php exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="shortcut icon" href="">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="">
	</head>
	<body>
		<header>
			<div id="header">
			<img src="">
			</div>
		</header>
		<div class="bienvenido">
			<h1>Bienvenido al Sistema de Acceso de Control Asistencial</h1>
		</div>
		<!--Bienvenido-->
			<div id="contenedor">
				<a href="log_user.php">
			<div class="personal">
				<h1> ACCESO PERSONAL</h1>
			</div></a><!--Acceso Personal-->
			<a href="log_admin.php">
			<div class="admin">
				<h1>ACCESO ADMINISTRADOR</h1>
			</div></a><!--Acceso Administrativo-->
		</div>
		
		
		
		
		<footer>
			<p>Todos los derechos reservados &copy;</p>
		</footer>

	</body>
</html> 






<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<title></title>
		<link rel="shortcut icon" href="./img/globe.png">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="./css/normalize.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	</head>
	<body>
	<header>
     
     <?php
			if (isset($_SESSION['Admin'])) {
					echo '<form class="forma" action="includes/logout.inc.php" method="POST">
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

		</div><!--Bienvenido-->
     <form name="add_name" id="add_name"> 


     <label for="Titulo">Titulo</label>
     <input type="text" name="titulo"><br>

     <label for="fecha">Fecha</label>
     <input type="date" name="fecha"><br>

     <label for="Participante">Participante</label>
     <input type="text" name="titulo"><br>
 
    <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
     </div>     
     </form >      

               <div class="intem"></div>



    </div><!--Salida-->
		
		<footer>
			<p>Todos los derechos reservados. &copy;</p>
		</footer>
                    <script>        
               
                    </script>
	</body>
</html> 
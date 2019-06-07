<?php
session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>C.E.I. "Mundo de Colores"</title>
		<link rel="shortcut icon" href="../img/globe.png">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	</head>
	<body>
		
		<header><?php
			if (isset($_SESSION['u_id'])) {
						echo '
                     
						<form class="forma" action="includes/logout.inc.php" method="POST">
							<button class="formabutton" type="submit" name="submit">Cerrar Sesion</button></form>
						
						';
					} else{
						
				
						?> <script> alert("Tiene Que Iniciar Sesion"); window.location.href="log_user.html"; </script> <?php exit();
					} ?>
			<div id="header">
				<img src="../img/logo2.png">
			</div>
		</header>
		<div class="bienvenido">

		    	<?php

				
				
			if (isset($_SESSION['u_id'])) {
				echo "<h1>BIENVENIDO "; 
                 $nombre=$_SESSION['u_first'];
              // $show=$_SESSION['u_first'];
                $show = strtoupper($nombre);
                $id=$_SESSION['u_id'];
                
                echo $show;
                echo '!</h1>';
			}
        
        date_default_timezone_set('America/Caracas');
        
        function showdate(){
            return date('Y-m-d');
            /*you can ut a better format*/
        }
        function sendtime(){
         return date('h:i A');
     }   
        
		?>	
		
		
	
	
		</div><!--Bienvenido-->
       <div id="contenedor">
        <form action="includes/ingresarfecha.php" method="post">
              
              <input type="hidden" name="fecha" value="<?php echo showdate();?>"> 
                       <input type="hidden" name="hora" value="<?php echo sendtime();?>"> 
                        <input type="hidden" name="id" value="<?php echo $id;?>">       
                           <input type="hidden" name="show"  value="<?php echo $nombre;?>">   
                 <button type="submit" name="submit" class="personal2"><h1>INGRESAR ENTRADA</h1>
                 <img src="img/2.png" width="50px" height="60px" alt="">
                 </button>
        </form>
        
        

				      <form action="includes/ingresarfecha_salida.php" method="post">
              
                  <input type="hidden" name="fecha" value="<?php echo showdate();?>"> 
                <input type="hidden" name="hora" value="<?php echo sendtime();?>"> 
                <input type="hidden" name="id" value="<?php echo $id;?>">       
                <input type="hidden" name="show"  value="<?php echo $nombre;?>">   
                 <button type="submit" name="submit2" class="admin2"><h1>INGRESAR SALIDA</h1>
                 <img src="img/3.png" width="50px" height="60px" alt="">
                 </button>
        </form>
        
                
                
			</div><!--Salida-->
		
		<footer>
		        <form action="calendario-usuario.php" method="post">
		            <input type="hidden" name="id" value="<?php echo $id ?>">
		            <button type="submit" name="submit3">VER INGRESOS</button>
		        </form>
		        
		        
			<p>Todos los derechos reservados &copy;</p>
		</footer>

	</body>
</html> 
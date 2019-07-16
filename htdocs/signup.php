<?php
session_start();
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>C.E.I. "Mundo de Colores"</title>
		<link rel="shortcut icon" href="img/globe.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/validacion.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		

 

	</head>
	
	<style>
    
.form-group {
  text-align:justify;
    background-color:deepskyblue;
    opacity: .9;
    width:50%;
    padding:10px;
    margin-top:10px;
    margin-left:auto;
    margin-right: auto;
    border-radius:20px;
}

        .box {
            height:40px;
            border-radius:15px;
            margin-top:7px;
            padding-left:10px;
        }    
        
        #list{
            height:30px;
            border-radius:10px;
            margin:5px;
            border-bottom-color: blueviolet;
        }
        
        
    </style>
	<body>
<header>
    <a href="admin_user.php" class="formabutton"><h3>Atras</h3></a>
						
			<div id="header">
				<img src="img/logo2.png">
			</div>
		</header>
		
		<?php 	if ($_SESSION['Admin']){ ?>
		
		
		
		<div class="bienvenido">

                
            <h1>REGISTRAR USUARIO</h1> 
                 
		
	
	
		</div><!--Bienvenido-->
	<div class="form-group">
		<h2>Ingrese los datos</h2>
	
		 <form class="signup-form" method="POST" onsubmit="return validar();" action="includes/signup.inc.php" >
            <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="box" placeholder="Nombre"  maxlength="15" required> <br><br>
            
            
            
            <label for="apellido">Apellido:</label> 
        <input type="text" name="apellido" class="box" placeholder="Apellido"  maxlength="15" required><br><br>



            <label for="cedula">Cedula:</label>
        <input type="number" name="cedula" class="box" placeholder="Cedula" min="1000000" max="40000000" required> <br><br>
        
        
        <label for="Cargo">Cargo : </label>
        
            <select id="list" name="cargo" required>
                <option value="Docente">Docente</option>
                <option value="Administrativo">Administrativo</option>
                <option value="Obrero">Obrero</option>
            </select><br><br>
            
            
            <label for="Turno" required>Turno:</label>
                            <select id="list"  name="turno">
                                    <option value="Diurno">Diurno</option>
                                    <option value="Vespertino">Vespertino</option>
                            </select>  <br><br>
                            
                            
           
        <input type="password" name="contra" class="box" placeholder="Contraseña" required>    <br><br>
        
        
        
        <input type="password" name="contra2"  class="box" placeholder="Confirmar contraseña" required><br>
        
        
                     <button type="submit" id="list" name="submit">Registrar</button>
<br>

<?php }
             else {
                 
               ?> <script> alert("Primero debe Iniciar Sesion."); window.location.href="log_admin.php"; </script> <?php exit();
             
             }
             
             ?>




</form>
	</div>

</body>
</html>
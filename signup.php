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
        
        
        <label for="Cargo">Materia: </label>
        
            <select id="list" name="cargo" required>
                <option value="CIENCIAS NATURALES 1">CIENCIAS NATURALES 1</option>
                <option value="CIENCIAS NATURALES 2">CIENCIAS NATURALES 2</option>
                <option value="BIOLOGIA 3">BIOLOGIA 3</option>
                <option value="BIOLOGIA 4">BIOLOGIA 4</option>
                <option value="BIOLOGIA 5">BIOLOGIA 5</option>
                <option value="QUIMICA 3">QUIMICA 3</option>
                <option value="QUIMICA 4">QUIMICA 4</option>
                <option value="QUIMICA 5">QUIMICA 5</option>
                <option value="FISICA 3">FISICA 3</option>
                <option value="FISICA 4">FISICA 4</option>
                <option value="FISICA 5">FISICA 5</option>
                <option value="CIENCIAS DE LA TIERRA 5">CIENCIAS DE LA TIERRA 5</option>
                <option value="EDUCACIÓN FISICA 1">EDUCACIÓN FISICA 1</option>
                <option value="EDUCACION FISICA 2">EDUCACION FISICA 2</option>
                <option value="EDUCACION FISICA 3">EDUCACION FISICA 3</option>
                <option value="EDUCACION FISICA 4">EDUCACION FISICA 4</option>
                <option value="EDUCACION FISICA 5">EDUCACION FISICA 5</option>
                <option value="CASTELLANO Y LITERATURA 1">CASTELLANO Y LITERATURA 1</option>
                <option value="CASTELLANO Y LITERATURA 2">CASTELLANO Y LITERATURA 2</option>
                <option value="CASTELLANO Y LITERATURA 3">CASTELLANO Y LITERATURA 3</option>
                <option value="CASTELLANO Y LITERATURA 4">CASTELLANO Y LITERATURA 4</option>
                <option value="CASTELLANO Y LITERATURA 5">CASTELLANO Y LITERATURA 5</option>
                <option value="INGLES Y OTRAS LENGUAS EXTRANJERAS 1">INGLES Y OTRAS LENGUAS EXTRANJERAS 1</option>
                <option value="INGLES Y OTRAS LENGUAS EXTRANJERAS 2">INGLES Y OTRAS LENGUAS EXTRANJERAS 2</option>
                <option value="INGLES Y OTRAS LENGUAS EXTRANJERAS 3">INGLES Y OTRAS LENGUAS EXTRANJERAS 3</option>
            
             
            </select><br><br>
            <label for="nombre">Horas:</label>
            <input type="text" name="horas" class="box" placeholder=""  maxlength="15" required><br><br>

            <label for="nombre">Guia:</label>
            <input type="text" name="guia" class="box" placeholder=""  maxlength="15" required><br><br>
                            
        
                     <button type="submit" id="list" name="submit">Registrar</button>
<br>

<?php }
             else {
                 
               ?> <script> alert("Tiene Que Iniciar Sesion"); window.location.href="log_admin.php"; </script> <?php exit();
             
             }
             
             ?>




</form>
	</div>

</body>
</html>
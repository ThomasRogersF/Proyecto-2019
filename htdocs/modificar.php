<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/codigo.css">
	<h1 class="titulo">ACCESO ADMINISTRATIVO</h1>
</head>
<body>

 
<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="bases.php">VOLVER</a></li>
			</ul>
			<div class="nav-login">
				
			</div>
		</div>
	</nav>
</header>
<section class="main-container">
	<div class="main-wrapper">
		<h2>MODIFICAR USUARIO</h2>
		
	
		 
		 <?php       
           if(isset($_REQUEST['submit2'])){
               
               $id=$_POST['id'];
               include ("includes/dbh.inc.php");
               $sql="SELECT * from usuario WHERE id_usuario='$id'";
               $result=mysqli_query($conn,$sql);
               $mostrar=mysqli_fetch_array($result);
             
             ?>
             
			 <form class="signup-form" method="POST" action="includes/operacion_guardar.php?=<?php echo $mostrar['id_usuario']; ?>">
			 
<input type="hidden" name="id" value="<?php echo $mostrar['id_usuario']; ?>" >
<label for="nombre" required>Nombre:</label>
<input type="text"  name="nombre" placeholder="nombre" value="<?php echo $mostrar['usuario_nombre'];?>"/> <br>
<label for="Apellido" required>Apellido:</label>
<input type="text"  name="apellido" placeholder="apellido" value="<?php echo $mostrar['usuario_apellido']; ?>"/> <br>
<label for="Cedula" required>Cedula:</label>
<input type="text"  name="cedula" placeholder="cedula" value="<?php echo $mostrar['usuario_cedula']; ?>"/><br> <br>
<label for="Cargo" required>Cargo:</label>
 <select id="list" name="cargo" required><br><br>
                <option value="<?php echo $mostrar['usuario_cargo'];?>"><?php echo $mostrar['usuario_cargo']; ?></option>
                <option value="Docente">Docente</option>
                <option value="Administrativo">Administrativo</option>
                <option value="Obrero">Obrero</option>
            </select>
<br><br>
 <label for="Turno" required>Turno:</label>
                            <select id="list"  name="turno">
                                    <option placeholder="<?php echo $mostrar['usuario_turno']; ?>"><?php echo $mostrar['usuario_turno']; ?></option>
                                    <option value="Diurno">Diurno</option>
                                    <option value="Vespertino">Vespertino</option>
                            </select>





 <br>
     <button type="submit" name="submit">Modificar</button>
<br>

<style>
    body{
          background-color:deepskyblue;
    }
                 </style>
<?php 
  }
else{
    ?> <script> alert("Volver"); window.location.href="bases.php"; </script> <?php exit();
}
	 ?>
</form>
	</div>
</section>
</body>
</html>
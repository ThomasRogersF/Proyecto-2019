
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/codigo.css">
	<h1 class="titulo">ACCESO ADMIN</h1>
</head>
<body>

 
<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">volver</a></li>
			</ul>
			<div class="nav-login">
				
			</div>
		</div>
	</nav>
</header>
<section class="main-container">
	<div class="main-wrapper">
		<h2>Cambiar Contra</h2>
		
	
		 
		 <?php       
           if(isset($_REQUEST['submit'])){
               $cedula=$_POST['cedula'];
               $nombre=$_POST['nombre'];
               include ("includes/dbh.inc.php");
               $sql="SELECT * from usuario WHERE usuario_nombre='$nombre' and usuario_cedula='$cedula'";
               $result=mysqli_query($conn,$sql);
               $mostrar=mysqli_fetch_array($result);
               $resultCheck = mysqli_num_rows($result);
               
               if($resultCheck < 1){
                 ?> <script> alert("Vuelva a intentarlo"); window.location.href="olvidar.php"; </script> <?php exit(); 
               }
               
               
               
             //bla no esta
             ?>
             <h1>Responda La Pregunta</h1>
             <h3>¿Cual es <?php echo $mostrar['Pregunta']; ?>? </h3>
			 <form class="signup-form" method="POST" action="includes/cambiar-con.php?=<?php echo $mostrar['id_usuario']; ?>">
                
            <input type="text" name="Respuesta" placeholder="Respuesta" required>
            <input type="password" name="contra" placeholder="contra" required>
            <input type="password" name="contra2" placeholder="contra2" required>
<input type="hidden" name="id" value="<?php echo $mostrar['id_usuario']; ?>">


 <br>
     <button type="submit" name="submit">registrar</button>
<br>

<style>
    body{
          background-color:deepskyblue;
    }
                 </style>
<?php 
  }
        else {
          ?> <script> alert("Vuelva a intentarlo"); window.location.href="olvidar.php"; </script> <?php exit(); 
        }
	 ?>
</form>
	</div>
</section>
</body>
</html>
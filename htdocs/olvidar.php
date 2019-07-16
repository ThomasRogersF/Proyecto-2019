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
    <title>C.E.I. "Mundo de Colores"</title>
    <link rel="shortcut icon" href="./img/globe.png">
    <link rel="stylesheet" type="text/css" href="./css/log_user.css">
    <link rel="stylesheet" type="text/css" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
  </head>
  <body>
    <header>
      <div id="header">
        <img src="./img/logo2.png">
      </div>
    </header>
    <div class="bienvenido">
      <h1>Cambiar Contraseña</h1>
    </div><!--Bienvenido-->
    <div class="login">
      <div class="formulario">
        <div id="login">
        
          <form action="cambiar_contra.php" method="POST">
                
          <p><i class="icon-user"></i><input type="text"  name="nombre" placeholder="nombre" onBlur="if(this.value == '') this.value = 'nombre'" onFocus="if(this.value == 'nombre') this.value = ''" required></p>
          <p><i class="icon-lock"></i><input type="text" name="cedula" placeholder="cedula" class  onBlur="if(this.value == '') this.value = ''" onFocus="if(this.value == '') this.value = ''" required maxlength="20" minlength="1" ></p>
          <p><input type="submit" name="submit" value="Recuperar"></p>

        </form>
        
        <center><a href="index.php"> <i class="icon-arrow-left"></i><b>   Regresar</b></a></center>

    </div> <!-- end login -->
      </div>
    </div>

  </body>

</html>

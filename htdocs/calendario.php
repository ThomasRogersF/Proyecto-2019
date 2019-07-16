<?php
session_start();

if(isset($_SESSION['Admin'])){
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bases De Datos</title>
        <meta charset="utf-8">
         <link rel="stylesheet" href="css/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/peticion.js"></script>
    </head>
   <body>
    <div class="alert alert-info"><h2></h2>
            <a href="admin_user.php" class="formabutton"><h3>Atras</h3></a>
           </div>
       
       <section>
                    
                     <input type="text" name="busqueda" id="busqueda" placeholder="buscar...">
       </section>
       <br>
       
       <div>
           <form action="pdf/Reporte-Asistencias.php" method="post" target="_blank">
              <label for="">Desde</label>
                   <input type="date" name="fecha1" placeholder="desde MM/DD/AAAA">
                       <label for="">Hasta</label>   
                    <input type="date" name="fecha2" placeholder="hasta MM/DD/AAAA">
                   <button type="submit" name="submit">Generar Planilla.</button>
           </form>
       </div>
       <br>
       <section id="tabla_resultado">
           
       </section>
       
       
       
       
   </body>
</html>


<?php }  else {

?> <script> alert("Primero debe Iniciar Sesion."); window.location.href="log_admin.php"; </script> <?php exit();





}   ?>
<?php

session_start();
    
include 'includes/dbh.inc.php';
$id=$_POST['id']; 
if(isset($_POST['submit3'])){

   
    
?>
<style>
table {
    border-collapse: collapse;
    width: 100%;
     border border-radius: 20px;
            border-color:black;
}

th, td {
    text-align: left;
    padding: 8px;
        border-color:black;
}

    td{
       
        background-color: aliceblue;
    }


th {
    background-color: #4CAF50;
    color: white;
} 
    
    form{
        width:160px;
        margin-left:15px;
        
        background-color: cornflowerblue;
        border-radius:15px;
        padding:10px;
    }    
    
    
</style>
<html>
<head>
<title>Bases de datos</title>
<link rel="stylesheet" type="text/css" href="css/codigo.css">
<link rel="stylesheet" href="css/style.css">
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="peticion.js"></script>
</head>

<body>
<div><a href="usuario.php" class="formabutton">Volver</a>
<h1>Bases de datos</h1>
</div>
<br>
<br>
<br>

<center>
	<table class="table">
        <tr>
            <th>ID</th>
            <th>Identificacion</th>
            <th>Nombre</th>
            <th>Fecha de Ingreso</th>
            <th>Hora Entrada</th>
            <th>Hora Salida</th>

        </tr>

        <?php 
        $sql="SELECT * from asistencia1 where id_usuario='$id' ";
        $result=mysqli_query($conn,$sql);

        while($mostrar=mysqli_fetch_array($result)){
         ?>


        <tr>
            <td><?php echo $mostrar['ID']; ?></td>
            <td><?php echo $mostrar['id_usuario']; ?></td>
            <td><?php echo $mostrar['usuario_nombre']; ?></td>
            <td><?php echo $mostrar['tiempo_entrada']; ?></td>
            <td><?php echo $mostrar['hora']; ?></td>
            <td><?php echo $mostrar['hora2']; ?></td>

        </tr>
    <?php 
    }
     ?>
    </table>
</center>
<br>


<form method="post" class="form" action="pdf/Reporte-Asistencias.php" target="_blank">
   <label for="fecha1"><h5>Desde</h5></label>
    <input type="date" name="fecha1" placeholder="desde MM/DD/AAAA">
    <label for="fecha2"><h5>Hasta</h5></label>
    <input type="date" name="fecha2" placeholder="hasta MM/DD/AAAA">
    <input type="hidden" name="id" value="<?php echo $_SESSION['u_id']; ?>"> <br><br>
    <input type="submit" name="submit2" class="formabutton">
</form>

</body>

</html>
<?php
    
    
    
}
else {
    ?> <script> alert("Debe Iniciar Sesion como Usuario."); window.location.href="log_user.php"; </script> <?php exit(); 
}






?>
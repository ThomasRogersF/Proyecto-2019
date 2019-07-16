<?php
$username=$_POST['uid'];
$password=($_POST['pwd']);
$login=$_POST['submit2'];
if(isset($login)){
  $mysqli = new mysqli("localhost", "root", "", "sistema");
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  }
  $res = $mysqli->query("SELECT * FROM usuario where usuario_cedula='$username' and contra2='$password'");
  $row = $res->fetch_assoc();
  
  $name = $row['usuario_nombre'];
  $user = $row['usuario_cedula'];
  $pass = $row['contra2'];
  
  if($user==$username && $pass=$password){
    session_start();
    
        $_SESSION['usuario_nombre']=$name;
      $_SESSION['Admin']=$pass;
    //  $_SESSION[1]=$type;
      header("Location: ../admin_user.php?login=success");
    
  }
      else{
?> <script> alert("Datos incorrectos, intente nuevamente."); window.location.href="../log_admin.php"; </script> <?php exit();
    }
  } else{
       
 header("Location: ../log_admin.php?login=error");

    
  }

?>

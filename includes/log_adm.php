<?php
$username=$_POST['uid'];
$password=($_POST['pwd']);
$login=$_POST['submit2'];
if(isset($login)){
  $mysqli = new mysqli("localhost", "root", "", "sistema1");
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  }
  $res = $mysqli->query("SELECT * FROM us where cedula='$username' and pas='$password'");
  $row = $res->fetch_assoc();
  
  /*$name = $row['cedula'];*/
  $user = $row['cedula'];
  $pass = $row['pas'];
  
  if($user==$username && $pass=$password){
    session_start();
    
        $_SESSION['nombre']=$name;
      $_SESSION['Admin']=$pass;
    //  $_SESSION[1]=$type;
      header("Location: ../admin_user.php?login=success");
    
  }
      else{
?> <script> alert("Datos incorrectos"); window.location.href="../log_admin.html"; </script> <?php exit();
    }
  } else{
       
 header("Location: ../log_admin.html?login=error");

    
  }

?>

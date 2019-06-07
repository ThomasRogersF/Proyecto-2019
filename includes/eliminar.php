<?php
#first if
include ("dbh.inc.php");



$id=$_REQUEST['id_usuario'];
echo $id;
$sql = "DELETE FROM usuario WHERE id_usuario='$id'";
$result=mysqli_query($conn,$sql);

if($result==1){
				header("Location: ../bases.php?delete=success");
			exit();
       }
                        
                
			
 /*first else*/

else {
	header("Location: ../bases.php?error");
	exit();
}
?>
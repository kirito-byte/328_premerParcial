<?php
    include "conexion.php";
	include "user_session.php";
    $user=$_GET["nom"];
    $password=$_GET["con"];
    $sql="select * from acceso where usuario='".$user."' and password='".$password."'";
	$con = new Conexion();
    $resultado=mysqli_query($con, $sql);
	$ayuda=0;
    while($fila=mysqli_fetch_array($resultado)){
        $datos['ci']=$fila['ci'];
		$datos['rol']=$fila['rol'];
		$ayuda++;
    }
	if($ayuda!=0){
		
		if(!isset($_SESSION['user'])){
			$userSession = new UserSession();
			$userSession->setCurrentUser($user, $password);
		}
		if($datos['rol']=="director"){
			header("Location: index1.php?nom=".$user);
		}else{
			header("Location: index2.php?nom=".$user);
		}
		

	}else{
		header("Location: index.php?u=false");
	}
?>

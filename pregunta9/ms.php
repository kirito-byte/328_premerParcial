<?php
include "Conexion.php";
$pdo = new Conexion();

if ($_SERVER["REQUEST_METHOD"]=="GET")
{
	if (isset($_GET["ci"]))
	{
		if($_GET["ci"]!=""){
			$sql = $pdo->prepare("select * from persona where ci=:ci");
			$sql->bindValue(':ci',$_GET["ci"]);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 existen datos");
			echo json_encode($sql->fetchAll());
			exit;
		}else{
			$sql = $pdo->prepare("select * from persona");
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 existen datos");
			echo json_encode($sql->fetchAll());
			exit;
		}
	}else{
		header("HTTP/1.1 400 Requerimiento inexistente");
	}
	
	
}
if ($_SERVER["REQUEST_METHOD"]=="POST")
{	
	if(isset($_POST["ci"])){
		$s="insert into persona(ci,nombre_completo,fecha_nacimiento,departamento)";
		$s.=" values (:ci,:nombre_completo,:fecha_nacimiento,:departamento)";
		$sql = $pdo->prepare($s);
		$sql->bindValue(':ci',$_POST["ci"]);
		$sql->bindValue(':nombre_completo',$_POST["nombre_completo"]);
		$sql->bindValue(':fecha_nacimiento',$_POST["fecha_nacimiento"]);
		$sql->bindValue(':departamento',$_POST["departamento"]);
		$sql->execute();
		echo "si se insertó";
		$state=$pdo->lastInsertId();
		if ($state)
		{
			header("HTTP/1.1 200 insercion correcta");
			echo json_encode($state);
			
			exit;
		}
	}
	if(isset($_POST["ci_E"])){
		$sql = $pdo->prepare("delete from persona where ci=:ci");
		$sql->bindValue(':ci',$_POST["ci_E"]);
		$sql->execute();
		echo "se eliminó";
		header("HTTP/1.1 200 borrado");
		exit;
	}
	if(isset($_POST["ci_P"])){
		$s="update persona set nombre_completo='".$_POST['nombre_completo']."',fecha_nacimiento='".$_POST['fecha_nacimiento']."', departamento='".$_POST['departamento']."'";
		//$s="update persona set nombre_completo=nombre_completo,fecha_nacimiento=fecha_nacimiento, departamento=departamento";
		$s.="where ci='".$_POST['ci_P']."'";
		$sql = $pdo->prepare($s);
		$sql->bindValue(':ci',$_POST["ci_P"]);
		$sql->bindValue(':nombre_completo',$_POST["nombre_completo"]);
		$sql->bindValue(':fecha_nacimiento',$_POST["fecha_nacimiento"]);
		$sql->bindValue(':departamento',$_POST["departamento"]);
		$sql->execute();
		echo "se modificó";
		exit;
	}
}

?>
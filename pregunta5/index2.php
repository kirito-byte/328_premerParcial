<?php 
    include "head2.php";
    include "conexion.php";
	$user=$_GET['nom'];
	$con = new Conexion();
    $sql="select * from acceso where usuario LIKE '".$user."'";
    $res=mysqli_query($con, $sql);
    while($fi=mysqli_fetch_array($res)){
        $datos['ci']=$fi['ci'];
		$datos['rol']=$fi['rol'];
    }
?>
<h3>Bienvenido <?php echo $user?> estas son las materias a las cuales estas registrado.</h3></p>


<div style="text-align:center;">
    <table style="margin: 0 auto;">
        <thead>
        <tr>
        <td>ci</td>
        <td>sigla</td>
        <td>nota1</td>
        <td>nota2</td>
        <td>nota3</td>
        <td>nota_final</td>
        </tr>
    </thead>
    <tbody>
    <?php
    $sql="select * from inscripcion where ci_estudiante='".$datos["ci"]."'";
    $resultado=mysqli_query($con, $sql);
    while($filas=mysqli_fetch_array($resultado)){
        echo "</tr>";
        echo "<td>".$filas['ci_estudiante']."</td>";
        echo "<td>".$filas['sigla']."</td>";
        echo "<td>".$filas['nota1']."</td>";
        echo "<td>".$filas['nota2']."</td>";
        echo "<td>".$filas['nota3']."</td>";
        echo "<td>".$filas['notafinal']."</td>";
        echo "</tr>";
        }
    ?>
    </tbody>
    </table>
</div>

<?php include "miestilofin.inc.php"?>

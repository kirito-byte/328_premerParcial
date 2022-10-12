<?php 
    include "head1.php";
    include "conexion.php";
	$user=$_GET['nom'];
	$con = new Conexion();

?>
<h3>Bienvenido <?php echo $user?> </h3>

<p>Materias de los estudiante inscritos hasta ahora</p>

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
	$sql="select * from inscripcion ";
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

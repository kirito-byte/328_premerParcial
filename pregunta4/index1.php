<?php 
    include "head1.php";
    include "conexion.php";
	$user=$_GET['nom'];
	$con = new Conexion();
	$sql = "select p.departamento, AVG(i.notafinal) promedio
	from persona p, inscripcion i 
	where p.ci=i.ci_estudiante
	group by p.departamento;";
    $resultado=mysqli_query($con, $sql);
?>
<h3>Bienvenido <?php echo $user?> </h3>

<p>Materias de los estudiante inscritos hasta ahora</p>

<div style="text-align:center;">
<table>
	<thead>
		<tr>
			<td>CH</td>
			<td>LP</td>
			<td>CB</td>
			<td>RU</td>
			<td>PT</td>
			<td>TA</td>
			<td>SC</td>
			<td>BE</td>
			<td>PD</td>
		</tr>
	</thead>
	<tbody>
	<?php
		while($fila=mysqli_fetch_array($resultado)){
			echo "<td>".$fila['promedio']."</td>";
		}
	?>
	</tbody>
	</table>
</div>

<?php include "miestilofin.inc.php"?>

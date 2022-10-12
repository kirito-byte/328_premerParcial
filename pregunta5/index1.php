<?php 
    include "head1.php";
    include "conexion.php";
	$user=$_GET['nom'];
	$con = new Conexion();
	$sql = "select avg(case when persona.departamento='01' then inscripcion.notafinal end) CH, avg(case when persona.departamento='02' then inscripcion.notafinal end) LP, avg(case when persona.departamento='03' then inscripcion.notafinal end) CB, avg(case when persona.departamento='04' then inscripcion.notafinal end) RU, avg(case when persona.departamento='05' then inscripcion.notafinal end) PT, avg(case when persona.departamento='06' then inscripcion.notafinal end) TA, avg(case when persona.departamento='07' then inscripcion.notafinal end) SC, avg(case when persona.departamento='08' then inscripcion.notafinal end) BE, avg(case when persona.departamento='09' then inscripcion.notafinal end ) PD from persona, inscripcion where persona.ci=inscripcion.ci_estudiante;";
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
			echo "<td>".$fila['CH']."</td>";
			echo "<td>".$fila['LP']."</td>";
			echo "<td>".$fila['CB']."</td>";
			echo "<td>".$fila['RU']."</td>";
			echo "<td>".$fila['PT']."</td>";
			echo "<td>".$fila['TA']."</td>";
			echo "<td>".$fila['SC']."</td>";
			echo "<td>".$fila['BE']."</td>";
			echo "<td>".$fila['PD']."</td>";
		}
	?>
	</tbody>
	</table>
</div>

<?php include "miestilofin.inc.php"?>

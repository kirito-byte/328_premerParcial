

<?php include "miestiloinicio.inc.php"?>


		<div id="login_u">
			<h2>
				Inicio de Sesion
			</h2>
			<form metod="GET" action="users.php">
				<label for="nom">
					<span>Nombre:</span>
					<input type="text" name="nom" id="nom">
				</label>
				<label for="con">
					<span>Contraseña:</span>
					<input type="password" name="con" id="con">
				</label>
				<button type="submit">Ingresar</button>
			</form>
		</div>

		<?php
			if($indice==false){
				echo "<p>El usuario o la contraseña no son correctos</p>";
			}else{
				echo "";
			}
		?>

<?php include "miestilofin.inc.php"?>

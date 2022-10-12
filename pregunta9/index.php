
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micro Servicio</title>
</head>
<body>
    <header>
        Micro Servicio PHP
    </header>
    <main style="display:flex;justify-content:center; align-content:center; flex-direction:column;">
        <div>
            <h4>Get</h4>
            <form action="ms.php" method="get">
                <label for="ci">
                    <span>Ci</span>
                    <input type="text" name="ci" id="ci">
                </label>
                <button type="submit">Mostrar</button>
            </form>
            
        </div>
        <div>
            <h4>Post</h4>
            <form action="ms.php" method="post" style="display:flex;flex-direction:column;">
                <label for="ci">
                    <span>Ci</span>
                    <input type="text" name="ci" id="ci">
                </label>
                <label for="nombre_completo">
                    <span>Nombre Completo</span>
                    <input type="text" name="nombre_completo" id="nombre_completo">
                </label>
                <label for="fecha_nacimiento">
                    <span>Fecha Nacimiento</span>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" >
                </label>
                <label for="departamento">
                    <span>Departamento</span>
                    <input type="text" name="departamento" id="departamento" >
                </label>
                <button type="submit" style="width:150px;">Crear</button>
            </form>
            
        </div>
        <div>
            <h4>Delete</h4>
            <form action="ms.php" method="post">
                <label for="ci_E">
                    <span>Ci</span>
                    <input type="text" name="ci_E" id="ci_E">
                </label>
                <button type="submit">Eliminar</button>
            </form>
            
        </div>
        <div>
            <h4>Put</h4>
            <form action="ms.php" method="POST" style="display:flex;flex-direction:column;">
                <label for="ci_P">
                    <span>Ci</span>
                    <input type="text" name="ci_P" id="ci_P">
                </label>
                <label for="nombre_completo">
                    <span>Nombre Completo</span>
                    <input type="text" name="nombre_completo" id="nombre_completo">
                </label>
                <label for="fecha_nacimiento">
                    <span>Fecha Nacimiento</span>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" >
                </label>
                <label for="departamento">
                    <span>Departamento</span>
                    <input type="text" name="departamento" id="departamento" >
                </label>
                <button type="submit" style="width:150px;">Modificar</button>
            </form>
        </div>
    </main>
</body>
</html>
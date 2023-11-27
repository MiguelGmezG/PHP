<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Alta de Usuario</title>
    <link rel="stylesheet" href="../index.css">

</head>

<body>
    <h2>Formulario de Alta de Usuario</h2>
    <form action="ejercicio03.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="usuario">Nombre de Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <label for="confirmar_password">Confirmar Contraseña:</label>
        <input type="password" id="confirmar_password" name="confirmar_password" required>
        <br>
        <label for="bloqueado">Bloqueado:</label>
        <select id="bloqueado" name="bloqueado" required>
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select>
        <br>
        
        <br>
        <label>Departamento:</label>
        <br>
        <input type="checkbox" id="comercial" name="departamento[]" value="Comercial" >Comercial
        <input type="checkbox" id="marketing" name="departamento[]" value="Marketing" >Marketing
        <input type="checkbox" id="direccion" name="departamento[]" value="Dirección" >Dirección
        <br>      <br>        
     

        <label for="foto">Subir Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required>
        <br>   <br>        

        <input type="submit" value="Registrarse">
    </form>
</body>

</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario POST</title>
</head>
<body>
    <h1>Datos Personales (POST)</h1>
    <form action="procesar_datos.php" method="POST">
        <input type="hidden" name="form_type" value="post">
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion"><br><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono"><br><br>
        
        <input type="submit" value="Enviar Datos">
    </form>
    
    <p><a href="index2.php">Ir al formulario GET</a></p>
</body>
</html>
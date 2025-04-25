<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario GET</title>
</head>
<body>
    <h1>Datos Académicos (GET)</h1>
    <form action="procesar_datos.php" method="GET">
        <input type="hidden" name="form_type" value="get">
        
        <label for="universidad">Universidad:</label>
        <input type="text" id="universidad" name="universidad"><br><br>
        
        <label for="carrera">Carrera:</label>
        <input type="text" id="carrera" name="carrera"><br><br>
        
        <label for="semestre">Semestre:</label>
        <input type="text" id="semestre" name="semestre"><br><br>
        
        <input type="submit" value="Enviar Datos">
    </form>
    
    <p><a href="index.php">Ir al formulario POST</a></p>
</body>
</html>
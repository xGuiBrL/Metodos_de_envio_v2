<?php
// Procesamiento para ambos tipos de formularios
if(isset($_REQUEST['form_type'])) {
    if($_REQUEST['form_type'] == 'post') {
        // Procesamiento POST
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["nombre"]) || empty($_POST["direccion"]) || empty($_POST["telefono"])) {
                echo "Coloque los datos por favor (POST)";
            } else {
                echo "<h2>Datos Recibidos (POST):</h2>";
                echo "Nombre: " . htmlspecialchars($_POST["nombre"]) . "<br>";
                echo "Dirección: " . htmlspecialchars($_POST["direccion"]) . "<br>";
                echo "Teléfono: " . htmlspecialchars($_POST["telefono"]) . "<br>";
            }
        } else {
            echo "Error: Se esperaba método POST";
        }
    } elseif($_REQUEST['form_type'] == 'get') {
        // Procesamiento GET
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            if(empty($_GET["universidad"]) || empty($_GET["carrera"]) || empty($_GET["semestre"])) {
                echo "Coloque los datos por favor (GET)";
            } else {
                echo "<h2>Datos Recibidos (GET):</h2>";
                echo "Universidad: " . htmlspecialchars($_GET["universidad"]) . "<br>";
                echo "Carrera: " . htmlspecialchars($_GET["carrera"]) . "<br>";
                echo "Semestre: " . htmlspecialchars($_GET["semestre"]) . "<br>";
            }
        } else {
            echo "Error: Se esperaba método GET";
        }
    }
} else {
    echo "Error: Tipo de formulario no especificado";
}

echo '<p><a href="index.php">Volver al formulario POST</a></p>';
echo '<p><a href="index2.php">Volver al formulario GET</a></p>';
?>
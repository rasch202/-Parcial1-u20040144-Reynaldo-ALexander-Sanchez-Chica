<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Palabras</title>
</head>
<body>

    <h2>Contador de Palabras</h2>
    <form method="post">
        <label for="frase">Introduce una frase:</label><br>
        <input type="text" id="frase" name="frase" placeholder="Escribe algo..." required><br><br>
        <input type="submit" value="Contar Palabras">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la frase ingresada por el usuario
        $frase = $_POST['frase'];

        // Contar las palabras de la frase
        $cantidad_palabras = str_word_count($frase);

        // Mostrar el resultado
        echo "<p>La frase tiene <strong>$cantidad_palabras</strong> palabra(s).</p>";
    }
    ?>

</body>
</html>
<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/styles.css">
    <title>Index</title>
</head>
<body>
<!--Formulario para la creación del tablero-->
    <h2>Bienvenido a trello clone</h2>
    <form action="actions/add_board.php" method="POST">
        <label for="titulo">Introduzca titulo del tablero:</label>
        <input type="text" id="titulo" name="titulo" maxlength="40" required>
        <input type="submit" value="Crear tablero">
    </form>

        <div class="d-flex flex-row gap-3 justify-content-center">
        <?php
            #Bucle para recorrer los boards y mostrarlos en pantalla
            foreach ($_SESSION['boards'] as $board) {
                echo '<div id="boards" class="p-3 border rounded">
                        <p>' . $board['name'] .
                        ' <a href="board.php?id=' . $board['id'] . '">Ir al tablero</a></p>
                       </div>';
            }
        ?>
        </div>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    $ti = $_POST['titulo'];
    $au = $_POST['autor'];
    $ap = $_POST['aniopublicacion'];
    $nh = $_POST['numerohojas'];
    $ed = $_POST['editorial'];
    session_start();
    include "libro.php";
    $_SESSION['libro'] = new Libro($ti, $au, $ap, $nh, $ed);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title> Libros </title>
</head>

<body>
    <div class="container">
        <div class="items">
            <h1> Registrar datos </h1>
            <form method="POST">
                <input type="text" name="titulo" placeholder="Ingrese titulo" required>
                <input type="text" name="autor" placeholder="Ingrese autor" required>
                <input type="text" name="aniopublicacion" placeholder="Ingrese año de publicacion" required>
                <input type="text" name="numerohojas" placeholder="Ingrese numero de hojas" required>
                <input type="text" name="editorial" placeholder="Ingrese editorial" required>
                <input type="submit" name="enviar" value="Guardar">
            </form>
        </div>
        <div class="items">
            <h1> Datos almacenados </h1>
            <table id="customers">
                <tr>
                    <th>Atributo</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>Titulo</td>
                    <td>
                        <?php
                        echo ($_SESSION['libro']->{'titulo'});
                        ?>
                    </td>
                </tr>
                <tr>
                    <td> Autor</td>
                    <td>
                        <?php
                        echo ($_SESSION['libro']->{'autor'});
                        ?>
                    </td>
                </tr>
                <tr>
                    <td> Año de publicación</td>
                    <td>
                        <?php
                        echo ($_SESSION['libro']->{'aniopublicacion'});
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Numero de hojas</td>
                    <td>
                        <?php
                        echo ($_SESSION['libro']->{'numerohojas'});
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Editorial</td>
                    <td>
                        <?php
                        echo ($_SESSION['libro']->{'editorial'});
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
<?php
require "estudiante_fisica.php";
if (isset($_POST["enviar"])) {
    $no = $_POST['nombre'];
    $ap = $_POST['apellido'];
    $ed = $_POST['edad'];
    $pa = $_POST['parciales'];
    $la = $_POST['laboratorios'];
    $pr = $_POST['proyecto'];
    $se = $_POST['semestral'];
    $est = new EstudianteFisica($no, $ap, $ed);
    $est->setSemestral($se);
    $est->setProyecto($pr);
    $est->setLaboratorios($la);
    $est->setParciales($pa);
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
            <h1> Registrar Estudiante </h1>
            <form method="POST">
                <input type="text" name="nombre" placeholder="Ingrese nombre" required>
                <input type="text" name="apellido" placeholder="Ingrese apellido" required>
                <input type="text" name="edad" placeholder="Ingrese su edad" required>
                <div class='nota'>
                    <p> Nota Parciales</p>
                    <input class="input" type="number" name="parciales" value="0" required>
                </div>
                <div class='nota'>
                    <p> Nota Laboratorios</p>
                    <input class="input" type="number" name="laboratorios" value="0" required>
                </div>
                <div class='nota'>
                    <p> Nota Proyecto</p>
                    <input class="input" type="number" name="proyecto" value="0" required>
                </div>
                <div class='nota'>
                    <p> Nota semestral</p>
                    <input class="input" type="number" name="semestral" value="0" required>
                </div>
                <input type="submit" name="enviar" value="Guardar">
            </form>
        </div>
        <div class="items">
            <h1> Datos almacenados </h1>
            <table id="customers">
                <tr>
                    <th>Categoria</th>
                    <th>Nota</th>
                </tr>
                <tr>
                    <td>Nota Parciales</td>
                    <td>
                        <?php
                        echo $est->getParciales()
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Nota Laboratorios</td>
                    <td>
                        <?php
                        echo $est->getLaboratorios()
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Nota Proyecto</td>
                    <td>
                        <?php
                        echo $est->getProyecto()
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Nota semestral</td>
                    <td>
                        <?php
                        echo $est->getSemestral()
                        ?>
                    </td>
                </tr>
            </table>
            <div class='getnotas'>
                <?php
                $est->getNotas();
                ?>
            </div>
        </div>
    </div>
</body>

</html>
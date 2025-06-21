<?php
include "model/conn.php";
$ID = $_GET["id"] ?? null;
$sql = $conn->query("select * from usuarios where id='$ID'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
    <script src="https://kit.fontawesome.com/af1a09fa4d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" i
        ntegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <form class="col-3 p-3 m-auto" method="POST">
        <h4>EDITA TU NOTA</h4>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "controller/edit_user.php";
        while ($datos = $sql->fetch_object()) {
        ?>
            <div class="mb-3">
                <label for="nombre_label" class="form_label"> Escribe tu nombre y Apellido</label>
                <input type="text" class="form-control" name="nombreyapellido" id="nombre_label" value="<?= $datos->nombreyapellido ?>">
            </div>
            <div class="mb-3">
                <label for="usuario_label" class="form_label"> Escribe tu usuario</label>
                <input type="text" class="form-control" name="usuario" id="nombre_label" value="<?= $datos->usuario ?>">
            </div>
            <div class="mb-4">
                <label for="email_label" class="form_label"> Escribe tu correo electrónico</label>
                <input type="email" class="form-control" name="email" id="email_label" value="<?= $datos->email ?>">
            </div>
            <div class="mb-3">
                <label for="nota_label" class="form-label">Escribe tu nota</label>
                <textarea name="nota" placeholder="Por favor, escribe tu mensaje aqui"></textarea>
            </div>
        <?php
        }
        ?>
        <div class="col text-center">
            <button type="submit" class="btn_enviar" name="btnupdate" value="ok">EDITAR</button>
        </div>
    </form>
</body>

</html>
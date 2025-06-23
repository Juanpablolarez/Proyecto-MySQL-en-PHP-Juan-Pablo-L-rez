<?php

if (!empty($_POST["btnupdate"])) {
    if (!empty($_POST["id"]) and !empty($_POST["nombreyapellido"]) and !empty($_POST["usuario"]) and !empty($_POST["email"]) and !empty($_POST["nota"])) {


        $ID = $_POST["id"];
        $nombreyapellido = $_POST["nombreyapellido"];
        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $nota = $_POST["nota"];
        $fecha = date("Y-m-d  H:i:s");

        $sql = $conn->query("update usuarios set nombreyapellido='$nombreyapellido', usuario='$usuario', email='$email', nota='$nota' where id='$ID'");
        if ($sql == 1) {
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        } else {
            echo "<div class= 'alert alert-danger'>Error, intentalo de nuevo</div>";
        }
    } else {
        echo "<div class= 'alert alert-warning'>Hay casillas vacias, intentelo de nuevo </div>";
    }
}


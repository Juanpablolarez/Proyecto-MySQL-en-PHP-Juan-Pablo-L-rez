<?php

if(!empty($_GET["id"])){
    $ID=$_GET["id"];
    $sql=$conn->query("delete from usuarios where id ='$ID'");

    if($sql==1){
       echo '<script>window.location.href = "index.php";</script>';
         exit();
    }else{
        echo "<div class='alert alert-danger'>Error al borrar el usuario</div>";
    }
    
}
?>